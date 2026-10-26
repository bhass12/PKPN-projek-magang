---
name: "PKPN — Pusat Kajian Pariwisata Nusantara"
description: "Warm institutional research platform — soft-radius cards, badge pills, and icon tiles on a light paper ground; deep navy ink, one natural-teal accent, and gold reserved for data accents."
colors:
  navy-deep: "#07131F"
  navy: "#0B1B2B"
  navy-surface: "#122436"
  teal: "#0D5C52"
  teal-dark: "#073D36"
  teal-light: "rgba(13, 92, 82, 0.08)"
  gold: "#B48424"
  bg-light: "#F8F9FA"
  surface-white: "#FFFFFF"
  border-subtle: "rgba(11, 27, 43, 0.08)"
  border-hover: "rgba(13, 92, 82, 0.28)"
  text-primary: "#0B1B2B"
  text-muted: "#4A5568"
  text-muted-light: "#8A99AD"
  footer-accent: "#2DD4BF"
  navbar-cream: "#F4F4ED"
  navbar-teal: "#116A5A"
  navbar-navy: "#00152A"
  hero-dot: "#34D399"
typography:
  display:
    fontFamily: "Epilogue, system-ui, sans-serif"
    fontSize: "clamp(34px, 4.2vw, 50px)"
    fontWeight: 800
    lineHeight: 1.15
    letterSpacing: "-0.03em"
  display-dark-hero:
    fontFamily: "Epilogue, system-ui, sans-serif"
    fontSize: "clamp(2.4rem, 4vw, 3.4rem)"
    fontWeight: 800
    lineHeight: 1.12
    letterSpacing: "-0.025em"
  headline:
    fontFamily: "Epilogue, system-ui, sans-serif"
    fontSize: "clamp(28px, 3.4vw, 38px)"
    fontWeight: 800
    lineHeight: 1.2
    letterSpacing: "-0.025em"
  title:
    fontFamily: "Epilogue, system-ui, sans-serif"
    fontSize: "1.15rem - 1.25rem"
    fontWeight: 700
    lineHeight: 1.3
    letterSpacing: "-0.025em"
  stat:
    fontFamily: "Epilogue, system-ui, sans-serif"
    fontSize: "30px (1.45rem in dark hero)"
    fontWeight: 800
    lineHeight: 1
    letterSpacing: "-0.03em"
    fontFeature: "tnum"
  lead:
    fontFamily: "Be Vietnam Pro, system-ui, sans-serif"
    fontSize: "17px (15.5 - 16px for section leads)"
    fontWeight: 400
    lineHeight: 1.7
  body:
    fontFamily: "Be Vietnam Pro, system-ui, sans-serif"
    fontSize: "14px (13.5 - 15.5px range)"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "Epilogue / Be Vietnam Pro"
    fontSize: "11 - 12px"
    fontWeight: 600 - 700
    letterSpacing: "0.04 - 0.12em (uppercase for status tags)"
  chrome:
    fontFamily: "Poppins, system-ui, sans-serif"
    fontWeight: "300 - 700"
    role: " navbar / footer / shared component chrome"
rounded:
  sm: "8px"
  md: "14px"
  lg: "20px"
  badge: "6px"
  iconTileLg: "12px (44px tile)"
  iconTileSm: "10px (42px tile)"
  pill: "9999px"
spacing:
  xs: "8px"
  sm: "14px"
  md: "24px"
  lg: "48px"
  xl: "56px"
  section: "88px"
