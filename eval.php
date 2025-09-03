<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kalkulator Eval</title>
<style>
  body {
  font-family: Verdana;
  background: #fef3c7;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.box {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  width: 300px;
}

h2 {
  text-align: center;
  color: #92400e;
  margin-bottom: 15px;
}

input[type=text] {
  width: 100%;
  padding: 8px;
  margin: 5px 0;
  border-radius: 6px;
  border: 1px solid #bbb;
}

.ops {
  display: flex;
}
</style>
</head>
<body>
<div class="box">
<h2>Eval</h2>
<form method="get">
  <input type="text" name="a" placeholder="Angka 1" required>
  <input type="text" name="b" placeholder="Angka 2" required>
  <div class="ops">
    <label><input type="radio" name="op" value="+" required> +</label>
    <label><input type="radio" name="op" value="-"> -</label>
    <label><input type="radio" name="op" value="*"> *</label>
    <label><input type="radio" name="op" value="/"> /</label>
  </div>
  <input type="submit" value="Hitung">
</form>
<div class="hasil">
<?php
if(isset($_GET['a'])){
  $a=$_GET['a']; $b=$_GET['b']; $op=$_GET['op'];
  $rumus="$a $op $b";
  echo eval("return $rumus;");
}
?>
</div>
</div>
</body>
</html>
