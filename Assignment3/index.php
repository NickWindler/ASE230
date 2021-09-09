<?php
	require ('data.php');
	require ('functions.php');
	
	function displayCard($students, $birthdays) {
		$birthMonth = $birthdays['month'];
		$birthDay = $birthdays['day'];
		$birthYear = $birthdays['year'];
		$age = calculateAge($birthMonth, $birthDay, $birthYear);
		$dateDiff = calculateDateDifference($birthMonth, $birthDay, $birthYear);
?>			
		<!--Single Advisor-->
		<div class="col-12 col-sm-6 col-lg-3">
			<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
				<!--Team Thumb-->
				<?php if($students['name'] == "Nick Windler"):?>
					<div class="advisor_thumb"><a href="detail.php?name=<?=$students['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""></a>
						<div class="social-info"><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-linkedin"></i></a></div>
					</div>
				<?php endif;?>
				<?php if($students['name'] == "John Doe"):?>
					<div class="advisor_thumb"><a href="detail.php?name=<?=$students['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
						<div class="social-info"><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-linkedin"></i></a></div>
					</div>
				<?php endif;?>
				<?php if($students['name'] == "Person One"):?>
					<div class="advisor_thumb"><a href="detail.php?name=<?=$students['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
						<div class="social-info"><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students['name']?>"><i class="fa fa-linkedin"></i></a></div>
					</div>
				<?php endif;?>
				<!-- Team Details-->
				<div class="single_advisor_details_info">
					<h6><?=$students['name']?></h6>
					<?php if($students['grade'] == 4):?>
						<p class="designation"><?="Senior NKU Student"?></p>
					<?php endif;?>
					<?php if($students['grade'] == 3):?>
						<p class="designation"><?="Junior NKU Student"?></p>
					<?php endif;?>
					<?php if($students['grade'] == 2):?>
						<p class="designation"><?="Sophmore NKU Student"?></p>
					<?php endif;?>
					<?php if($students['grade'] == 1):?>
						<p class="designation"><?="Freshman NKU Student"?></p>
					<?php endif;?>
				</div>
			</div>
		</div>
<?php		
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/index.css" />
		<title>ASE 230 - class of Fall 2021</title>
	</head>
	<body>
		<div class="container text-center">
			<h1>This is ASE 230 - class of Fall 2021</h1>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8 col-lg-6">
					<!-- Section Heading-->
					<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h3>Our Creative <span> Team</span></h3>
						<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row">	
				<?php
					for($i = 0; $i < count($students); $i++) {
						displayCard($students[$i], $birthdays[$i]);
					}
				?>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>