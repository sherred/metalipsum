<?php
if(!isset($_POST['p']) || $_POST['p'] <1) $_POST['p'] = 1;

$p = $_POST['p'];
$l = $_POST['l'];
$k = $_POST['k'];

$lipsum = file_get_contents('http://loripsum.net/api/'.$p.'/'.$l);

$keys = array_unique(split("[,\n\r]", strtolower($k)));

foreach($keys as $k) {
    $rand = $r = rand(5,strlen($lipsum)-5); 
    $lipsum=substr_replace($lipsum, $k, $rand, strlen($k));
    $i = 1;
    while($lipsum[$rand-$i] != ' ') {
        $lipsum=substr_replace($lipsum, '', $rand-$i, 1);
        $i++;
    }
    $start = $r-($i) + strlen($k);
    $i = 1;
    while($lipsum[$start+$i] != ' ') {
       $lipsum=substr_replace($lipsum, '', $start+$i, 1);
    }
}
echo $lipsum;
?>
