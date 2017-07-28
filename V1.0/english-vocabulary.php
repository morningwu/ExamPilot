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
                    <h1>English <? if(isset($_SESSION['student_name'])){echo " ( " . $row['student_level'] ." ) "; }?></h1> 
                    <span>Vocabulary Test</span>
                    <span class="right-back-btn">
                        <a class=" btn blue-btn-small" href="learning.php"> &larr; Back</a>  
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
                            <h3>Mission 1</h3>
                            <h4>Letter Beginning with A<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-1-Letter-Begining-With-A.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-02.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 2</h3>
                            <h4>Letter Beginning with B<br/><br/><br/></h4>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-2-Letter-Begining-With-B.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-03.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 3</h3>
                            <h4>Letter Beginning with C<br/><br/><br/></h4>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-3-Letter-Begining-With-C.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-04.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 4</h3>
                            <h4>Letter Beginning with F<br/><br/><br/></h4>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-4-Letter-Begining-With-F.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of First Row-->

                  <!--Second Row-->
                 <div id="filterSection" data-perrow="4">
                 <!-- First Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-05.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 5</h3>
                            <h4>Letter Beginning with R<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-5-Letter-Begining-With-R.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-06.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 6</h3>
                            <h4>Letter Beginning with I<br/><br/><br/></h4>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-6-Letter-Begining-With-I.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                           <img src="_assets/img/english/vocabulary/vocabulary-icon-07.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 7</h3>
                            <h4>Letter Beginning with M<br/><br/><br/></h4>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-7-Letter-Begining-With-M.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-08.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 8</h3>
                            <h4>Letter Beginning with P<br/><br/><br/></h4>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-8-Letter-Begining-With-P.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of Second Row-->

                 <!--Third Row-->
                 <div id="filterSection" data-perrow="4">
                 <!-- First Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                           <img src="_assets/img/english/vocabulary/vocabulary-icon-09.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 9</h3>
                            <h4>Letter Beginning with R - 2<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-9-Letter-Begining-With-R-2.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-10.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 10</h3>
                            <h4>Letter Beginning with S<br/><br/><br/></h4>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-10-Letter-Begining-With-S.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-11.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 11</h3>
                            <h4>Letter Beginning with A - 2<br/><br/><br/></h4>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-11-Letter-Begining-With-A-2.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-12.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 12</h3>
                            <h4>Synonym<br/><br/><br/><br/></h4>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-12-Synonym.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of Third Row-->

                 <!--Fourth Row-->
                 <div id="filterSection" data-perrow="4">
                 <!-- First Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-13.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 13</h3>
                            <h4>Multiple Vocabulary Test - 1 <br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-13-Multiple-Vocabulary-Test-1.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-14.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 14</h3>
                            <h4>Multiple Vocabulary Test - 2 <br/><br/><br/></h4>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-14-Multiple-Vocabulary-Test-2.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-15.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 15</h3>
                            <h4>Multiple Vocabulary Test - 3 <br/><br/><br/></h4>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-15-Multiple-Vocabulary-Test-3.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-16.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 16</h3>
                            <h4>Multiple Vocabulary Test - 4<br/><br/><br/></h4>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-16-Multiple-Vocabulary-Test-4.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of Fourth Row-->
                 <!--Fifth Row-->
                 <div id="filterSection" data-perrow="4">
                 <!-- First Row-->
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                          <img src="_assets/img/english/vocabulary/vocabulary-icon-17.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 17</h3>
                            <h4>Multiple Vocabulary Test - 5<br/><br/><br/></h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-17-Multiple-Vocabulary-Test-5.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-18.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 18</h3>
                            <h4>Multiple Vocabulary Test - 6<br/><br/><br/></h4>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-18-Multiple-Vocabulary-Test-6.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-19.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 19</h3>
                            <h4>Multiple Vocabulary Test - 7<br/><br/><br/></h4>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-19-Multiple-Vocabulary-Test-7.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/vocabulary/vocabulary-icon-20.png" alt="English-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 20</h3>
                            <h4>Multiple Vocabulary Test - 8<br/><br/><br/></h4>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-vocabulary-id-20-Multiple-Vocabulary-Test-8.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of Fifth Row-->



                 

                 

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