<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Formulir Data Perpustakaan Melisa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f0f0f0;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-top: 15px;
    }
    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #0077cc;
      color: white;
      border: none;
      border-radius: 4px;
    }
    button:hover {
      background-color: #005fa3;
    }
  </style>
</head>
<body>

  <h2 align="center">Formulir Data Pengunjung Perpustakaan</h2>

  <form action="https://formspree.io/f/yourFormID" method="POST">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="judul_buku">Judul Buku:</label>
    <input type="text" id="judul_buku" name="judul_buku" required>

    <label for="tanggal_pinjam">Tanggal Pinjam:</label>
    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>

    <label for="tanggal_kembali">Tanggal Kembali:</label>
    <input type="date" id="tanggal_kembali" name="tanggal_kembali">

    <label for="catatan">Catatan Tambahan:</label>
    <textarea id="catatan" name="catatan" rows="4"></textarea>

    <button type="submit">Kirim</button>
  </form>

</body>
</html>