components:
  button-primary:
    backgroundColor: "{colors.teal}"
    textColor: "#FFFFFF"
    typography: "14 - 15px, 600 (Be Vietnam Pro)"
    rounded: "9999px"
    padding: "13px 24px - 13px 26px"
  button-primary-hover:
    effect: "brightness(1.15) + shadow 0 12px 32px rgba(18, 168, 157, 0.3), icon slides 3 - 4px"
  button-outline:
    backgroundColor: "transparent"
    border: "1px solid {colors.border-subtle}"
    textColor: "{colors.navy}"
    rounded: "9999px"
    padding: "13px 22px"
  button-outline-hover:
    effect: "teal border + teal-light bg + teal text, translateY(-2px)"
  button-ghost:
    backgroundColor: "transparent"
    border: "1.5px solid rgba(255, 255, 255, 0.25)"
    textColor: "#FFFFFF"
    rounded: "9999px"
    padding: "13px 24px"
    context: "dark hero only"
  button-ghost-hover:
    effect: "white 0.1 bg + solid white border, translateY(-2px)"
  button-outline-dark:
    backgroundColor: "transparent"
    border: "1.5px solid {colors.navy}"
    textColor: "{colors.navy}"
    rounded: "9999px"
    padding: "10px 20px"
  button-outline-dark-hover:
    effect: "fills navy, white text, translateY(-2px)"
  hero-badge:
    backgroundColor: "{colors.teal-light}"
    border: "1px solid rgba(13, 92, 82, 0.18)"
    textColor: "{colors.teal}"
    rounded: "9999px"
    padding: "6px 14px"
  hero-badge-dot: "6px teal circle (7px #34D399 in dark hero)"
  featured-report-card:
    backgroundColor: "{colors.surface-white}"
    rounded: "{rounded.lg}"
    shadow: "0 24px 48px -12px rgba(0, 0, 0, 0.35)"
  featured-report-card-hover:
    effect: "translateY(-4px) + shadow 0 32px 64px -16px rgba(0, 0, 0, 0.42); media img scales 1.035"
  ecosystem-card:
    backgroundColor: "{colors.bg-light}"
    border: "1px solid {colors.border-subtle}"
    rounded: "{rounded.md}"
    padding: "30px 24px"
  ecosystem-card-hover:
    effect: "translateY(-4px) + border-hover + white bg + shadow 0 16px 32px -8px rgba(11, 27, 43, 0.08)"
  card-icon-tile:
    size: "44px"
    rounded: "12px"
    backgroundColor: "{colors.teal-light}"
    iconColor: "{colors.teal}"
    iconSize: "22px"
  value-icon-tile:
    size: "42px"
    rounded: "10px"
  card-badge:
    backgroundColor: "{colors.surface-white}"
    border: "1px solid {colors.border-subtle}"
    rounded: "9999px"
    padding: "3px 10px"
  status-badge:
    backgroundColor: "{colors.teal-light}"
    border: "1px solid rgba(13, 92, 82, 0.18)"
    textColor: "{colors.teal}"
    typography: "11px 700 uppercase 0.06em"
    rounded: "9999px"
    padding: "4px 12px"
  media-tag-pill:
    backgroundColor: "rgba(11, 27, 43, 0.88) + blur(8px)"
    textColor: "#FFFFFF"
    rounded: "9999px"
    position: "absolute top 14px left 14px"
  catalog-card:
    backgroundColor: "{colors.surface-white}"
    border: "1px solid {colors.border-subtle}"
    rounded: "{rounded.md}"
    shadow: "0 4px 16px rgba(11, 27, 43, 0.04)"
  catalog-card-hover:
    effect: "translateY(-4px) + border-hover + shadow 0 20px 40px -10px rgba(11, 27, 43, 0.1)"
  institutional-box:
    backgroundColor: "{colors.surface-white}"
    border: "1px solid {colors.border-subtle}"
    rounded: "{rounded.lg}"
    padding: "48px"
    shadow: "0 8px 24px rgba(11, 27, 43, 0.04)"
  search-pill-input:
    backgroundColor: "{colors.bg-light}"
    border: "1px solid {colors.border-subtle}"
    rounded: "9999px"
    focusEffect: "teal border + 0 0 0 3px teal-light ring"
  category-chip:
    backgroundColor: "{colors.surface-white}"
    border: "1px solid {colors.border-subtle}"
    rounded: "9999px"
    padding: "9px 16px"
  category-chip-active:
    backgroundColor: "{colors.teal}"
    textColor: "#FFFFFF"
  data-progress:
    height: "6px"
    rounded: "9999px"
    fill: "{colors.teal}"
---

# Design System: PKPN — Pusat Kajian Pariwisata Nusantara

## Overview

**Creative North Star: "The Living Research Institute"**

