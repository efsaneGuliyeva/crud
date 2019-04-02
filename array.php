<? 

# indexed array
$array1 = array( "something");
$array2 = array();

$array2[0] = "bmu";

print_r($array1);
echo "<br>";
print_r($array2);




// associative array
 $array_assoc_1 = array("ad" => "afsana", "soyad" => "quliyeva" );
 $array_assoc_1['unvan'] = "Baki";
 print_r("<br>");
 print_r($array_assoc_1);
 echo "<br>";


 foreach ($array_assoc_1 as $key => $value) 
 {
 	echo "$key : $value";
 	echo "<br>";
 }

?>