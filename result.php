<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
<?php
$array_nber =array(1,2,3,4,5,6,7,8,9,10);
$array_result=array();
$count=0;
$multiNum = $_POST["multi"];


for($i=0; $i<9; $i++){
    
    $array_result[$i] = $array_nber[$i] *$multiNum;
    
}
foreach($array_result as $value){
    
    echo "$multiNum * " .$array_nber[$count] ."= ".$value."<br>";
    $count++;

}
?>

</body>
</html>