<?php
$title= " Programming PHP \n";
echo $str1= ltrim($title);
echo $str2= rtrim($title);
echo $str3= trim($title);
$zipcode= trim($_POST['zipcode']);

$zip_length= strlen($zipcode);
if($zip_length==5){
    print "Please enter a zip code that is 5 characters long.";
}
if(strlen(trim($_POST['zipcode'])) !=5){
    print "Please enter a zip code that is 5 characters long.";
}
