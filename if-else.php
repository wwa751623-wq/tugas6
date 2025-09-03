<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 20px 25px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      width: 320px;
    }
    h2 {
      text-align: center;
      margin-bottom: 15px;
      color: #333;
    }
    form {
      display: grid;
      gap: 12px;
    }
    input[type="text"] {
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      width: 100%;
      font-size: 14px;
      outline: none;
      transition: 0.2s;
    }
    input[type="text"]:focus {
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37,99,235,0.2);
    }
    .ops {
      display: flex;
      justify-content: space-around;
      padding: 8px;
      background: #f8fafc;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
    }
    label {
      font-weight: bold;
      color: #444;
      margin-right: 4px;
    }
    input[type="radio"] {
      margin-right: 8px;
      accent-color: #2563eb; /* warna biru untuk radio */
    }
    input[type="submit"] {
      background: #2563eb;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }
    input[type="submit"]:hover {
      background: #1e40af;
    }
    .hasil {
      margin-top: 15px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      color: #111827;
      padding: 10px;
      background: #f1f5f9;
      border-radius: 8px;
      border: 1px dashed #cbd5e1;
      min-height: 32px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Kalkulator</h2>

    <!-- FORM asli kamu -->
    <form method="GET">
        <input type="text" required name="angka1" placeholder="angka1"><br>
        <input type="text" required name="angka2" placeholder="angka2"><br>
        <div class="ops">
          <label>+</label>
          <input type="radio" value="+" name="op">
          <label>-</label>
          <input type="radio" value="-" name="op">
          <label>*</label>
          <input type="radio" value="*" name="op">
          <label>/</label>
          <input type="radio" value="/" name="op">
        </div>
        <input type="submit" value="Hitung">
    </form>

    <div class="hasil">
      <?php
          if(isset($_GET['angka1'])){
              $op = $_GET['op'];
              if ($op == "+"){
                echo $_GET['angka1']+$_GET['angka2'];   
              } if ($op == "-"){
                echo $_GET['angka1']-$_GET['angka2'];   
              } if ($op == "*"){
                echo $_GET['angka1']*$_GET['angka2'];   
              } if ($op == "/"){
                echo $_GET['angka1']/$_GET['angka2'];   
              }
          }
      ?>
    </div>
  </div>
</body>
</html>