PKPN's surfaces now read as one warm, modern institutional platform: a light paper ground (`#F8F9FA`) carrying deep navy ink, organized into soft-radius cards (8 / 14 / 20px), badge pills, and teal icon tiles. The former square-cornered "field journal" world — hairline rules, no pills, gold-only marking — has been retired. Pages share a single canonical token block (declared verbatim in the `:root` of every page stylesheet) and one consistent component vocabulary: pill buttons, featured media cards, ecosystem grids, metric strips, institutional boxes, and category chips.

The palette carries product truth: deep navy speaks in every headline, teal is the single interactive accent (links, buttons, badges, icon tiles, progress fills), and gold (`#B48424`) is loaded in the token block but **reserved for data accents** — if a figure carries a decorative color, it is teal; anything gold must be doing data work or it is a violation.

**Naming note (page-scoped prefixes).** This is **one visual world**, documented once. Each page stylesheet re-declares the same `:root` token block and renders the same vocabulary under a page prefix: `home-*` + `dest-*`/`pub-*` (`resources/css/LP/beranda.css`), `about-*` (`resources/css/LP/tentang.css`), `kj-*` (`resources/css/LP/kajian/kajian.css`), `dst-*` (`resources/css/LP/kajian/destinasi.css`). The prefixes are collision-safe scoping, not separate systems — `kj-card` and `dst-mini` are the same species as `dest-showcase-card` and `ecosystem-card`. The unprefixed globals (`:root`, `body`, `h1–h4`, `.btn-primary`, `.btn-outline`, `.badge-dot`, `.metric-sep`) are declared identically in each page file; keep them in sync when touching one.

