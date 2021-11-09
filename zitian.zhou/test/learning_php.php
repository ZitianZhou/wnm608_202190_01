<? 
//phpinfo();
//broken
echo "<h1>Hello world</h1>";
echo "Good bye";

$a = 5;

echo "<div>	i have a $a things</div>";

// Number
// Interger
$b = 15;
$b = 0.567;
$b = 10;

$name = "Zitian";
$name = "Joel";

// Boolean
 
 $isOn = true;

 // function, class, object
 // Math
 echo (5+2)*3;

 // Concatenation 
 echo "<div> b+a=c</div>";
 echo "<div>$b + $a=" . ($b+$a) . "</div>"
?>

<hr>
<div>this is my name</div>
<div>
	<?php  
	$firstname='Zitian';
	$lastname="Zhou";
	$fullname=$firstname.$lastname;

	echo $fullname. ".what's yours?";
	?>

</div>

<hr>
<?php 
echo "name is:".$_GET['name'];
echo "<div><a href='?name=bob'>Bob</a></div>";
echo "<div><a href='?name=joel'>joel</a></div>";
echo "<div><a href='?name=grace'>grace</a></div>";

echo "<div> <a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div> <a href='?name={$_GET['name']}&type=textarea'>Textarea</a></div>";

echo "Name is: <{$_GET['type']}>{$_GET['name']}</{$_GET['type']}>";
?>

<hr>
<?php

$colors = array("red","green","blue");
$colors = ["red","green","blue"];
echo $colors[2];
echo "
<br>$colors[0]
<br>$colors[1]
<br>$colors[2]
";
echo count($colors);
?>


<div style="color:<?= $colors[1]?>">
This text is green
</div>

<hr>
<?php
$colorsassoc = [
"red"=>"#f00","green"=>"#0f0","blue"=>"#00f"
];

echo $colorsassoc['red'];

?>


<hr>
<?php
//casting
$c="$a";
$d=$c*1;
$colorsobject=(object)$colorsassoc;
echo"<hr>";
echo $colors [0]."<br>";
echo $colorsassoc ['red']."<br>";
echo $colorsassoc [$colors[0]]."<br>";

//object propoerty notation

echo $colorsobject->red."<br>";
echo $colorsobject->{$colors[0]}."<br>";



?>

<hr>
<?php 
var_dump($colors);
echo "<hr>";
var_dump($colorsassoc);
echo "<pre>", var_dump($colorsassoc), "</pre>";
function pretty_dump($data){
	echo "<pre>", var_dump($data), "</pre>";
}
pretty_dump($colors);
 ?>

 



























