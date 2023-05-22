<?php
include("Singleton.php");

echo Singleton::getCounter();
echo Singleton::getCounter();
echo Singleton::setCounter();
echo Singleton::getCounter();
?>