<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
<style>
	table{
		background-color: gray;
	}

</style>
</head>
<body>

	<h2>While loop</h2>
	<?php
    $count = 10;

    while ($count <= 100) {
        echo $count . " " . ",";
        $count += 1;
    }
?>
	<?php
    $count = 100;

    while ($count <= 1000) {
        echo $count . " " . ",";
        $count += 1;
    }
?>
<h3>Infinite while loop</h3>
 <?php/*
    $count = 1;

    while ($count <= 10) {
        echo $count;
        
    }*/
?> 

<h3>Conditional statements in while loop</h3>
<?php
    $count = 1;

    while ($count <= 10) {
        
        
        if ($count ==3) {
        	echo "kolm, ";
        } elseif ($count ==7) {
        	echo "seitse, ";
        } else {
        	echo $count . " " . ",";
        }

        $count += 1;
    }
?>
<h2>For loop</h2>
<?php
    for ($count = 1; $count <= 20; $count += 1) {
    
if ($count % 2 === 1) {
echo "Number {$count} on paaritu arv" . "<br>";	
}
else {
	echo "Number {$count} on paarisarv" . "<br>";
}
}

?> 
<h2>Foreach loop</h2>
<ul>
<li>Hansainfo</li>
<li>Evert project</li>
<li>MVH Builder</li>
<li>ACCESS Works</li>
<li>NOvaclassic</li>

</ul>

<?php
	$subjects = array("Veebiarendus", "Veebikujundus", "Kolmemõõtmelise arvutigraafika alused",
	 "Sisuhaldussüsteemide kasutamine", "Serveripoolsete veebirakenduste programmeerimine");
	$nr = 1;
	foreach ($subjects as $subject) {
		echo $nr . " " . $subject . "<br>";
		$nr++;
	}
	
?>
<br>
<table>
	<tbody>
		<?php
    $contact = array(
        "first_name" => "Peeter",
        "last_name" => "Peeter",
        "e-mail" => "peeter@hot.ee",
        "age" => "24",
    );

    foreach ($contact as $attribute => $value ) {
    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
    	
        echo "<tr><td>{$attribute_formatted}</td> <td>{$value}</td></tr>";
    }
?>

	</tbody>

</table>

</body>
</html>