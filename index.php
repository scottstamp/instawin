<?php
// index.php
require_once "bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InstaWin - LittleFirework (job application proof)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//bootswatch.com/lumen/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .btn {
            width: 100%;
        }
        .g-recaptcha > div > div {
            margin: 0 auto !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">InstaWin</a>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 100px">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="col-sm-5" style="margin-top: -20px">
            <h1>Winners</h1>
            <ul>
                <?php
                    $winners = $em->getRepository('Winner')->findAll();
                    foreach ($winners as $winner) {
                        echo '<li>' . $winner->getName() . ' - ' . $winner->getPrize()->getName() . '</li>';
                    }
                ?>
            </ul>
        </div>
        <div class="col-sm-5">
            <form class="form-horizontal" method="post" action="submit_entry.php">
                <fieldset>
                    <legend>InstaWin Submissions</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="jsmith@example.com" name="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="John Smith" name="name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="g-recaptcha" data-sitekey="6Lfc6QYTAAAAAGize547b1HfPhSs9bLK1bifSZaU"></div>
                        </div>
                    </div>
                    <div class="small">
                        <p>One submission per person, per round, please!</p>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
