<?php
/*
# md5_find.php
# iRockYou
# github.com/ihsansencan/iRockYou
# @IhsanSencan
*/
if (($handle = fopen("darkweb2017-top100.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "^")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
        if (md5($data[$c]) == '5eae8782697c15b7a55054c66c96b33a') {
            echo "\n===================> ".$data[$c]."\n";
            break;
        } else {
            echo ".";
        }
        }
    }
    fclose($handle);
}
/*
root@ihsan:~/Desktop# php hash_find.php
.............................................................
===================> princess1
root@ihsan:~/Desktop#
?>
