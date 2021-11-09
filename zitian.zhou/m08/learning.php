 <?php

echo "Hello World's best dad!";

echo '<h1>Hello World"s best dad!</h1>';

$a = 5;

echo "<div>I have $a things</div>";
echo '<div>I have '. $a .' things</div>';
echo "<div>I have $a things</div>";

//Integer
$b=15;

//float
$b=0.015;

//string
$name = "Sampson";

//boolean true or false
$isOn=true;

echo (5+4)*2;

//concatenation
echo "<div>b+a = "."c</div>";
echo "<div>$b+$a = ".($b+$a). "</div>";
?>

<hr>
<div> This is my name</div>
<div>
<?

$firstName="Michael";
$lastName="Catanzaro";
$fullName="$firstName $lastName";
// $fullName=$firstName." ". $lastName;
echo $fullName;

?>




</div>

<hr>

<?

// superglobal 

// ?name = joey

echo "<div><a href='?name=joey'>Joey</a></div>";
echo "<div><a href='?name=Frank'>Frank</a></div>";

echo "<div><a href='?name={$_GET['name']}&type=h1'>h1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";

echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


?>
<hr>

<?
//standard array
$colors = array('red',"green",'blue');
$colors = ['red','Green','blue'];

echo $colors[1];
echo "<br>";
echo count($colors);
?>

<div style="color: <?= $colors[2] ?>">This text is green</div>

<?
//associative array

$colorsassociative = [
"red" => '#f00',
"green" =>"#0f0", 
"blue"=>"#00f"
];

echo $colorsassociative ['green'];


?>



<hr>

<?
//casting

$c = "$a";
$d = $c*1;

echo $d;
echo "<br>";

$colorsObject = (object)$colorsassociative;

//echo $colorsObject;

echo '<hr>';

//array index motion

echo $colors[0];
echo "<br>";
echo $colorsassociative['red'];
echo "<br>";
echo $colorsassociative[$colors[2]];
echo "<br>";


//object property notation 

echo $colorsObject -> red;
echo "<br>";
echo $colorsObject ->{$colors[0]};
echo "<br>";
?>

<hr>

<?

echo $colors;
echo "<br>";

print_r($colors);
echo "<br>";
print_r($colorsassociative);
echo "<br>";

echo "<pre>", print_r($colorsassociative),"</pre>";

function print_p($d) {
echo "<pre>", print_r($d),"</pre>";

}

print_p($colors);
































