<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `calen_tuesday` WHERE `cal_id` = '$_REQUEST[cal_id]'") or die(mysqli_error());
	header('location:cal_tuesday.php');