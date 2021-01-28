<?php
/*
# convert_md5.php
# iRockYou
# github.com/ihsansencan/iRockYou
# @IhsanSencan
*/
$row = 1;
if (($handle = fopen("darkweb2017-top100.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "^")) !== FALSE) {
        $num = count($data);
   
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "\n";
            //echo "<br>\n";
echo $data[$c].':';
echo (md5($data[$c]));
        }
    }
    fclose($handle);
}
/*
root@ihsan:~/Desktop# php convert_md5.php > new_md5.txt
root@ihsan:~/Desktop# cat new_md5.txt

123456:e10adc3949ba59abbe56e057f20f883e
123456789:25f9e794323b453885f5181f1b624d0b
111111:96e79218965eb72c92a549dd5a330112
password:5f4dcc3b5aa765d61d8327deb882cf99
....
....
root@ihsan:~/Desktop#
*/
?>
