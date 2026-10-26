const $ = s => document.querySelector(s);
const $$ = s => [...document.querySelectorAll(s)];

let currentCategory = window.__INITIAL_CATEGORY__ || 'hotel';
let directoryData = {};

// Parse JSON
try { directoryData = JSON.parse($('#directory-data').textContent); } catch(e){}

// DOM
const cardContainer = $('#cardContainer');
const emptyState = $('#emptyState');
const resultCount = $('#resultCount');
const pageTitle = $('#pageTitle');
const pageDescription = $('#pageDescription');
const filterLabel1 = $('#filterLabel1');
const qualityFilter = $('#qualityFilter');
const priceFilter = $('#priceFilter');
const sortFilter = $('#sortFilter');
const locationSearch = $('#locationSearch');
const searchBtn = $('#searchBtn');

function priceRange(price){
  if(price < 1_000_000) return 'low';
  if(price <= 5_000_000) return 'medium';
  return 'high';
}
function formatPrice(n){
  return 'Rp ' + n.toLocaleString('id-ID');
}
function esc(s){
  return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}
function getFiltered(){
  const cat = directoryData[currentCategory];
  if(!cat) return [];
  let items = [...cat.items];
  const q = locationSearch.value.trim().toLowerCase();
  const qf = qualityFilter.value;
  const pf = priceFilter.value;
  if(q) items = items.filter(i => (i.name+' '+i.location+' '+(i.badge||'')).toLowerCase().includes(q));
  if(qf !== 'all') items = items.filter(i => String(i.quality) === qf);
  if(pf !== 'all') items = items.filter(i => priceRange(i.price) === pf);
  const sort = sortFilter.value;
  if(sort==='rating') items.sort((a,b)=>b.rating-a.rating);
  else if(sort==='lowPrice') items.sort((a,b)=>a.price-b.price);
  else if(sort==='highPrice') items.sort((a,b)=>b.price-a.price);
  return items;
}
function render(){
  const cat = directoryData[currentCategory];
  if(!cat) return;
  const items = getFiltered();
  cardContainer.innerHTML = '';
  if(!items.length){
    cardContainer.style.display='none';
    emptyState.style.display='flex';
    resultCount.textContent='0';
    return;
  }
  cardContainer.style.display='grid';
  emptyState.style.display='none';
  resultCount.textContent = items.length;
  items.forEach((item,idx)=>{
    const card = document.createElement('article');
    card.className='directory-card';
    card.innerHTML=`
      <div class="card-image">
        <img src="${esc(item.image)}" alt="${esc(item.name)}" loading="lazy" onerror="this.src='https://picsum.photos/seed/${esc(item.id)}/600/400'">
        ${item.badge?`<span class="card-badge">${esc(item.badge)}</span>`:''}
        <button class="favorite-btn" type="button" aria-label="Favorite"><iconify-icon icon="solar:heart-linear"></iconify-icon></button>
      </div>
      <div class="card-content">
        <div class="card-title-row">
          <h3>${esc(item.name)}</h3>
          <span class="rating"><iconify-icon icon="solar:star-bold"></iconify-icon> ${Number(item.rating).toFixed(1)}</span>
        </div>
        <div class="card-location"><iconify-icon icon="solar:map-point-linear"></iconify-icon> ${esc(item.location)}</div>
        <div class="card-divider"></div>
        <div class="price-label">${esc(item.priceLabel||item.price_text||'Mulai dari')}</div>
        <div class="card-price"><strong>${formatPrice(item.price)}</strong><span>${esc(item.unit||'/ malam')}</span></div>
        <button class="book-button" type="button">Lihat Detail</button>
      </div>`;
    cardContainer.appendChild(card);
    requestAnimationFrame(()=> setTimeout(()=> card.classList.add('card-show'), 35*idx));
    card.querySelector('.favorite-btn').addEventListener('click',function(){
      this.classList.toggle('favorite-active');
      const ic=this.querySelector('iconify-icon');
      if(ic) ic.setAttribute('icon', this.classList.contains('favorite-active')?'solar:heart-bold':'solar:heart-linear');
    });
  });
}
function updateHeader(){
  const cat = directoryData[currentCategory];
  if(!cat) return;
  pageTitle.textContent = cat.title;
  pageDescription.textContent = cat.description;
  filterLabel1.textContent = cat.filterLabel || 'FILTER';
  let opts=[];
  if(Array.isArray(cat.qualityOptions)) opts=cat.qualityOptions;
  else if(cat.filterOptions && typeof cat.filterOptions==='object'){
    opts=Object.entries(cat.filterOptions).filter(([k])=>k!=='all').map(([value,label])=>({value,label}));
  }
  qualityFilter.innerHTML = '<option value="all">Semua</option>' + opts.map(o=>`<option value="${esc(o.value)}">${esc(o.label)}</option>`).join('');
  qualityFilter.value='all';
}

function switchCategory(cat){
  if(!directoryData[cat]) return;
  currentCategory = cat;
  $$('.submenu-item').forEach(b=> b.classList.toggle('active', b.dataset.category===cat));
  const targetGroup = directoryData[cat].group;
  $$('.menu-group').forEach(g=>{
    const is = g.dataset.group===targetGroup;
    g.classList.toggle('open', is);
    g.querySelector('.menu-heading').setAttribute('aria-expanded', is?'true':'false');
    g.querySelector('.submenu').classList.toggle('show', is);
  });
  // reset filters
  locationSearch.value='';
  priceFilter.value='all';
  sortFilter.value='default';
  updateHeader();
  render();
  history.replaceState(null,'','?category='+encodeURIComponent(cat));
  // mobile close
  $('#sidebar').classList.remove('open');
  $('#sidebarOverlay').classList.remove('active');
  window.scrollTo({top:0,behavior:'smooth'});
}

// Accordion - smooth max-height, single open
$$('.menu-heading').forEach(btn=>{
  btn.addEventListener('click',()=>{
    const group = btn.closest('.menu-group');
    const willOpen = !group.classList.contains('open');
    $$('.menu-group').forEach(g=>{
      g.classList.remove('open');
      g.querySelector('.menu-heading').setAttribute('aria-expanded','false');
      g.querySelector('.submenu').classList.remove('show');
    });
    if(willOpen){
      group.classList.add('open');
      btn.setAttribute('aria-expanded','true');
      group.querySelector('.submenu').classList.add('show');
    }
  });
});
$$('.submenu-item').forEach(b=> b.addEventListener('click',()=> switchCategory(b.dataset.category)));

// filters
searchBtn.addEventListener('click', render);
locationSearch.addEventListener('keydown', e=>{ if(e.key==='Enter') render(); });
qualityFilter.addEventListener('change', render);
priceFilter.addEventListener('change', render);
sortFilter.addEventListener('change', render);

// mobile
$('#mobileMenuBtn').addEventListener('click',()=>{
  $('#sidebar').classList.add('open');
  $('#sidebarOverlay').classList.add('active');
});
$('#sidebarOverlay').addEventListener('click',()=>{
  $('#sidebar').classList.remove('open');
  $('#sidebarOverlay').classList.remove('active');
});

// init
$$('.submenu-item').forEach(b=> b.classList.toggle('active', b.dataset.category===currentCategory));
updateHeader();
render();