<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efek Bunga Jatuh 3D</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background: linear-gradient(to bottom, #87CEFA, #f0f8ff);
        }
        .bunga {
            position: absolute;
            top: 0;
            font-size: 2rem;
            transform: rotateY(0deg);
            animation: jatuh linear infinite;
        }
        @keyframes jatuh {
            0% {
                transform: translateY(0) rotateY(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotateY(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function createFlower() {
                let flower = document.createElement("div");
                flower.classList.add("bunga");
                flower.innerHTML = "🌸"; // Emoji bunga
                
                // Posisi awal bunga secara acak
                flower.style.left = Math.random() * window.innerWidth + "px";
                flower.style.animationDuration = (Math.random() * 3 + 2) + "s"; // Durasi jatuh acak
                
                document.body.appendChild(flower);

                // Hapus bunga setelah jatuh
                setTimeout(() => {
                    flower.remove();
                }, 5000);
            }

            // Buat bunga setiap 300ms
            setInterval(createFlower, 300);
        });
    </script>
</body>
</html>
