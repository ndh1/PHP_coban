<?php 
$a = ["Nguyen","Dinh","Huong"];

foreach ($a as $value)
{
    echo $value."<br>";
}
foreach ($a as $key => $value)
{
    echo $key."_".$value;
}
