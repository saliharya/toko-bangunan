<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase History</title>
  <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
    <div class="flex justify-center items-center">
      <div class="text-dark text-center">
        <h2 class="font-semibold text-4xl mb-4">Purchase</h2>
        <h4 class="font-semibold text-xl mb-6">History</h4>
        <a class="inline-block px-7 py-3 mb-6 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./index.html" role="button">Back To Home</a>
      </div>
    </div>
</div>
</body>
</html>

<?php
echo "<center>";
$fp = fopen("struk.txt", "r");
echo "<table border=1 >";

echo "<tr>
    <th>No</th>
    <th>Date</th>
    <th>Name</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Bathtub</th>
    <th>Brick</th>
    <th>Cement</th>
    <th>Ceramic</th>
    <th>Door</th>
    <th>Lamp</th>
    <th>Nail</th>
    <th>Roof</th>
    <th>Sand</th>
    <th>Toilet</th>
    <th>Wastafel</th>
    <th>Window</th>
    <th>Total</th>
    <th>Message</th>
</tr>";

$number=1;
while ($isi = fgets($fp, 2000)) {
    $pisah = explode("|", $isi);
    echo "<tr>";
    echo "<td>&nbsp;$number&nbsp;</td>";
    for ($i=0; $i < 18; $i++) { 
      echo "<td>&nbsp;&nbsp;$pisah[$i]&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
  $number=$number+1;
}
echo "</table>";
echo "</center>";
?>