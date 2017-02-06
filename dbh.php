<?php

$conn = mysqli_connect("localhost", "root", "chiranjeeb2410", "logintest");

if (!conn) {
	# code...
	die('Connection failed: '.mysqli_connect_error());
}