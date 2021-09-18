<?php
require('json_util.php');
require('functions.php');

$index = $_GET['index'];
$students = jsonToArray('class.json');

$age = calculateAge($students[$index]['month'], $students[$index]['day'], $students[$index]['year']);
$lifeLength = calculateDateDifference($students[$index]['month'], $students[$index]['day'], $students[$index]['year']);
$displayLL = $lifeLength[2] . " years " . $lifeLength[0] . " months " . $lifeLength[1] . " days";

?>
<!doctype html>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
          integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/detail.css"/>
    <title>ASE 230 - Details</title>
</head>
<body>
<div class="container text-center mb-5">
    <h1><?= 'This is ASE 230 -' . $_GET['name'] ?></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar<?= $index + 1 ?>.png" alt="">
            </div>
            <div class="mb-2 d-flex">
                <h4 class="font-weight-normal"><?= $_GET['name'] ?></h4>
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
                        <span class="w-25 text-black font-weight-normal"><?= 'Dream profession:' ?></span>
                        <label class="media-body"><?= $students[$index]['job'] ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal"><?= 'Dream company:' ?></span>
                        <label class="media-body"><?= $students[$index]['company'] ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal"><?= 'Email: ' ?></span>
                        <label class="media-body"><?= $students[$index]['email'] ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal"><?= 'Age: ' ?></span>
                        <label class="media-body"><?= $age ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal"><?= 'Length of Life: ' ?></span>
                        <label class="media-body"><?= $displayLL ?></label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
            <h5 class="font-weight-normal">Short intro</h5>
            <p><?= $students[$index]['intro'] ?></p>
            <div class="my-2 bg-light p-2">
                <p class="font-italic mb-0"><?= $students[$index]['quote'] ?></p>
            </div>
            <div class="mb-2 mt-2 pt-1">
                <h5 class="font-weight-normal">Top skills</h5>
            </div>
            <div class="py-1">
                <div class="progress">
                    <div class="progress-bar-bad" role="progressbar"
                         style="width:<?= $students[$index]['percentages'][0] ?>"
                         aria-valuenow="<?= $students[$index]['percentages'][0] ?>" aria-valuemin="0"
                         aria-valuemax="100">
                        <div class="progress-bar-title"><?= $students[$index]['skills'][0] ?></div>
                        <span class="progress-bar-number"><?= $students[$index]['percentages'][0] ?></span>
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="progress">
                    <div class="progress-bar" role="progressbar"
                         style="width:<?= $students[$index]['percentages'][1] ?>"
                         aria-valuenow="<?= $students[$index]['percentages'][1] ?>" aria-valuemin="0"
                         aria-valuemax="100">
                        <div class="progress-bar-title"><?= $students[$index]['skills'][1] ?></div>
                        <span class="progress-bar-number"><?= $students[$index]['percentages'][1] ?></span>
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="progress">
                    <div class="progress-bar" role="progressbar"
                         style="width:<?= $students[$index]['percentages'][2] ?>"
                         aria-valuenow="<?= $students[$index]['percentages'][2] ?>" aria-valuemin="0"
                         aria-valuemax="100">
                        <div class="progress-bar-title"><?= $students[$index]['skills'][2] ?></div>
                        <span class="progress-bar-number"><?= $students[$index]['percentages'][2] ?></span>
                    </div>
                </div>
            </div>
            <h5 class="font-weight-normal">Fun fact</h5>
            <p><?= $students[$index]['fact'] ?></p>
            <a href="index.php"><?= 'Back To Index' ?></a>
            <div style="float: right;">
                <a style="padding-right: 10px;" href="modify.php?i=<?= $index ?>"><?= 'Modify User' ?></a>
                <a href="delete.php?i=<?= $index ?>"><?= 'Delete User' ?></a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>