<?php
	$students = array("Nick Windler" => 4, "John Doe" => 2, "Person One" => 3)
?>
<!doctype html>
<html lang="en">
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title>ASE 230 - Details</title>
	</head>
	<body>
		<?php if($_GET['name'] == 'Nick Windler'):?>
			<div class="container text-center mb-5">
				<h1><?="This is ASE 230 - Nick Windler"?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?='Nick Windler'?></h4>
							<div class="social d-flex ml-auto">
								<p class="pr-2 font-weight-normal">Follow on:</p>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#" class="text-muted">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
						<div class="mb-2">
							<ul class="list-unstyled">
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream profession:'?></span>
									<label class="media-body"><?='Live Streaming '?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?='Twitch'?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?='Windlern1@nku.edu'?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?='While born in Indiana, I have spent the majority of my life living in LaGrange Kentucky. I went to Oldham County Highschool and graduated in 2018. I made the decision to go to college here at NKU and now I am currently a senior CIT major getting ready to graduate this coming spring. I am currently working at the Cincinnati Insurance Company as an IT Resource Management Intern where I help develop apps on a small team. I expect I will continue doing some type of dev work in the future as well. '?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?='"I can not think of a quote to put here" -Nick Windler'?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Cooking'?></div>
									<span class="progress-bar-number"><?='1%'?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Information Technologies'?></div>
									<span class="progress-bar-number"><?='50%'?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Random Knowledge That Does Not Help Me in Life'?></div>
									<span class="progress-bar-number"><?='90%'?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?='I have two cats with three legs, I have been to the Grand Canyon, and I can eat a lot of Spaghetti in one sitting. '?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
		<?php if($_GET['name'] == 'John Doe'):?>
			<div class="container text-center mb-5">
				<h1><?="This is ASE 230 - John Doe"?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?='John Doe'?></h4>
							<div class="social d-flex ml-auto">
								<p class="pr-2 font-weight-normal">Follow on:</p>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#" class="text-muted">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
						<div class="mb-2">
							<ul class="list-unstyled">
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream profession:'?></span>
									<label class="media-body"><?='Accountant'?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?='General Electric'?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?='doejohn@gmail.com'?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?='I want to become an accountant to commit numerous amounts of white collar crime like Accounting Fraud.'?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?='"You Either Die A Hero, Or You Live Long Enough To See Yourself Become The Villain" -Harvey Dent'?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Being a Respectable Citizen'?></div>
									<span class="progress-bar-number"><?='5%'?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Accounting'?></div>
									<span class="progress-bar-number"><?='50%'?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Committing Crimes'?></div>
									<span class="progress-bar-number"><?='99%'?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?='I have never been to jail and I enjoy watching the news.'?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
		<?php if($_GET['name'] == 'Person One'):?>
			<div class="container text-center mb-5">
				<h1><?="This is ASE 230 - Person One"?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?='Person One'?></h4>
							<div class="social d-flex ml-auto">
								<p class="pr-2 font-weight-normal">Follow on:</p>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="text-muted mr-1">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#" class="text-muted">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
						<div class="mb-2">
							<ul class="list-unstyled">
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream profession:'?></span>
									<label class="media-body"><?='Chef'?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?='Create my Own'?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?='personchef@gmail.com'?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?='Hello, my name is person one. I was named Person One because the person who created me is not very creative so they could not think of anything else.'?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?='"It really be like that sometimes" -anonymous'?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Being a Fun Person'?></div>
									<span class="progress-bar-number"><?='20%'?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Manning the Grill at a Cookout'?></div>
									<span class="progress-bar-number"><?='70%'?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?='Cooking'?></div>
									<span class="progress-bar-number"><?='95%'?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?='I am not a very fun person'?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
	</body>
</html>