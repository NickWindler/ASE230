<?php

class restaurantFunctions {
	
	function getRestaurantTypes() {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM types');
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function getRestaurants() {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM restaurants');
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function getRestaurantsByType($typeID) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM restaurants WHERE type_id = ' . $typeID);
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function createRestaurant($typeID, $name, $street, $city, $zip, $state, $rating, $imageURL) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('INSERT INTO restaurants (type_id, name, street, city, zip, state, rating, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
		$stmt->execute([$typeID, $name, $street, $city, $zip, $state, $rating, $imageURL]);
		$stmt->fetch();
		echo "<script>window.location.href='../admin.php';
		 alert('Restaurant has been created')</script>";
	}
	
	function modifyRestaurant($id, $typeID, $name, $street, $city, $zip, $state, $rating, $imageURL) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('UPDATE restaurants SET type_id = ?, name = ?, street = ?, city = ?, zip = ?, state = ?, rating = ?, image_url = ? WHERE ID = ?');
		$stmt->execute([$typeID, $name, $street, $city, $zip, $state, $rating, $imageURL, $id]);
		$stmt->fetch();
		echo "<script>window.location.href='../admin.php';
		 alert('Restaurant has been modified')</script>";
	}
	
	function deleteRestaurant($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->query('DELETE FROM restaurants WHERE ID = ' . $id);
		$stmt->fetch();
		echo "<script>window.location.href='../admin.php';
		 alert('Restaurant has been deleted')</script>";
	}
	
}


?>