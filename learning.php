<?php 

include('init.php');
include('function/assessment_counting_trial.php');
include('function/user.php');
check_login();

//editablable variables
if(isset($_SESSION['studentEmail']))

{
    $student_name        = $_SESSION['student_name'];
    $studentEmail        = $_SESSION['studentEmail'];
    $result              = mysql_query("SELECT * FROM `users` WHERE `email` = '$studentEmail'");
    $row                 = mysql_fetch_assoc($result);
    $student_level       = $row['student_level'];
    $_SESSION['user_id'] = $row['user_id'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <?php include('meta-tag.php');?>
        <link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="_assets/css/main.css" rel="stylesheet" />
        <link href="_assets/css/animate.css" rel="stylesheet" />
        <link href="_assets/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
    </head>
    <body>
        <div id="wrapper">
        <!-- header-->

        <?php include('header.php');?>
        <!-- End header-->
        <div class="center-wrapper">
        <!--<div class="container">
            <div class="row">
                <div class="span12">
                    <div id="inner_title">
                        <h1>Learning Play Room  </h1>
                        <span>Start Playing Today</span>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="top-container">
           <h1 class="text-center"><?php if(isset($_SESSION['student_name'])){echo "<h1 align='center'><span class='font-orange'>Hello! ". $student_name . "</span></h1>"; }?></h1>
        </div>
        <h2 align="center">How Are you today?</h2><hr/>
        <div id="content">
            <div class="container center">
                <!--<div class="row">
                    <div id="filterSection_menu" class="span12 filtering animated bounceInUp hidden-phone">
                        <div class="btn-group">
                            <button class="btn" data-filter="">中文</button>
                            <button class="btn" data-filter="web">英文</button>
                            <button class="btn" data-filter="logodesign">數學</button>
                            <button class="btn"  data-filter="seo">考試道場 </button>
                            <button class="btn" data-filter="development">development</button>
                            <button class="btn" data-filter="design">design</button>
                        </div>
                    </div>
                </div>-->
                       <div class="row-fluid">
                        <div class="container center">
                            <div class="span4">
                            <img src="_assets/img/P1.png">
                                <div class="btn-bg">

                                    <h2>小一補充練習</h2>
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.1">練習</a> 
                                </div>
                               
                            </div>
                            <div class="span4">
                             <img src="_assets/img/P2.png">
                                <div class="btn-bg">
                                    <h2>小二補充練習</h2>
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.2">練習</a> 
                                </div>
                               
                            </div>
                            <div class="span4">
                             <img src="_assets/img/P3.png">
                                <div class="btn-bg">
                                    <h2>小三補充練習</h2>
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.3">練習</a> 
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                    <div class="container center">
                        <div class="span4">
                         <img src="_assets/img/P4.png">
                            <div class="btn-bg">
                                <h2>小四補充練習</h2>
                                <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.4">練習</a> 
                            </div>
                           
                        </div>
                        <div class="span4">
                         <img src="_assets/img/P5.png">
                            <div class="btn-bg">
                                <h2>小五補充練習</h2>
                                <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.5">練習</a> 
                            </div>
                           
                        </div>
                        <div class="span4">
                         <img src="_assets/img/P6.png">
                            <div class="btn-bg">
                                <h2>小六補充練習</h2>
                                <a id ="flat-btn" class="flat-button flat-btn-round-3" href="learning-menu.php?level=P.6">練習</a> 
                            </div>
                           
                        </div>
                    </div>   
                        
                    </div>
                    
            </div>
            
        </div>
        </div>
        <?php include('footer.php');?>
        
        
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#latest_tweets').jtwt({
                username: 'designedbydash',
                count: '2',
                loader_text: 'Loading Tweets...'
            });
        });
        </script>
</body>
</html>