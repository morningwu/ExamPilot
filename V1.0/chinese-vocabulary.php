<?php include('init.php');?>

<?php


//editablable variables
if(isset($_SESSION['student_name'])){


    $student_name   = $_SESSION['student_name'];
    $level          = mysql_query("SELECT `student_level` FROM `users` WHERE `student_name` = '$student_name'");
    $row            = mysql_fetch_assoc($level);

}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->

        <!-- Slider css and jsStart-->
        <!--<link href="_assets/slider/css/demo.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/jquery.jscrollpane.css" rel="stylesheet" />
        <!--<link href="_assets/slider/css/reset.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/style.css" rel="stylesheet" />


       

        <!--Slider css and js End-->


        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		
		<div class="container">
			<div class="row">
				<div class="span12">
                     <div id="inner_title">
                    <h1>中文詞彙練習<? if(isset($_SESSION['student_name'])){echo " ( " . $row['student_level'] ." ) "; }?></h1> 
                    <span>詞彙練習</span>
                    <span class="right-back-btn">
                        <a class=" btn blue-btn-small" href="chinese.php">&larr; Back</a> 
                    </span>
                </div>

			</div>
		  </div>
        </div>
		
		<div id="content">
			<div class="container">
                 
				
                <!--First Row-->
                 <div id="filterSection" data-perrow="4">
                 <!-- First Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-01.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務一</h3>
                            <h4>詞語辦識<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-1-vocabulary-identifier.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-02.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務二</h3>
                            <h4>動詞<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-2-chinese-verbs.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-03.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務三</h3>
                            <h4>形容詞<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-3-chinese-adjective.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-04.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務四</h3>
                            <h4>量詞<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-4-chinese-quantifier.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        
                        
                    </div>
                   
                </div>
                 <!--End of First Row-->

<!-- Second Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-05.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務五</h3>
                            <h4>四字詞語<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-5-formation-words.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-06.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務六</h3>
                            <h4>形容詞 - 2<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-6-chinese-adjective-2.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                         <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-07.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>任務七</h3>
                            <h4>重組句子<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-id-7-chinese-reconstrcting-sentence.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                     
                    
                    </div>
                   
                </div>
                 <!--End of Second Row-->

                </div>
			</div><!--/container-->
			
		</div><!--/hero-->
		
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
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="_assets/slider/js/jquery.easing.1.3.js"></script>
        <!-- the jScrollPane script -->
        <script type="text/javascript" src="_assets/slider/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="_assets/slider/js/jquery.contentcarousel.js"></script>
        <script type="text/javascript">
            $('#ca-container').contentcarousel();
        </script>
</body>
</html>