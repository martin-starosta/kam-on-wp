<?php
chdir(getcwd()); 
$lastline = exec("git pull origin master");
echo "<h3 align = center> Succesfully pulled all the files.</h3>";
print_r($lastline);
?>