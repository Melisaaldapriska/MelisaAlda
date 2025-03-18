document.addEventListener("DOMContentLoaded", function() {
    function createFlower() {
        let flower = document.createElement("div");
        flower.classList.add("bunga");
        flower.innerHTML = "🌻"; // Emoji bunga
butterfly.innerHTML = "🦋"; // Emoji kupu-kupu

        // Posisi awal bunga secara acak
        flower.style.left = Math.random() * window.innerWidth + "px";
       // Posisi awal kupu-kupu secara acak
        butterfly.style.left = Math.random() * window.innerWidth + "px";
        flower.style.animationDuration = (Math.random() * 3 + 2) + "s"; // Durasi jatuh acak
butterfly.style.animationDuration = (Math.random() * 3 + 2) + "s"; // Durasi jatuh acak

        document.body.appendChild(flower);
        document.body.appendChild(butterfly);

        // Hapus bunga setelah jatuh
        setTimeout(() => {
            flower.remove();
        }, 5000);
         // Hapus kupu-kupu setelah jatuh
        setTimeout(() => {
            butterfly.remove();
        }, 5000);
    }

    // Buat bunga setiap 300ms
    setInterval(createFlower, 300);
    // Buat kupu-kupu setiap 300ms
    setInterval(createbutterfly, 300);
});
