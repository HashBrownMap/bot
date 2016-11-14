<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>How Much to Make a Bot</title>
        <meta name="description" content="How Much to Make a Bot">
        <meta name="author" content="Rhodium">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
        <script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/style6.css" />
        <link rel="stylesheet" href="../css/animate.css">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
                <?php 
                    $string = $_POST['answer'];
                    $total = (int)$string;
                    $fir = $_POST['first'];
                    $first = (int)$fir;
                    $sec = $_POST['second'];
                    $second = (int)$sec;
                    $thi = $_POST['third'];
                    $third = (int)$thi;
                ?>


            <div class="top">
            <div class="row">
            <form action="4.php" method="POST">
                <input type="hidden" name="first" value="<?php echo $fir; ?>">
                <input type="hidden" name="second" value="<?php echo $sec; ?>">
                <button name="answer" class="col-md-4 lefty" value="<?php echo ($total - $third); ?>">PREVIOUS QUESTION</button>
            </form>
                
                <h5 class="col-md-4 hidden-md-down middle">HOW MUCH TO MAKE A BOT</h5>

                <h5 class="rig">$<?php echo $string; ?> </h5>
            </div>

        </div>
        <div class="container">


            <div class="content  animated fadeIn">
                <h1>Do people rate or review things?</h1>
                <br>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet pariatur ullam commodi iste</h5>
                
            </div>
            <section class="main">
			
				<ul class="ch-grid">
					<li class="wow fadeInUp" data-wow-delay="0.3s">
						<div class="ch-item ch-img-1">
                            <form action="5.php" method="POST">
                            <button type="submit" name="answer" value="<?php echo ($total + 300); ?>">		
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Yes</h3>
									
									</div>	
								</div>
							</div>
                            </button>	
                            </form>	
						</div>
                    <br> <h3>Yes</h3>
					</li>
					<li class="wow fadeInUp" data-wow-delay="0.6s">
						<div class="ch-item ch-img-2">
                            <form action="5.php" method="POST">
                                
                                <button type="submit" name="answer" value="<?php echo $total; ?>">	
                                <div class="ch-info-wrap">                              
                                    <div class="ch-info">                   
                                        <div class="ch-info-front ch-img-2"></div>                 
                                            <div class="ch-info-back">
                                                <h3>No</h3>
                                                
                                            </div>
                                    </div>
                                </div>
                                </button>
                            </form>
						</div> <br> <h3>No</h3>
					</li>
					<li class="wow  fadeInUp" data-wow-delay="0.9s">
						<div class="ch-item ch-img-3">
                            <form action="5.php" method="POST">
                            
                            <button type="submit" name="answer" value="<?php echo ($total + 50); ?>">	
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h4>I don't know</h4>
									
									</div>
								</div>
							</div>
                            </button>	
                            </form>	
						</div> <br> <h3>I don't know</h3>
					</li>
				</ul>
				
			</section>

        <script src="../js/wow.min.js"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

    </body>
</html>