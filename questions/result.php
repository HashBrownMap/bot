<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>How Much to Make a bot</title>
        <meta name="description" content="How Much to Make a Bot">
        <meta name="author" content="Rhodium">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <link rel="stylesheet" type="text/css" href="../css/style6.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="../css/styles.css">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body style="background-color:#103b65">
        <?php 
        $string = $_POST['answer'];
        $total = (int)$string; ?>

        <div class="top">
             <div class="row" id="last" style="color:white;">
                
                <h4 class="middle">HOW MUCH TO MAKE A BOT</h4>
                
            </div>

        </div>

        <div class="container" id="text">
            <div class="row" id="box">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="about-text animated fadeIn">
                        <h1 class="main-text">Your estimate cost is</h1>
                        <h1 id="price"> $<?php echo $string; ?></h1>
                        <br>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem officiis omnis excepturi praesentium dicta, odio, voluptas error. Asperiores ipsa tempora sapiente molestias dolore saepe repellat. Dignissimos saepe libero doloremque totam!</p>
                     <a id="final" href="1.html" class="btn btn-primary btn-lg">START OVER<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                     <hr>
                     <a id="final" href="#" class="btn btn-primary btn-lg">FIND OUT MORE ABOUT "_____"  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>