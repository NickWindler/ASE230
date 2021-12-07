<?php

class orderFunctions {
	
	function getOrdersForUser($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT * FROM orders WHERE user_id = ' . $id);
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function getOrderDetails($id) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$array = [];
		$stmt = $db->query('SELECT meals.name, meals.price, restaurants.name AS restaurant_name, 
		orders.date, orders.status from meals_orders, meals, orders, restaurants  WHERE meals.restaurant_id
		= restaurants.ID AND meals_orders.meal_id = meals.ID AND meals_orders.order_id = orders.ID AND orders.ID = ' . $id);
		while ($row = $stmt->fetch())
			array_push($array, $row);
		return $array;
	}
	
	function createPayment($userID, $cardNumber, $securityCode, $expDate) {
		require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
		$stmt = $db->prepare('INSERT INTO payments (user_id, card_number, security_code, expiration_date) VALUES (?, ?, ?, ?)');
		$stmt->execute([$userID, $cardNumber, $securityCode, $expDate]);
		$stmt->fetch();
		echo "<script>alert('Payment option has been created');
		 window.location.href='../profile.php'</script>";
	}
	
}

?>