<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kalkulator Function</title>
<style>
  body {
  font-family: Arial;
  background: #f0f4f9;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.box {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  width: 300px;
}

h2 {
  text-align: center;
  color: #1e3a8a;
  margin-bottom: 15px;
}

input[type=text] {
  width: 100%;
  padding: 8px;
  margin: 5px 0;
  border-radius: 6px;
  border: 1px solid #ccc;
}

.ops {
  display: flex;
  justify-content: space-around;
  margin: 10px 0;
}

input[type=submit] {
  background: #2563eb;
  color: #fff;
  border: none;
  padding: 8px 14px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}

input[type=submit]:hover {
  background: #1e40af;
}

.hasil {
  margin-top: 12px;
  padding: 8px;
  background: #f1f5f9;
  border-radius: 6px;
  text-align: center;
  font-weight: bold;
}

</style>
</head>
<body>
<div class="box">
<h2>Function</h2>
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
  function hitung($x,$y,$op){
    if($op=="+") return $x+$y;
    if($op=="-") return $x-$y;
    if($op=="*") return $x*$y;
    if($op=="/") return $y!=0?$x/$y:"Error /0";
  }
  echo hitung($a,$b,$op);
}
?>
</div>
</div>
</body>
</html>
