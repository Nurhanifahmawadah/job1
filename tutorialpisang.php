<html>
<head>
<title>Tutorial PHP</title>
</head>
<body bgcolor="#FFFF00">
<?php
class Cara_makan
{ function Pisang()
{
return "dibuka kulitnya terlebih dahulu";
}
}
$obj= new cara_makan;
echo"cara makan pisang adalah dengan ".$obj->pisang();
?>
</body>
</html>