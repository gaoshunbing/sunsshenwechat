<?php
$txt_db = 'jsb.txt';
$nums = file_get_contents($txt_db);
$nums++;
file_put_contents($txt_db,$nums);
?>