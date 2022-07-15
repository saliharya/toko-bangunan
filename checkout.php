<?php
$date = date("Y-m-d");
$name= $_POST['name'];
$adress= $_POST['adress'];
$message= $_POST['message'];
if ($message == NULL) $message="-";
$email= $_POST['email'];
$bathtub= (int)$_POST['bathtub']*2400000;
if ($bathtub == NULL) $bathtub=0;
$brick= (int)$_POST['brick']*1000;
if ($brick == NULL) $brick=0;
$cement= (int)$_POST['cement']*35000;
if ($cement == NULL) $cement=0;
$ceramic= (int)$_POST['ceramic']*40000;
if ($ceramic == NULL) $ceramic=0;
$door= (int)$_POST['door']*2000000;
if ($door == NULL) $door=0;
$lamp= (int)$_POST['lamp']*2000000;
if ($lamp == NULL) $lamp=0;
$nail= (int)$_POST['nail']*300;
if ($nail == NULL) $nail=0;
$roof= (int)$_POST['roof']*1500;
if ($roof == NULL) $roof=0;
$sand= (int)$_POST['sand']*500000;
if ($sand == NULL) $sand=0;
$toilet= (int)$_POST['toilet']*1200000;
if ($toilet == NULL) $toilet=0;
$wastafel= (int)$_POST['wastafel']*500000;
if ($wastafel == NULL) $wastafel=0;
$window= (int)$_POST['window']*100000;
if ($window == NULL) $window=0;
$total = $bathtub+$brick+$cement+$ceramic+$door+$lamp+$nail+$roof+$sand+$toilet+$wastafel+$window;
$fp = fopen("struk.txt", "a+");
fputs($fp, "$date|$name|$email|$adress|$bathtub|$brick|$cement|$ceramic|$door|$lamp|$nail|$roof|$sand|$toilet|$wastafel|$window|$total|$message\n");
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sucess Page</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
    <div class="flex justify-center items-center h-full">
      <div class="text-dark">
        <h2 class="font-semibold text-4xl mb-4">Successfully</h2>
        <h4 class="font-semibold text-xl mb-6">Purchased</h4>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./index.html" role="button">Back To Home</a>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="./lihat.php" role="button">Purchase History</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>