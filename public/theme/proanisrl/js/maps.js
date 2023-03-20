var map = L.map('map').setView([-17.851, -63.254], 15);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '<a href="https://www.proanisrl.com" target="_blank">Oficinas ProAni</a>'
}).addTo(map);

L.marker([-17.851, -63.254]).addTo(map)
    .bindPopup('Oficinas de ProAni SRL.<br> Oficina central.')
    .openPopup();