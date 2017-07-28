<?php include('init.php');?>

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
        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		<!-- modeal Box-->

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 id="myModalLabel">Learning Video</h2>
               
             </div>
            <div class="modal-body">
                 <h4>IELTS Speaking in 3 minutes</h4>
                <!--<h4>Text in a modal</h4>-->
                 <iframe width="100%" height="300" src="//www.youtube.com/embed/TyYHs1-6Vls?rel=0" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="modal-footer">
               
                <button class="btn btn-primary">ok</button>
            </div>
        </div>


		<div class="container">
			<div class="row">

				<div class="span12">
                	<div id="inner_title">
                        <h1>English (Vocabulary)</h1>
                        <span>Primary 6</span>
                        <span class="right-back-btn">
                            <a class=" btn blue-btn-small" href="english.php">Back &rarr;</a> 
                        </span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
            <div class="container">
                <div class="row">

                    <div class="span3">
                        <h4>Description</h4><hr/>
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Summary</a></li>
                                <!--<li><a href="#tab2" data-toggle="tab">Video</a></li>-->
                                <li><a href="#tab3" data-toggle="tab">Ask</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">

                                    <table>
                                        <tr>
                                            <td class="question-summary-header">Type：</td>
                                            <td>Multiple Choice</td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">No.：</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">Areas：</td>
                                            <td>Vocabulary</td>
                                        </tr>
                                         <tr>
                                            <td class="question-summary-header">&nbsp;</td>
                                            <td>Grammar</td>
                                        </tr>


                                    </table>
                                 
                                          
                                </div>
                                <!--<div class="tab-pane" id="tab2">
                                    <h5>Learning Video</h5>
                                     
                                     <p>this is a Learning Video About Vocabulary</p><br/><br/>
                                     <p><a data-toggle="modal" href="#myModal" class="blue-btn ie8-btn-fix">Learning Video</a></p>
                                </div>-->
                                <div class="tab-pane" id="tab3">
                                    <h5>Ask a Tutors</h5>

                                        <a href="#" class="btn">Ask a Mentor</a>
                                </div>
                            </div>
                        </div>
                    
                 
                </div><!--/span3-->
                
                
                
                
                <div class="span9">
                    <div class="question-content">
                        <h4>Assessment</h4><hr/>
                        <form name ="question" action="" method="POST">
                            <div class="tabbable"> 
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tabq1" data-toggle="tab">Q.1</a></li>
                                        <li><a href="#tabq2" data-toggle="tab">Q.2</a></li>
                                        <li><a href="#tabq3" data-toggle="tab">Q.3</a></li>
                                        <li><a href="#tabq4" data-toggle="tab">Q.4</a></li>
                                        <li><a href="#tabq5" data-toggle="tab">Q.5</a></li>
                                        <li><a href="#tabq6" data-toggle="tab">Q.6</a></li>
                                        <li><a href="#tabq7" data-toggle="tab">Q.7</a></li>
                                        <li><a href="#tabq8" data-toggle="tab">Q.8</a></li>
                                        <li><a href="#tabq9" data-toggle="tab">Q.9</a></li>
                                        <li><a href="#tabq10" data-toggle="tab">Q.10</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tabq1">
                                            <h4>Question 1</h4>
                                            <p>What is this Sport?</p>

                                            <input type="radio" name="group1" value="Football">&nbsp;&nbsp;Football<br>
                                            <input type="radio" name="group1" value="handball">&nbsp;&nbsp;handball<br>
                                            <input type="radio" name="group1" value="netball">&nbsp;&nbsp;netball<br>
                                            <input type="radio" name="group1" value="backetball">&nbsp;&nbsp;backetball<br>

                                             
                                        </div>
                                        <div class="tab-pane" id="tabq2">
                                            <h4>Question 2</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                           
                                        </div>
                                        <div class="tab-pane" id="tabq3">
                                            <h4>Question 3</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                           
                                        </div>
                                        <div class="tab-pane" id="tabq4">
                                            <h4>Question 4</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                            
                                        </div>
                                        <div class="tab-pane" id="tabq5">
                                            <h4>Question 5</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                          
                                        </div>
                                        <div class="tab-pane" id="tabq6">
                                            <h4>Question 6</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                            
                                        </div>
                                        <div class="tab-pane" id="tabq7">
                                            <h4>Question 7</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                         
                                        </div>
                                        <div class="tab-pane" id="tabq8">
                                            <h4>Question 8</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                       
                                        </div>
                                        <div class="tab-pane" id="tabq9">
                                            <h4>Question 9</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>
                                        
                                        </div>
                                        <div class="tab-pane" id="tabq10">
                                            <h4>Question 10</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                            Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                            Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                            convallis eget.</p>

                                            <input type="submit" value="submit" name="submit" class="btn">
                                     
                                        </div>
                                    </div>
                                </div>

                        </form>
                   </div>
                </div><!--/span 9-->
                
                
                
            </div><!--/row-->
            </div><!--/container-->
            
            <br>
            
        </div><!--/hero-->
			
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

        <!-- hide and show Div-->

        <script language="javascript"> 
            function toggle() {
                var ele = document.getElementById("toggleText");
                var text = document.getElementById("displayText");
                if(ele.style.display == "block") {
                        ele.style.display = "none";
                    text.innerHTML = "Start Assessment";
                }
                else {
                    ele.style.display = "block";
                    text.innerHTML = "Close";
                }
            } 
            </script>
 


</body>
</html>