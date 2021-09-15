<?php
$students = [
	[
		'name' => "Nick Windler",
		'grade' => 4,
		'job' => "Live Streaming",
		'company' => "Twitch",
		'email' => "windlern1@nku.edu",
		'intro' => "While born in Indiana, I have spent the majority of my life living in LaGrange Kentucky.
					I went to Oldham County Highschool and graduated in 2018. I made the decision to go to 
					college here at NKU and now I am currently a senior CIT major getting ready to graduate 
					this coming spring. I am currently working at the Cincinnati Insurance Company as an IT 
					Resource Management Intern where I help develop apps on a small team. I expect I will 
					continue doing some type of dev work in the future as well.",
		'quote' => '"I can not think of a quote to put here" -Nick Windler',
		'skills' => [
			"Cooking" => "1%",
			"Information Technologies" => "50%",
			"Random Knowledge That Does Not Help Me in Life" => "90%"
		],
		'fact' => "I have two cats with three legs, I have been to the Grand Canyon, and I can eat a lot of 
					Spaghetti in one sitting."
	],
	[
		'name' => "John Doe",
		'grade' => 2,
		'job' => "Accountant",
		'company' => "General Electric",
		'email' => "doejohn@gmail.com",
		'intro' => "I want to become an accountant to commit numerous amounts of white collar crime like Accounting Fraud.",
		'quote' => '"You Either Die A Hero, Or You Live Long Enough To See Yourself Become The Villain" -Harvey Dent',
		'skills' => [
			"Being a Respectable Citizen" => "5%",
			"Accounting" => "50%",
			"Committing Crimes" => "99%"
		],
		'fact' => "I have never been to jail and I enjoy watching the news."
	],
	[
		'name' => "Person One",
		'grade' => 3,
		'job' => "Chef",
		'company' => "Create My Own",
		'email' => "Personchef@gmail.com",
		'intro' => "Hello, my name is person one. I was named Person One because the person who 
					created me is not very creative so they could not think of anything else.",
		'quote' => '"It really be like that sometimes" -anonymous',
		'skills' => [
			"Being a Fun Person" => "20%",
			"Manning the Grill at a Cookout" => "70%",
			"Cooking" => "95%"
		],
		'fact' => "I am not a very fun person"
	]
];
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
				<?php for($i = 0; $i < count($students); $i++):?>
					<!-- Single Advisor-->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
							<!-- Team Thumb-->
							<?php if($students[$i]['name'] == "Nick Windler"):?>
								<div class="advisor_thumb"><a href="detail.php?name=<?=$students[$i]['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""></a>
									<div class="social-info"><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-linkedin"></i></a></div>
								</div>
							<?php endif;?>
							<?php if($students[$i]['name'] == "John Doe"):?>
								<div class="advisor_thumb"><a href="detail.php?name=<?=$students[$i]['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
									<div class="social-info"><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-linkedin"></i></a></div>
								</div>
							<?php endif;?>
							<?php if($students[$i]['name'] == "Person One"):?>
								<div class="advisor_thumb"><a href="detail.php?name=<?=$students[$i]['name']?>"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
									<div class="social-info"><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-facebook"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-twitter"></i></a><a href="detail.php?name=<?=$students[$i]['name']?>"><i class="fa fa-linkedin"></i></a></div>
								</div>
							<?php endif;?>
							<!-- Team Details-->
							<div class="single_advisor_details_info">
								<h6><?=$students[$i]['name']?></h6>
								<?php if($students[$i]['grade'] == 4):?>
									<p class="designation"><?="Senior NKU Student"?></p>
								<?php endif;?>
								<?php if($students[$i]['grade'] == 3):?>
									<p class="designation"><?="Junior NKU Student"?></p>
								<?php endif;?>
								<?php if($students[$i]['grade'] == 2):?>
									<p class="designation"><?="Sophmore NKU Student"?></p>
								<?php endif;?>
								<?php if($students[$i]['grade'] == 1):?>
									<p class="designation"><?="Freshman NKU Student"?></p>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endfor;?>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>