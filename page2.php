<?php
    $author_name = "Nikita Kajalin";

	//echo $author_name;   //print
    //vaatan  praegust ajahetke
	$full_time_now = date('d.m.Y H:i:s') ;
    $weekday_now = date('N') ;
	//echo $weekday_now;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $author_name; ?>, Document</title>
</head>
<body>

<p>benis</p>
<h1><?php echo $author_name; ?></h1>
<p>Lehe avamise hetk: <span>>?php echo $full_time_now; ?>
<a href="https://www.tlu.ee/dt/informaatika#oppekava-ja--ained">univer</a>
<hr>
<!--ekraanivorm-->
<form>
   <input type="text" placeholder="tänase päeva ilma omadus">
</form>
<img height="450px" width="400px" src="https://www.tlu.ee/sites/default/files/styles/image_1300xn/public/2021-07/Stardipauk-2021-tlu-ba%CC%88nner.jpg?itok=vfLbF3qO" alt="">
<img src="https://www.tlu.ee/themes/tlu/logo.svg" alt="poh">
<img src="gladiatr.jfif" alt="">
</body>
</html>