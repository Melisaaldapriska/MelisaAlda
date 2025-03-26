<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan 3D</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        body { margin: 0; }
        canvas { display: block; }
    </style>
</head>
<body>
    <script>
        // Setup Scene
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // Tambahkan lantai perpustakaan
        const floorGeometry = new THREE.PlaneGeometry(20, 20);
        const floorMaterial = new THREE.MeshBasicMaterial({ color: 0xa0522d, side: THREE.DoubleSide });
        const floor = new THREE.Mesh(floorGeometry, floorMaterial);
        floor.rotation.x = Math.PI / 2;
        scene.add(floor);

        // Tambahkan rak buku
        function createShelf(x, z) {
            const shelfGeometry = new THREE.BoxGeometry(2, 5, 1);
            const shelfMaterial = new THREE.MeshBasicMaterial({ color: 0x8b4513 });
            const shelf = new THREE.Mesh(shelfGeometry, shelfMaterial);
            shelf.position.set(x, 2.5, z);
            scene.add(shelf);
        }
        createShelf(-3, -3);
        createShelf(3, -3);
        createShelf(-3, 3);
        createShelf(3, 3);

        // Tambahkan pencahayaan
        const light = new THREE.PointLight(0xffffff, 1, 100);
        light.position.set(0, 5, 0);
        scene.add(light);

        camera.position.set(0, 3, 10);

        function animate() {
            requestAnimationFrame(animate);
            camera.position.z -= 0.01; // Gerakan kamera maju
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>

