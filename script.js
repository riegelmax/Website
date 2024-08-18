// script.js
document.addEventListener("DOMContentLoaded", function() {
    const charaktereListe = document.querySelector(".charaktere-liste");

    // Beispiel-Daten
    const charaktere = [
        {
            name: "Thalion von Andergast",
            rasse: "Mensch",
            profession: "Magier",
            leiteigenschaft: "Klugheit",
            at: 12,
            pa: 8,
            lebenspunkte: 30,
            ausdauer: 20
        },
        {
            name: "Lorana Silberhaar",
            rasse: "Elf",
            profession: "Waldläufer",
            leiteigenschaft: "Intuition",
            at: 13,
            pa: 11,
            lebenspunkte: 28,
            ausdauer: 22
        }
    ];

    // Charaktere zur Liste hinzufügen
    charaktere.forEach(charakter => {
        const charakterDiv = document.createElement("div");
        charakterDiv.classList.add("charakter");

        charakterDiv.innerHTML = `
            <h2>${charakter.name}</h2>
            <p><strong>Rasse:</strong> ${charakter.rasse}</p>
            <p><strong>Profession:</strong> ${charakter.profession}</p>
            <p><strong>Leiteigenschaft:</strong> ${charakter.leiteigenschaft}</p>
            <p><strong>AT:</strong> ${charakter.at}</p>
            <p><strong>PA:</strong> ${charakter.pa}</p>
            <p><strong>Lebenspunkte:</strong> ${charakter.lebenspunkte}</p>
            <p><strong>Ausdauer:</strong> ${charakter.ausdauer}</p>
        `;

        charaktereListe.appendChild(charakterDiv);
    });
});
