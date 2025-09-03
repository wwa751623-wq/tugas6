<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kalkulator Sederhana</title>

  <style>
    /* Reset kecil */
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(135deg,#f0f7ff 0%, #ffffff 50%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
      color: #1f2937;
    }

    .card {
      width: 100%;
      max-width: 420px;
      background: white;
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(14,30,37,0.08);
      padding: 22px;
      border: 1px solid rgba(15,23,42,0.04);
    }

    h1 {
      font-size: 18px;
      margin-bottom: 12px;
      text-align: center;
      color: #0f172a;
    }

    form {
      display: grid;
      gap: 12px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid #d1d5db;
      outline: none;
      font-size: 15px;
      transition: box-shadow .12s, border-color .12s;
    }
    input[type="text"]:focus {
      border-color: #60a5fa;
      box-shadow: 0 0 0 4px rgba(96,165,250,0.12);
    }

    .ops {
      display: flex;
      gap: 12px;
      align-items: center;
      padding: 8px;
      border-radius: 8px;
      background: #f8fafc;
      border: 1px solid #eef2f7;
    }

    .ops label {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 600;
      color: #0f172a;
    }

    /* radio custom look */
    input[type="radio"] {
      appearance: none;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 2px solid #9ca3af;
      display: inline-block;
      position: relative;
      margin-right: 6px;
    }
    input[type="radio"]:checked {
      border-color: #2563eb;
      background: radial-gradient(circle at center, #2563eb 0 60%, transparent 61%);
    }

    .submit-row {
      display: flex;
      justify-content: center;
      margin-top: 4px;
    }

    input[type="submit"] {
      cursor: pointer;
      padding: 10px 18px;
      font-weight: 700;
      border-radius: 10px;
      border: none;
      background: linear-gradient(90deg,#2563eb,#60a5fa);
      color: white;
      font-size: 15px;
      box-shadow: 0 6px 20px rgba(37,99,235,0.18);
      transition: transform .08s ease, box-shadow .12s;
    }
    input[type="submit"]:active { transform: translateY(1px); }
    input[type="submit"]:hover { box-shadow: 0 10px 30px rgba(37,99,235,0.18); }

    /* area hasil (PHP echo akan tampil di sini sebagai teks langsung) */
    .hasil {
      margin-top: 16px;
      padding: 12px;
      border-radius: 10px;
      background: #f1f5f9;
      border: 1px dashed #e2e8f0;
      text-align: center;
      font-weight: 700;
      font-size: 18px;
      color: #0f172a;
      min-height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* responsive */
    @media (max-width:420px){
      .card { padding: 16px; border-radius: 12px; }
      input[type="text"]{ font-size:14px; }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Kalkulator Sederhana</h1>

    <!-- FORM (tetap sama) -->
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

        <div class="submit-row">
          <input type="submit" value="Hitung">
        </div>
    </form>

    <!-- Hasil akan muncul di bawah (PHP tidak diubah sama sekali) -->
    <div class="hasil">
    <?php
        if(isset($_GET['angka1'])){
            $op = $_GET['op'];
            switch ($op) {
            case "+":
                echo $_GET['angka1']+$_GET['angka2'];
                break;
            case "-":
               echo $_GET['angka1']-$_GET['angka2'];
                break;
            case "*":
                echo $_GET['angka1']*$_GET['angka2'];
                break;
            default:
                echo $_GET['angka1']/$_GET['angka2'];
            }
                }
    ?>
    </div>
  </div>
</body>
</html>

