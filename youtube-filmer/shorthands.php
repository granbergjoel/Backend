<?php
$loggedin=false;
$arr = [1,2,3,4,5];
/*
if($loggedin){
    echo "Inloggad";
} else {
    echo "Inte inloggad";
}
echo ($loggedin) ? "Inloggad" : "Inte inloggad";
*/

/*
$isRegistered = ($loggedin == true) ? true : false;
//echo $isRegistered;

$age = 20;
$score = 15;

echo "din poäng är: ".($score > 10 ? ($age > 10 ? "Medel" : "Grymt"):($age > 10 ? "Hemskt": "Medel"));
*/
?>

<div>
<?php if($loggedin) { ?>
    <h1>Welcome</h1>
<?php  } else { ?>
<h1>Inte välkommen</h1>
<?php } ?>
</div>

<div>
<?php if($loggedin): ?>
    <h1>Welcome</h1>
<?php else: ?>
    <h1>Inte välkommen</h1>
<?php endif; ?>
</div>

<div>
<?php foreach($arr as $val): ?>
    <?php echo $val; ?>
<?php endforeach; ?>
</div>

<div>
<?php for ($i=0; $i < 10 ; $i++): ?>
<li><?php echo $i; ?></li>
<?php endfor; ?>

</div>