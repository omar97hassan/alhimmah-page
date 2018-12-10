<?php
/**
 * Created by PhpStorm.
 * User: BAYRAKTAR
 * Date: 5.03.2016
 * Time: 20:23
 */

$c=mysqli_connect("localhost","hasakba_alhimmah","himahal1","hasakba_alhimmah");
if(mysqli_connect_errno()){
    die("Can't connect to database\nError: ".mysqli_connect_error());
}
