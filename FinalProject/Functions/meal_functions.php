<?php

class mealFunctions {
	
	function getMealsForRestaurant($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM meals WHERE restaurant_id = ' .$id);
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function createMeal($restaurantID, $name, $price, $description, $imageURL, $rName) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('INSERT INTO meals (restaurant_id, name, price, description, image_url) VALUES (?, ?, ?, ?, ?)');
		$stmt->execute([$restaurantID, $name, $price, $description, $imageURL]);
		$stmt->fetch();
		echo "<script>window.location.href='meals.php?id=".$restaurantID."&name=".$rName."';
		 alert('Meal has been created')</script>";
	}
	
	function modifyMeal($id, $restaurantID, $name, $price, $description, $imageURL, $rName) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('UPDATE meals SET name = ?, price = ?, description = ?, image_url = ? WHERE ID = ?');
		$stmt->execute([$name, $price, $description, $imageURL, $id]);
		$stmt->fetch();
		echo "<script>window.location.href='meals.php?id=".$restaurantID."&name=".$rName."';
		 alert('Meal has been modified')</script>";
	}
	
	function deleteMeal($id, $restaurantID, $rName) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->query('DELETE FROM meals WHERE ID = ' . $id);
		$stmt->fetch();
		echo "<script>window.location.href='meals.php?id=".$restaurantID."&name=".$rName."';
		 alert('Meal has been deleted')</script>";
	}
	
}


?>