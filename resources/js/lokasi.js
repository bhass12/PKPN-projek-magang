document.addEventListener("DOMContentLoaded", () => {

    const searchInput =
        document.getElementById("searchDestination");

    const categoryFilter =
        document.getElementById("categoryFilter");

    const locationFilter =
        document.getElementById("locationFilter");

    const cards =
        document.querySelectorAll(".destination-card");


    function filterDestinations() {

        const search =
            searchInput.value
                .toLowerCase()
                .trim();

        const category =
            categoryFilter.value
                .toLowerCase();

        const location =
            locationFilter.value
                .toLowerCase();


        cards.forEach(card => {

            const name =
                card.dataset.name;

            const cardCategory =
                card.dataset.category;

            const cardLocation =
                card.dataset.location;


            const matchSearch =
                name.includes(search);

            const matchCategory =
                category === "" ||
                cardCategory.includes(category);

            const matchLocation =
                location === "" ||
                cardLocation === location;


            if (
                matchSearch &&
                matchCategory &&
                matchLocation
            ) {

                card.style.display = "";

            } else {

                card.style.display = "none";

            }

        });

    }


    searchInput.addEventListener(
        "input",
        filterDestinations
    );


    categoryFilter.addEventListener(
        "change",
        filterDestinations
    );


    locationFilter.addEventListener(
        "change",
        filterDestinations
    );

});







document.addEventListener("DOMContentLoaded", function () {

    /*
    |--------------------------------------------------------------------------
    | CEK DATA
    |--------------------------------------------------------------------------
    */

    if (
        typeof destinationData === "undefined" ||
        !destinationData.length
    ) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | BUAT MAP
    |--------------------------------------------------------------------------
    */

    const map = L.map("baliMap");


    /*
    |--------------------------------------------------------------------------
    | OPENSTREETMAP
    |--------------------------------------------------------------------------
    */

    L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 19,

            attribution:
                '&copy; OpenStreetMap contributors'
        }
    ).addTo(map);


    /*
    |--------------------------------------------------------------------------
    | GROUP MARKER
    |--------------------------------------------------------------------------
    */

    const markers = [];


    /*
    |--------------------------------------------------------------------------
    | BUAT MARKER
    |--------------------------------------------------------------------------
    */

    destinationData.forEach(function (destination) {

        const latitude =
            parseFloat(destination.latitude);

        const longitude =
            parseFloat(destination.longitude);


        /*
        | Marker
        */

        const marker = L.marker([
            latitude,
            longitude
        ]).addTo(map);


        /*
        | Popup
        */

        marker.bindPopup(`

            <div class="map-popup">

                <h3>
                    ${destination.nama}
                </h3>

                <span>
                    ${destination.kategori}
                </span>

                <p>
                    ${destination.kabupaten}
                </p>

                <p>
                    ${destination.deskripsi}
                </p>

            </div>

        `);


        markers.push(marker);

    });


    /*
    |--------------------------------------------------------------------------
    | AUTO ZOOM
    |--------------------------------------------------------------------------
    */

    const group =
        L.featureGroup(markers);

    map.fitBounds(
        group.getBounds(),
        {
            padding: [30, 30]
        }
    );

});