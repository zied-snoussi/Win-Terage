<?php

$conn = mysqli_connect('localhost','root','root','win');

if(!$conn)
{
    echo 'ERROR: '.mysqli_connect_error();
}