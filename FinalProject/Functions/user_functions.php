<?php

class userFunctions {
	
	function getUsers() {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM users');
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function modifyUser($id, $fName, $lName, $email, $password, $phone) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ?, phone = ? WHERE ID = ?');
		$stmt->execute([$fName, $lName, $email, $password, $phone, $id]);
		$stmt->fetch();
		echo "<script>window.location.href='profile.php?id=".$id."';
		 alert('Profile has been modified')</script>";
	}
	
	function deleteUser($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->query('DELETE FROM users WHERE ID = ' . $id);
		$stmt->fetch();
		echo "<script>window.location.href='../Views/Authentication/sign-out.php';
		 alert('Profile has been deleted')</script>";
	}
	
}


?>