<?php
require('../../DB/db_connect.php');
require('../../Views/order.php');

if(isset($_POST['search'])) {
	if (isset($_POST['filterRestaurants'])) {
	   $name = $_POST['filterRestaurants'];
	   $stmt = $db->query('SELECT name FROM restaurants WHERE name LIKE ' .$name. ' AND type_id = ' .$restaurants[0]['type_id']);

	   echo '<ul>';
	   while ($result = $stmt->fetch()) {
		   ?>
	   <!-- Creating unordered list items.
			Calling javascript function named as "fill" found in "script.js" file.
			By passing fetched result as parameter. -->
	   <li onclick='fill("<?php echo $result['name']; ?>")'>
	   <a>
	   <!-- Assigning searched result in "Search box" in "search.php" file. -->
		   <?php echo $result['name']; ?>
	   </li></a>
	   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
	   <?php
}}}
	?>
	</ul>