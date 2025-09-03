<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kalkulator ArrayMap</title>
<style>
  body {
  font-family: Tahoma;
  background: #ecfdf5;
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
  color: #065f46;
  margin-bottom: 15px;
}

input[type=text] {
  width: 100%;
  padding: 8px;
  margin: 5px 0;
  border-radius: 6px;
  border: 1px solid #aaa;
}

.ops {
  display: flex;
  justify-content: space-around;
  margin: 10px 0;
}

input[type=submit] {
  background: #10b981;
  color: #fff;
  border: none;
  padding: 8px 14px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}

input[type=submit]:hover {
  background: #047857;
}

.hasil {
  margin-top: 12px;
  padding: 8px;
  background: #d1fae5;
  border-radius: 6px;
  text-align: center;
  font-weight: bold;
}

</style>
</head>
<body>
<div class="box">
<h2>Array Map</h2>
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
  $ops=[
    "+"=>fn($x,$y)=>$x+$y,
    "-"=>fn($x,$y)=>$x-$y,
    "*"=>fn($x,$y)=>$x*$y,
    "/"=>fn($x,$y)=>$y!=0?$x/$y:"Error /0"
  ];
  echo $ops[$op]($a,$b);
}
?>
</div>
</div>
</body>
</html>