**Key Characteristics:**
- Light paper ground with white surface bands; sections alternate `--light` (#F8F9FA) and `--white` (#FFFFFF) and are closed by a 1px `border-subtle` bottom rule.
- Soft geometry everywhere: radius 8/14/20, 6px badge rounds, 10–12px icon tiles, 999px pills for buttons/badges/chips/inputs.
- Two authored hero patterns: **dark gradient hero** for the home page; **light gradient hero + badge pill + media frame** for every inner page.
- Card hover is a full signature move: lift −4px (−8px for collection cards), border turns teal (`border-hover`), and a soft navy shadow blooms.
- Data speaks in teal at 0.62–0.7em suffixes with tabular numerals; count-up and progress meters animate once on intersection.
- Everything collapses under `prefers-reduced-motion` — twice: in CSS (transitions removed / reveals resolved) and in JS (counters render final values instantly).

## Colors

### Primary
- **Navy** (`#0B1B2B`): headings, body-strong, card titles, dark CTA fills (`btn-outline-dark`), navbar ink is the close cousin `#00152A`.
- **Navy Deep** (`#07131F`): dark hero gradient origin, caption overlays (`rgba(7, 19, 31, 0.88)`), selection text.
- **Navy Surface** (`#122436`): elevated navy moment (navy backing behind media/frames).
- **Teal** (`#0D5C52`): THE accent — buttons, links, icon tiles, badges, chips-active, progress fills, count suffixes. Hover deepens to **Teal Dark** (`#073D36`).
- **Teal Light** (`rgba(13, 92, 82, 0.08)`): tinted fill of icon tiles, badges, search focus ring (`0 0 0 3px`), `::selection`.

### Data accent
- **Gold** (`#B48424`): reserved strictly for data accents. Page tokens declare it; if a number wears color, prefer the teal suffix system — gold appears only when data must be singled out. Never decorative.

### Neutral
- **BG Light** (`#F8F9FA`): page ground, light section band, card tint on `ecosystem-card`/`value-item`/`dst-metric`, search input fill.
- **Surface White** (`#FFFFFF`): white section bands and card surfaces.
- **Text Muted** (`#4A5568`): descriptions, excerpts, section subtitles.
- **Text Muted Light** (`#8A99AD`): meta rows, card meta lines, chip counts, placeholders.

### Borders
- **Border Subtle** (`rgba(11, 27, 43, 0.08)`): card borders, section bottom rules, dividers, metric strips, frame captions.
- **Border Hover** (`rgba(13, 92, 82, 0.28)`): the teal-tinted hover border — a card that lifts also gets this border on hover.

### Named Rules
**The One Accent Rule.** Teal is the only interactive accent. Buttons, badges, chips, icon tiles, progress bars, focus rings, and hover titles all share it. No second action color exists on pages.

**The Data-Accent Gold Rule.** `--gold` is declared but reserved for data emphasis (numeric marks singled out from the field). Decorative gold anywhere else is a violation.

**The Comfort-Shadow Rule.** Cards may rest on a whisper shadow (`0 4px 16px rgba(11, 27, 43, 0.04)`); shadows are soft, navy-tinted, and always grow — never appear — on hover. The featured report card is the one deep-shadow exception (it floats over the dark hero).

## Typography

**Display Font:** Epilogue (500–800 + italic 400; page CSS re-imports it alongside Be Vietnam Pro)
**Body Font:** Be Vietnam Pro (400–700), loaded globally in `layout/app.blade.php`
**Chrome Font:** Poppins (300–700), loaded globally — the typeface of the shared navbar/footer chrome, not of page content.

**Character:** Epilogue is the headline voice — geometric, confident, always `letter-spacing: -0.025em` or tighter, 700–800 weight. Be Vietnam Pro is the reading voice — even, humanist, 1.6–1.75 line-height. Poppins belongs to the app chassis only.

### Hierarchy
- **Display** (800, `clamp(34px, 4.2vw, 50px)`, 1.15, −0.03em): inner-page hero titles. Dark-home hero runs `clamp(2.4rem, 4vw, 3.4rem)`, 1.12. No masks, no dual-weight lines — the badge pill above carries the ceremony.
- **Headline / section-heading** (800, `clamp(28px, 3.4vw, 38px)`, 1.2): every section heading, paired with a 15.5–16px muted subtitle inside the 680px section header.
- **Title** (700, ~19–20px, 1.3): card titles, story titles (`clamp(28px, 3.2vw, 36px)` 800 for `dst-story`), box titles (`clamp(1.8rem, 2.5vw, 2.2rem)` 800).
- **Stat** (800, 30px, 1, −0.03em, tabular numerals, Epilogue): metric blocks and `dst-metric-num`; the dark hero's metric strip runs 1.45rem. Count suffixes render at 0.62–0.7em, weight 800, in Teal.
- **Lead** (400, 17px, 1.7, max-width 580px): hero leads; section leads 15.5–16px.
- **Body** (400, 13.5–15.5px, 1.6–1.7): card descriptions (13.5–14px) and box paragraphs (15px), 2-line clamp in dense cards.
- **Label** (600–700, 11–12px): card meta lines (muted-light), uppercase status/badge text (0.04–0.12em), frame captions (13px strong / 11.5px at 0.75 white).

### Named Rules
**The Two-Voice Rule.** Epilogue speaks (headings, numerals, titles); Be Vietnam Pro reads (paragraphs, leads, buttons). Poppins never appears on page content.

**The Tabular Rule.** Every figure that can change while read sets `font-variant-numeric: tabular-nums` (scoping rule: `[data-count-value]` / `[data-count]`). Digits never wiggle during count-up.

## Layout

The page is a centered container — `max-width: 1240px`, 24px side padding — stacked into alternating **light** (`#F8F9FA`) and **white** bands. Every section closes with a 1px `border-subtle` bottom rule so bands join visibly.

- **Section padding — 88px** is the standard rhythm (`home-ecosystem`, `kj-section`, `dst-section`, about mission/values). Specials: `home-publication-cta` 80px on a `linear-gradient(135deg, #F8FAFB → #FFFFFF)` band; institutional story sections 96px; under 640px everything drops to 56–64px.
- **Section header:** a `max-width: 680px` block, `margin-bottom: 48px` — heading + one muted subtitle. Split-section variants (`dest-section-top`, CTA grids) align the header with an action on the right.
- **Grids:** hero splits `1.1–1.15fr / 0.85–0.9fr` at a 56px gap; box/institutional grids `0.9fr / 1.1fr` at 48px; story layouts `0.95fr / 1.05fr` at 56px; card grids `repeat(auto-fit, minmax(260–320px, 1fr))` at 24–32px; method/pillar/metrics grids `repeat(3, 1fr)` at 24px.
- **Stack, don't nest:** cards never nest inside cards more than one level (minis inside a box is the sanctioned exception).
- **Responsive:** 992–1024px splits stack and 3-col grids fall to 2/1 col; 640px collapses to single column, stat strips drop separators, hero frames shorten (440 → 380/360 → 280px).

## Elevation & Depth

Depth is **soft and layered**, not flat, not glassy. Section bands alternate tone; cards sit on whisper shadows and bloom on hover:

- **Rest shadows:** catalog/mini cards `0 4px 16px rgba(11, 27, 43, 0.04)`; boxes `0 8px 24px rgba(11, 27, 43, 0.04)`; media frames `0 20px 48px -12px rgba(11, 27, 43, 0.12)`; story wraps `0 16px 36px -10px rgba(11, 27, 43, 0.08)`.
- **Hover shadows:** card lift `0 20px 40px -10px rgba(11, 27, 43, 0.1)`; pillar/method lift `0 14px 32px -8px rgba(11, 27, 43, 0.08)`; eco lift `0 16px 32px -8px rgba(11, 27, 43, 0.08)`.
- **Float shadows:** the featured report card floats over the dark hero at `0 24px 48px -12px rgba(0, 0, 0, 0.35)`, deepening to `0 32px 64px -16px rgba(0, 0, 0, 0.42)` on hover.
- **Button glow:** `btn-primary` hover pushes `0 12px 32px rgba(18, 168, 157, 0.3)` — the one teal-glow moment, paired with `brightness(1.15)`.

## Shapes

Soft geometry is the system signature:

- **Radius scale:** `--radius-sm: 8px` (thumbs, progress notches), `--radius-md: 14px` (standard cards, value items, empty state), `--radius-lg: 20px` (featured cards, boxes, media frames, collection cards, toolbar). Badges round at **6px** (10px, 700 uppercase). Icon tiles round at **12px** (44px tile) and **10px** (42px tile). Media tags overlay as **999px glass pills**.
- **Pills everywhere it matters:** every button (`btn-primary`, `btn-ghost`, `btn-outline`, `btn-outline-dark`, `kj-btn`, `dst-btn`), the search input, category chips, status badges, hero badges, and progress bars (`6px` tall, `999px`).
- **Media motion within frames:** rounded frames hold their corner; on hover the image scales (1.02–1.05 subtle frames, 1.035 catalog, 1.08 collection) inside `overflow: hidden`.

### Named Rules
**The Pill-and-Rule Balance.** Rounds carry friendliness; the 1px `border-subtle` section rules carry structure. Never trade the 88px band rhythm or the section bottom border for roundness.

## Components

### Hero Pattern A — Dark Gradient (home only)
- `linear-gradient(135deg, #07131F 0%, #0B1B2B 35%, #0D3D36 100%)`, background photo at `opacity: 0.08`, plus a navy→teal overlay gradient; `min-height: 82vh`, padding 72px 0 80px.
- Glass kicker pill: white 0.08 bg, white 0.14 border, 9999px, **7px `#34D399` dot**.
- Title `clamp(2.4rem, 4vw, 3.4rem)` 800 white; lead `#CBD5E1` 16.5px/1.65 max 58ch; actions = `btn-primary` + `btn-ghost`.
- Hero metric strip under a white 0.12 top rule: 1.45rem/800 figures, 12px `#94A3B8` labels, 1px×30px separators.
- Right column: the **featured report card** (white, radius-lg, media 200px, glass tag pill, 24px body, meta row with bottom border, teal link).

### Hero Pattern B — Light Gradient + Badge + Media Frame (all inner pages: about / kajian / destinasi)
- `linear-gradient(180deg, #FFFFFF 0%, #F8F9FA 100%)`, `border-bottom: 1px solid border-subtle`, padding 80px 0 60px.
- **Badge pill:** teal-light bg, teal 0.18 border, 999px, 12px/600 teal text with a **6px teal dot**.
- Title `clamp(34px, 4.2vw, 50px)` 800; lead 17px/1.7 max 580px; actions = `btn-primary` + `btn-outline`.
- **Media frame** (`hero-image-frame` / `dst-hero-frame`): radius-lg, navy backing, 1px border, frame shadow; image 440px cover, hover scale 1.02; **frame-caption** gradient overlay (`transparent → rgba(7, 19, 31, 0.88)`) with 13px strong + 11.5px 0.75-white line.

### Buttons
- **Primary:** teal pill, 13px 24px (13px 26px on home), 15px/600 on home / 14px/600 inner pages, white text. Hover: `brightness(1.15)` + teal glow shadow (+ −2px lift on kj/dst); icon slides 3–4px right. Active text stays white.
- **Ghost (dark hero):** 9999px, 1.5px white 0.25 border, 13px 24px, transparent. Hover: white 0.1 fill, solid white border, −2px lift.
- **Outline (light pages):** 999px, 1px border-subtle, navy text. Hover: teal border + teal-light bg + teal text + −2px lift.
- **Outline Dark:** 999px navy 1.5px outline, 10px 20px, 13.5px/600 — the "view all" corner action. Hover: fills navy, white text, −2px lift.
- Page prefixes re-express these as `.kj-btn--solid/--outline` and `.dst-btn--solid/--outline` with the identical geometry.

### Icon Tile + Badge Card (ecosystem-card family)
- `bg-light` ground, border-subtle, radius-md, 30px 24px padding. Top row: **44px icon tile** (12px radius, teal-light bg, 22px teal icon) + **card-badge** (white pill, 3px 10px, 11px muted).
- Title 1.15rem/700, desc 13.5px, `card-action` teal link whose **gap animates 6 → 10px on hover**.
- Hover: −4px lift, `border-hover`, fills white, eco lift shadow. Destinasi equivalents: `dst-pillar` / `dst-metric` use the **42px/10px tile** variant on a `bg-light` card.

### Catalog Card (dest-showcase-card / kj-card)
- White, radius-md, border, rest shadow `0 4px 16px 0.04`; media 220px (180px mobile) with hover img scale 1.035 and a glass **tag pill** (navy 0.88 + blur(8px), white 10.5–11px/700, 9999px, 14/14 offset).
- Info block 24px: 11.5px muted-light meta line, 1.25rem/700 title (link hovers teal), 2-line-clamped 13.5px desc, footer row joined by a top border with stat + teal entry link (gap 6 → 9px on hover).
- Hover: −4px, `border-hover`, `0 20px 40px -10px 0.1`.

### Featured / Collection Cards
- **Featured report card** (home + kajian hero): white radius-lg float card, described above.
- **pub-cta-card / dst-collection-card:** radius-lg, image 240px with rounded top, dark bottom overlay (0 → 0.32, deepening on hover), white content block with side/top-less border and rounded bottom; **6px badge** (10px/700 teal on teal-light); hover −8px with `nth-child` transition-delay stagger (0.1s / 0.2s) and img scale 1.08.

### Institutional Box (institutional-box / kj-box / dst-box / vision-box)
- White, radius-lg, border, 48px padding (vision-box uses radius-md/40px), box shadow `0 8px 24px 0.04`.
- Grid `0.9fr / 1.1fr` at 48px: media (radius-md image, 12px 30px shadow, hover 1.02) + content (status badge → clamp title 800 → 15px text → spec/checklist rows with teal 18px icons → meta line → buttons).
- Companion **mini cards** (`dst-mini`): horizontal thumb (104×78, radius-sm) + body + inline 6px progress; hover −4px, teal title, white fill.

### Metric Strip (home-hero-metrics / about-metrics-strip / kj-statstrip)
- White full-width band, `border-bottom: 1px solid border-subtle`, 32px padding; flex spread with **1px×40px separators**.
- `metric-block` / `kj-statblock`: Epilogue 30px/800 navy figure (tabular), 13px muted label. Count-up fires on `[data-count-value]` (integers) — teal suffix spans at 0.7em (`kj-suf`) ride along.
- `dst-metric` is the carded variant: bg-light radius-md, 42px icon tile, 30px/800 figure with `dst-suf` at 0.62em teal, plus a **6px/999px progress bar** that fills to `data-fill`.

### Toolbar — Search + Category Chips (kajian)
- White radius-lg toolbar, border, 18px 20px padding, 40px below margin.
- **Search pill input:** `bg-light` fill, 999px radius, 46px left pad for a 17px teal icon; focus = teal border + `0 0 0 3px` teal-light ring; placeholder muted-light.
- **Chips:** white pills, 9px 16px, 12.5px/600, `<sup>` count in 10.5px; hover: teal border-tint + teal text + −1px; **active: solid teal fill, white text.**

### Core Values / Method Columns
- `value-item`: bg-light radius-md, 24px padding, 42px/10px teal tile, hover −3px + `border-hover`.
- `pillar-card` / `kj-method-item` / `dst-pillar`: white radius-md, 32px 28px, **14px/800 teal index numeral** (0.04em), 19px/700 title, 14px desc; hover −4px + `border-hover` + `0 14px 32px -8px`.

### Story Sections (story-layout / dst-story)
- Grid `0.95fr / 1.05fr` (or reversed) at 56px: media in a radius-lg white-bordered wrap with soft shadow; content: 800 title (`clamp(28px, 3.2vw, 36px)`), 15.5px/1.75 lead, teal-icon checklists, actions.

### Interaction System
- **Reveal-on-scroll** (the site idiom, identical numbers everywhere): elements start `opacity: 0; translateY(16px)`, transition **0.5s cubic-bezier(0.16, 1, 0.3, 1)**, observer **threshold 0.12, rootMargin `0px 0px -40px 0px`**; staggered via `d1–d5` classes at **60–300ms (60ms steps)**, delay strings cleared after settle (~900ms). Implementations: `beranda.js` injects inline opacity/transform/transition on `.ecosystem-card, .dest-showcase-card, .institutional-box, .pub-cta-card`; `kajian.js` drives `.kj-reveal`; the destinasi inline script drives `.dst-reveal` (adds `.in`, strips `d1–d5`).
- **Count-up:** 1200ms easeOutQuad via rAF, IntersectionObserver **threshold 0.5, rootMargin −40px**, fires once per element (`data-animated`), unobserved after. Integers via `[data-count-value]` (`beranda.js`, `kajian.js`); the destinasi inline script's `[data-count]` variant additionally supports **decimals, prefix/suffix, and `id-ID` digit grouping** via `toLocaleString`. Reduced motion: final value rendered instantly.
- **Progress meters:** `[data-fill]` bars animate `width` to target (1s ease-out, 200ms settle delay) once observed.
- **Hover gap animation:** teal text links and card actions animate `gap` (6 → 9/10px) instead of moving icons — the standard link affordance across catalog cards, eco cards, and collection cards.
- **Image scaling:** every media hover scales the image inside its fixed rounded frame (1.02 subtle / 1.035 catalog / 1.08 collection, 0.4–0.6s).
- **Footer entrance (authored, once per page):** `footer-modern` starts `.is-hidden` (opacity 0, +24px), resolves `.footer-visible` over 0.7s at threshold 0.05 / rootMargin −48px.
- **Reduced motion (two layers, always both):** page CSS adds a `prefers-reduced-motion: reduce` block that resolves reveals and strips transitions (`transition: none !important` on buttons/cards/links/media); every page script checks `matchMedia` at load and renders final states immediately.

### Browser-Surface Theming
- `::selection`: teal-light on navy-deep text.
- `:focus-visible`: 2px teal outline, 3px offset, 4px corner soften (declared globally in kj/dst files; match it when adding pages).
- `[data-count-value]` / `[data-count]` enforce `font-feature-settings: "tnum" 1`.

## App Chrome (documented quirks — live outside page systems)

The shared shell is intentionally a close cousin, not a clone, of the page tokens. Do not "fix" the drift; it is the existing brand surface:

- **Navbar** (`resources/css/components/navbar.css`): **cream ground** `#F4F4ED` (`rgba(244, 244, 237, 0.78)` translucent, solid `#f4f4ed` on mobile) with **teal `#116A5A`** and **navy `#00152A`** — slightly different teal/navy from the page tokens (`#0D5C52` / `#0B1B2B`). Frosted white dropdowns with navy-tinted soft shadows; mobile drawer slides over a `rgba(0, 21, 42, 0.32)` scrim.
- **Footer** (inline `<style>` in `resources/views/components/footer.blade.php`): **navy `#0B1B2B`** ground, body copy at 0.72 white, **teal-mint accent `#2DD4BF`**, Be Vietnam Pro type, 96px top padding. Carries its own authored entrance (`.is-hidden` → `.footer-visible`, 0.7s ease-out; triggered by `beranda.js` at threshold 0.05). Its lurking `--footer-accent` is allowed; introducing `#2DD4BF` on pages is not.
- **Global head** (`layout/app.blade.php`): Poppins 300–700 + Epilogue (0,500–800 + italic 400) + Be Vietnam Pro 400–700 from Google Fonts, and `iconify-icon` 2.1.0 from CDN — iconify is the only sanctioned icon system on pages.
- **CTA ribbon** (`components/call.blade.php`): ends every page before the footer.

## Page Prefix Map

| Page | Stylesheet | Prefix | Notable classes |
|---|---|---|---|
| Beranda | `resources/css/LP/beranda.css` | `home-`, `dest-`, `pub-`, `inst-` (+ unprefixed `btn-*`, `featured-report-card`, `ecosystem-card`, `metric-item`, `section-*`, `institutional-box`) | dark hero, featured card, eco grid, pub CTA, showcase cards |
| Tentang | `resources/css/LP/tentang.css` | `about-` (+ unprefixed `btn-*`, `section-heading`, `vision-box`, `pillar-card`, `value-item`, `story-layout`, `hero-image-frame`) | light hero pattern, metrics strip, values |
| Kajian | `resources/css/LP/kajian/kajian.css` | `kj-` | light hero, featured card, stat strip, toolbar + chips, catalog grid, methods, CTA |
| Destinasi | `resources/css/LP/kajian/destinasi.css` | `dst-` | light hero + frame, box + minis, metric/progress cards, story, pillars, collection |

The old `kj-`/`dst-`-era files carry a header comment pledging the site system (pills, 8/14/20 radius, 88px sections, tabular count-up) — keep new pages under the same pledge and the same verbatim `:root` token block.

## Do's and Don'ts

### Do:
- **Do** copy the canonical `:root` token block verbatim into any new page stylesheet, and use a fresh page prefix for its classes (`home-*` / `about-*` / `kj-*` / `dst-*` convention).
- **Do** build heroes from the two patterns: dark gradient for home; light gradient + teal badge pill + dot + media frame for inner pages.
- **Do** give every card the full hover signature: lift (−4px, −8px collection), `border-hover` teal tint, and the soft navy shadow bloom.
- **Do** keep sections at 88px rhythm with alternating light/white bands closed by a 1px `border-subtle` rule, headers capped at 680px.
- **Do** express data in the metric system: Epilogue 800 tabular figures, teal 0.62–0.7em suffixes, 6px/999px progress bars, single-fire count-up.
- **Do** implement reveals with the site idiom exactly: 16px/0.5s ease-out, threshold 0.12, rootMargin −40px, d1–d5 at 60ms steps.
- **Do** honor `prefers-reduced-motion` in both CSS and JS on every page.
- **Do** use iconify-icon everywhere and the outlined pill button system for actions.

### Don't:
- **Don't** reintroduce the old field-journal language: square corners, hairline-only frames, typography-only statuses, underline-tab filters, gold top rules, navy panels with inset hairline frames — all retired.
- **Don't** touch the navbar/footer color drift (`#F4F4ED` / `#116A5A` / `#00152A` / `#2DD4BF`); document-level syncing is the only sanctioned change there.
- **Don't** use gold decoratively — it is reserved for data accents; the default data suffix color is teal.
- **Don't** invent new accents (`#34D399` lives only in the dark-hero badge dot; `#18A8A9`-family tint appears only inside the sanctioned glow shadow).
- **Don't** swap font roles: Epilogue headlines/numerals, Be Vietnam Pro body/buttons, Poppins only in shared chrome.
- **Don't** re-fire count-ups or reveals on scroll-back; each element animates exactly once (observe → unobserve).
- **Don't** let section padding drift below 88px on desktop, or stack more than one level of card nesting.
