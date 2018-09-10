<?php
 function rekursif2($j, $kol) {
    global $i;
    if ($j > $i - $kol) {
        echo "*";
        rekursif2($j - 1, $kol);
    }
}
function rekursif($kol){
  global $i;
    rekursif2($i, $kol);
    echo "<br>";
    if (--$kol > $i){
        rekursif($kol);
    }
}
$i = 0;
rekursif(5);
echo "/*====================================================================================*/<br>";
function rekursive2($a, $b, $c) {
    global $cmn;
    if ($a>$cmn - $b - 1) {
        echo "$c ";
        rekursive2($a - 1, $b, $c + 1);
    }
}
function rekursive($b, $g) {
	global $cmn;
    rekursive2($cmn, $b, $g);
    echo "<br>";
    if (++$b<$cmn){
        rekursive($b, $g);
    }
}

$cmn = 5;

rekursive(0,1);

?>
