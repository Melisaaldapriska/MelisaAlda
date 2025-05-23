<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kalkulator Perkalian</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(135deg, #a8edea, #fed6e3);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #34495e;
    }

    .container {
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      padding: 30px;
      width: 90%;
      max-width: 420px;
      text-align: center;
      animation: slideIn 0.5s ease;
    }

    @keyframes slideIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-size: 26px;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    label {
      display: block;
      text-align: left;
      margin: 10px 0 5px;
      font-weight: 600;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 16px;
      background-color: #f9f9f9;
      transition: border 0.3s ease;
    }

    input[type="number"]:focus {
      border-color: #7ed6df;
      outline: none;
    }

    .button-group {
      margin-top: 20px;
      display: flex;
      gap: 15px;
    }

    button {
      flex: 1;
      padding: 12px;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .btn-hitung {
      background-color: #74b9ff;
      color: white;
    }

    .btn-hitung:hover {
      background-color: #0984e3;
    }

    .btn-reset {
      background-color: #fab1a0;
      color: white;
    }

    .btn-reset:hover {
      background-color: #e17055;
    }

    #hasil {
      margin-top: 25px;
      font-size: 20px;
      font-weight: bold;
      color: #2d3436;
    }
  </style>
  <script>
    function perkalian() {
      const num1 = parseFloat(document.getElementById("num1").value);
      const num2 = parseFloat(document.getElementById("num2").value);
      const hasil = document.getElementById("hasil");

      if (!isNaN(num1) && !isNaN(num2)) {
        hasil.textContent = "Hasil: " + (num1 * num2);
      } else {
        hasil.textContent = "Mohon masukkan kedua angka dengan benar.";
      }
    }

    function resetForm() {
      document.getElementById("num1").value = "";
      document.getElementById("num2").value = "";
      document.getElementById("hasil").textContent = "";
    }
  </script>
</head>
<body>
  <div class="container">
    <i class="fas fa-calculator" style="font-size: 48px; color: #74b9ff; margin-bottom: 10px;"></i>
    <h1>Kalkulator Perkalian</h1>

    <label for="num1">Angka Pertama</label>
    <input type="number" id="num1" placeholder="Masukkan Angka Pertama">

    <label for="num2">Angka Kedua</label>
    <input type="number" id="num2" placeholder="Masukkan Angka Kedua">

    <div class="button-group">
      <button class="btn-hitung" onclick="perkalian()">
        <i class="fas fa-equals"></i> Hitung
      </button>
      <button class="btn-reset" onclick="resetForm()">
        <i class="fas fa-eraser"></i> Hapus
      </button>
    </div>

    <p id="hasil"></p>
  </div>
</body>
</html>


