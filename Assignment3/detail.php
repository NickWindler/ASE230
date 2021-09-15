<?php
	require ('data.php');
	require ('functions.php');
	
	$windlerAge = calculateAge($birthdays[0]['month'], $birthdays[0]['day'], $birthdays[0]['year']);
	$doeAge = calculateAge($birthdays[1]['month'], $birthdays[1]['day'], $birthdays[1]['year']);
	$oneAge = calculateAge($birthdays[2]['month'], $birthdays[2]['day'], $birthdays[2]['year']);
	$windlerDateDiff = calculateDateDifference($birthdays[0]['month'], $birthdays[0]['day'], $birthdays[0]['year']);
	$doeDateDiff = calculateDateDifference($birthdays[1]['month'], $birthdays[1]['day'], $birthdays[1]['year']);
	$oneDateDiff = calculateDateDifference($birthdays[2]['month'], $birthdays[2]['day'], $birthdays[2]['year']);
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
				<h1><?='This is ASE 230 -' . $_GET['name']?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?=$_GET['name']?></h4>
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
									<label class="media-body"><?=$students[0]['job']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?=$students[0]['company']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?=$students[0]['email']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Age: '?></span>
									<label class="media-body"><?=$windlerAge?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Length of Life: '?></span>
									<label class="media-body"><?=$windlerDateDiff[2] . " years " . $windlerDateDiff[0] . " months " . $windlerDateDiff[1] . " days"?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?=$students[0]['intro']?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?=$students[0]['quote']?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[0]['skills'][0]?></div>
									<span class="progress-bar-number"><?= $students[0]['percentages'][0]?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[0]['skills'][1]?></div>
									<span class="progress-bar-number"><?= $students[0]['percentages'][1]?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[0]['skills'][2]?></div>
									<span class="progress-bar-number"><?= $students[0]['percentages'][2]?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?= $students[0]['fact']?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
		<?php if($_GET['name'] == 'John Doe'):?>
			<div class="container text-center mb-5">
				<h1><?='This is ASE 230 -' . $_GET['name']?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?=$_GET['name']?></h4>
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
									<label class="media-body"><?=$students[1]['job']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?=$students[1]['company']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?=$students[1]['email']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Age: '?></span>
									<label class="media-body"><?=$doeAge?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Length of Life: '?></span>
									<label class="media-body"><?=$doeDateDiff[2] . " years " . $doeDateDiff[0] . " months " . $doeDateDiff[1] . " days"?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?=$students[1]['intro']?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?=$students[1]['quote']?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[1]['skills'][0]?></div>
									<span class="progress-bar-number"><?= $students[1]['percentages'][0]?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[1]['skills'][1]?></div>
									<span class="progress-bar-number"><?= $students[1]['percentages'][1]?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[1]['skills'][2]?></div>
									<span class="progress-bar-number"><?= $students[1]['percentages'][2]?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?= $students[1]['fact']?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
		<?php if($_GET['name'] == 'Person One'):?>
			<div class="container text-center mb-5">
				<h1><?='This is ASE 230 -' . $_GET['name']?></h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="mb-2">
						  <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
						</div>
						<div class="mb-2 d-flex">
							<h4 class="font-weight-normal"><?=$_GET['name']?></h4>
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
									<label class="media-body"><?=$students[2]['job']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Dream company:'?></span>
									<label class="media-body"><?=$students[2]['company']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Email: '?></span>
									<label class="media-body"><?=$students[2]['email']?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Age: '?></span>
									<label class="media-body"><?=$oneAge?></label>
								</li>
								<li class="media">
									<span class="w-25 text-black font-weight-normal"><?='Length of Life: '?></span>
									<label class="media-body"><?=$oneDateDiff[2] . " years " . $oneDateDiff[0] . " months " . $oneDateDiff[1] . " days"?></label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 pl-xl-3">
						<h5 class="font-weight-normal">Short intro</h5>
						<p><?=$students[1]['intro']?></p>
						<div class="my-2 bg-light p-2">
							<p class="font-italic mb-0"><?=$students[2]['quote']?></p>
						</div>
						<div class="mb-2 mt-2 pt-1">
							<h5 class="font-weight-normal">Top skills</h5>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar-bad" role="progressbar" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[2]['skills'][0]?></div>
									<span class="progress-bar-number"><?= $students[2]['percentages'][0]?></span>
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[2]['skills'][1]?></div>
									<span class="progress-bar-number"><?= $students[2]['percentages'][1]?></span>			  
								</div>
							</div>
						</div>
						<div class="py-1">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width:95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar-title"><?= $students[2]['skills'][2]?></div>
									<span class="progress-bar-number"><?= $students[2]['percentages'][2]?></span>
								</div>
							</div>
						</div>
						<h5 class="font-weight-normal">Fun fact</h5>
						<p><?= $students[2]['fact']?></p>
						<a href="index.php"><?='Back To Index'?></a>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<?php endif;?>
	</body>
</html>