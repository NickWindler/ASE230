<?php

class addressFunctions {
	
	function getAddressesForUser($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM addresses WHERE user_id = ' . $id);
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function createAddress($userID, $isPrimary, $street, $city, $zip, $state, $deliveryInstructions) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('INSERT INTO addresses (user_id, is_primary, street, city, zip, state, delivery_instructions) VALUES (?, ?, ?, ?, ?, ?, ?)');
		$stmt->execute([$userID, $isPrimary, $street, $city, $zip, $state, $deliveryInstructions]);
		$stmt->fetch();
		if($isPrimary == 1) {
			$maxID = $db->query('SELECT MAX(ID) FROM addresses WHERE user_id = ' . $userID);
			$maxID = $maxID->fetch();
			$changePrimary = $db->query('UPDATE addresses SET is_primary = 0 WHERE ID != ' . $maxID['MAX(ID)']);
			$changePrimary->fetch();
		}
		echo "<script>window.location.href='../profile.php?id=".$userID."';
		 alert('Address has been created')</script>";
	}
	
	function modifyAddress($id, $userID, $isPrimary, $street, $city, $zip, $state, $deliveryInstructions) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('UPDATE addresses SET is_primary = ?, street = ?, city = ?, zip = ?, state = ?, delivery_instructions = ? WHERE ID = ?');
		$stmt->execute([$isPrimary, $street, $city, $zip, $state, $deliveryInstructions, $id]);
		$stmt->fetch();
		if($isPrimary == 1) {
			$changePrimary = $db->prepare('UPDATE addresses SET is_primary = 0 WHERE ID != ? AND user_id = ?');
			$changePrimary->execute([$id, $userID]);
			$changePrimary->fetch();
		}
		echo "<script>window.location.href='../profile.php?id=".$userID."';
		 alert('Address has been modified')</script>";
	}
	
	function deleteAddress($id, $userID) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->query('DELETE FROM addresses WHERE ID = ' . $id);
		$stmt->fetch();
		echo "<script>window.location.href='../profile.php?id=".$userID."';
		 alert('Address has been deleted')</script>";
	}
	
}


?>