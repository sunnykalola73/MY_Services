<?php

if (!isset($_POST['username']))
            include './index.php';
else
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        include 'connect.php';