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
                    <span>Comprehension Test</span>
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
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-01.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 1</h3>
                            <h4>About Jupiter</h4>
                            <div class="level-font">Level : ***</div><br/>

                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-1-jupiter.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-02.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 2</h3>
                            <h4>The Movie</h4>
                            <div class="level-font">Level : ***</div><br/>
                        
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-2-the-movie.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-03.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 3</h3>
                            <h4>The Train</h4>
                            <div class="level-font">Level : ***</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-3-The-Train.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-04.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 4</h3>
                            <h4>The Tree</h4>
                            <div class="level-font">Level : ***</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-4-The-Tree.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                 <!--End of First Row-->

                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <!--Second Row-->
                            <img src="_assets/img/english/comprehension/comprehension-icon-05.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 5</h3>
                            <h4>The Internatinal Red Cross</h4>
                            <div class="level-font">Level : ***</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-5-The-International-Red-Cross.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-06.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 6</h3>
                            <h4>The Conversation</h4>
                            <div class="level-font">Level : ***</div><br/><br/>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-6-The-Conversation.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-07.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 7</h3>
                            <h4>The Boat Trip</h4>
                            <div class="level-font">Level : ***</div><br/><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-7-The-Boat-Trip.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-08.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 8</h3>
                            <h4>The Lion and The Mouse</h4>
                            <div class="level-font">Level : ***</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-8-The-Lion-and-The-Mouse.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                 <!--End of Second Row-->

                <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <!--Third Row-->
                            <img src="_assets/img/english/comprehension/comprehension-icon-09.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 9</h3>
                            <h4>The Musician Month</h4>
                            <div class="level-font">Level : ***</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-9-The-Musician-Month.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-10.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 10</h3>
                            <h4>Jack-O-Lanterns</h4>
                            <div class="level-font">Level : ***</div><br/>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-10-Jack-O-Lanterns.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-11.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 11</h3>
                            <h4>The Bird House</h4>
                            <div class="level-font">Level : ***</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-11-The-Bird-House.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-12.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 12</h3>
                            <h4>The Killer Whale</h4>
                            <div class="level-font">Level : ***</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-12-The-Killer-Whale.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                 <!--End of Third Row-->

                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <!--Forth Row-->
                            <img src="_assets/img/english/comprehension/comprehension-icon-13.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 13</h3>
                            <h4>Visiting Korea</h4>
                            <div class="level-font">Level : ***</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-13-Visiting-Korea.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-14.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 14</h3>
                            <h4>The Wild Animal</h4>
                            <div class="level-font">Level : ***</div><br/>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-14-The-Wild-Animal.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                           <img src="_assets/img/english/comprehension/comprehension-icon-15.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 15</h3>
                            <h4>The Grapes</h4>
                            <div class="level-font">Level : ***</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-15-The-Grape.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-16.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 16</h3>
                            <h4>Taking Photos</h4>
                            <div class="level-font">Level : ***</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-16-Taking-Photos.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                 <!--End of Forth Row-->

                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <!--fifth Row-->
                            <img src="_assets/img/english/comprehension/comprehension-icon-17.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 17</h3>
                            <h4>A Telescope</h4>
                            <div class="level-font">Level : ***</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-17-A-Telescope.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-18.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 18</h3>
                            <h4>The President</h4>
                            <div class="level-font">Level : ***</div><br/>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-18-The-President.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-19.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 19</h3>
                            <h4>I Want That!</h4>
                            <div class="level-font">Level : ***</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-19-I-Want-That.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-20.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 20</h3>
                            <h4>Need and Want</h4>
                            <div class="level-font">Level : ***</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-20-Need-And-Want.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>

                 <!--End of Fifth Row-->

                 <!--Sixth Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-21.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 21</h3>
                            <h4>Stomach Ache</h4>
                            <div class="level-font">Level : ****</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-21-Stomach-ache.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-22.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 22 </h3>
                            <h4>The House</h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-22-The-House.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-23.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 23 </h3>
                            <h4>Sub Sandwich</h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-23-Sub-Sandwich.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-24.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 24 </h3>
                            <h4>Taxes</h4>
                            <div class="level-font">Level : ****</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-24-Taxes.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of Sixth Row-->

                  <!--Seventh Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-25.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 25</h3>
                            <h4>The Swimsuit</h4>
                            <div class="level-font">Level : ****</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-25-Swimsuits.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-26.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 26 </h3>
                            <h4>Milton The Green </h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-26-Milton-the-Green.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-27.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 27 </h3>
                            <h4>The Magician</h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-27-The-Magician.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-28.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 28</h3>
                            <h4>Deer Hunting</h4>
                            <div class="level-font">Level : ****</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-28-Deer-Hunting.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of Seventh Row-->

                  <!--Eight Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-29.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 29</h3>
                            <h4>About Duncan</h4>
                            <div class="level-font">Level : ****</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-29-About-Duncan.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-30.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 30</h3>
                            <h4>Grilled Cheese</h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-30-Grilled-Cheese.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-31.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 31</h3>
                            <h4>The Holiday</h4>
                            <div class="level-font">Level : ****</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-31-Holiday.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-32.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 32</h3>
                            <h4>Pluto?</h4>
                            <div class="level-font">Level : ****</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-32-Pluto.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of Eight Row-->


                   <!--Nine Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-33.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 33</h3>
                            <h4>African Wild Dog</h4>
                            <div class="level-font">Level : ****</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-33-African-Wild-Dogs.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-34.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 34</h3>
                            <h4>Pumpkin Pies</h4>
                            <div class="level-font">Level : **</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-34-Pumpkin-Pies.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-35.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 35</h3>
                            <h4>The Dance Class</h4>
                            <div class="level-font">Level : **</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-35-Dance-Class.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-36.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 36</h3>
                            <h4> Fruits and Vegetables </h4>
                            <div class="level-font">Level : **</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-36-Fruits-and-Vegetables.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of nine Row-->

                   <!--Ten Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-37.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 37</h3>
                            <h4>The Great Banana</h4>
                            <div class="level-font">Level : **</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-37-The-Great-Banana.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-38.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 38</h3>
                            <h4>The Herschel</h4>
                            <div class="level-font">Level : **</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-38-Housebreaking-Herschel.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-39.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 39</h3>
                            <h4>Reading a Book</h4>
                            <div class="level-font">Level : **</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-39-Reading-Book.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-40.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 40</h3>
                            <h4>The First Day</h4>
                            <div class="level-font">Level : **</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-40-The-First-Day.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of Ten Row-->

                   <!--Eleven Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-41.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 41</h3>
                            <h4>A Day At The Circus</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-41-A-Day-at-the-Circus.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-42.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 42</h3>
                            <h4>We Want A Pet!</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-42-We-want-a-pet.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-43.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 43</h3>
                            <h4>The Lonely Goldfish</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-43-The-Lonely-Goldfish.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-44.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 44</h3>
                            <h4>The Gym Class</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-44-The-Gym-Class.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--End of Eleven Row-->

                   <!--Twelve Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-45.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 45</h3>
                            <h4>I Never Want to Sleep</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-45-I-Never-Want-To-Sleep.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                          <img src="_assets/img/english/comprehension/comprehension-icon-46.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 46</h3>
                            <h4>The Watermelon</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-46-The-Watermelon.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-47.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 47</h3>
                            <h4>Small Things Add Up</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-47-Small-Things-Add-Up.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-48.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 48</h3>
                            <h4>Tea Time!</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-48-Tea-Time.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--End of Twelve Row-->

                   <!--thirteenth Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-49.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 49</h3>
                            <h4>Too Much Soda</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-49-Too-Much-Soda.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-50.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 50</h3>
                            <h4>The Ugly Giraffe</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-50-The-Ugly-Giraffe.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-51.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 51</h3>
                            <h4>A Day at the Beach</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-51-A-Day-At-The-Beach.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-52.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 52</h3>
                            <h4>A Lomg Time To Wait</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-52-A-long-time-to-wait.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Thirteenth Row-->

                     <!--Fourteen Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-53.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 53</h3>
                            <h4>Baking Cookies</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-53-Baking-Cookies.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                          <img src="_assets/img/english/comprehension/comprehension-icon-54.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 54</h3>
                            <h4>A Broken Leg</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-54-A-Broken-Leg.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                           <img src="_assets/img/english/comprehension/comprehension-icon-55.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 55</h3>
                            <h4>A Day at the Amusement Park</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="55-A-Day-At-the-Amusement-Park.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-56.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 56</h3>
                            <h4>Baseball Hats</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-56-Baseball-Hats.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of fourteen Row-->


                    <!--Fifthteen Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-57.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 57</h3>
                            <h4>Cupcake Power</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-57-cupcake-power.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-58.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 58</h3>
                            <h4>Everyday Shapes</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-58-Everday-Shapes.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-59.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 59</h3>
                            <h4>Favorite Letters</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-59-Favourite-Letters.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-60.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 60</h3>
                            <h4>Favorite Sports</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-60-Favourite-Sports.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Fifthteen Row-->

                   
                    <!--Seventeen Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-61.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 61</h3>
                            <h4>Going Bananas</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-61-Going-Banana.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-62.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 62</h3>
                            <h4>Carly The Canary</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-62-Carly-the-Canary.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-63.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 63</h3>
                            <h4>The Buckeye Style</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-63-The-Buckeye-Style.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-64.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 64</h3>
                            <h4>Davy Crockett</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-64-Davy-Crockett.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Seventeen Row-->
                     <!--Eighteen Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                           <img src="_assets/img/english/comprehension/comprehension-icon-65.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 65</h3>
                            <h4>Sean's New Friend</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-65-Sean-New-Friend.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-66.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 66</h3>
                            <h4>Picky</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-66-Picky.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                           <img src="_assets/img/english/comprehension/comprehension-icon-67.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 67</h3>
                            <h4>The New Shoes</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-67-The-New-Shoes.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-68.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 68</h3>
                            <h4>Losting The Library Card</h4>
                            <div class="level-font">Level : *</div>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-68-Losting-The-Library-Card.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Eighteen Row-->

                       <!--Nineteen Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-69.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 69</h3>
                            <h4>A Naive Farmer</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-69-A-Naive-Farmer.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-70.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 70</h3>
                            <h4>A New Family Member</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-70-A-New-Family-Member.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                             <img src="_assets/img/english/comprehension/comprehension-icon-71.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 71</h3>
                            <h4>Christmas Food</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-71-Christmas-Food.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                             <img src="_assets/img/english/comprehension/comprehension-icon-72.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 72</h3>
                            <h4>An Old Village</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-72-An-Old-Village.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Nineteen Row-->


                       <!--Twenty Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                             <img src="_assets/img/english/comprehension/comprehension-icon-73.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 73</h3>
                            <h4>About Hobbies</h4>
                            <div class="level-font">Level : *</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-73-About-Hobbies.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-74.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 74</h3>
                            <h4>An Interview</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-74-An-Interview.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                            <img src="_assets/img/english/comprehension/comprehension-icon-75.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 75</h3>
                            <h4>A TV Show</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-75-A-TV-Show.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                             <img src="_assets/img/english/comprehension/comprehension-icon-76.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 76</h3>
                            <h4>The Connecticut Colony</h4>
                            <div class="level-font">Level : **</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-76-The-Connecticut-Colony.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Twenty Row-->

                    <!--Twenty one Row-->
                 <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-77.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 77</h3>
                            <h4>Butterflies</h4>
                            <div class="level-font">Level : **</div><br/>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                               
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-77-Butterfly.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            
                            <img src="_assets/img/english/comprehension/comprehension-icon-78.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 78</h3>
                            <h4>The Bank</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-78-The-Bank.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                           
                             <img src="_assets/img/english/comprehension/comprehension-icon-79.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 79</h3>
                            <h4>The Silk Road</h4>
                            <div class="level-font">Level : *</div><br/>
                              
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-79-The-Silk-Road.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable design development web">
                            
                             <img src="_assets/img/english/comprehension/comprehension-icon-80.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix">
                            <h3>Mission 80</h3>
                            <h4>About Money</h4>
                            <div class="level-font">Level : *</div><br/>
 
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-comprehension-id-80-About-Money.php">Learn &rarr;</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Twenty one Row-->



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