<!--- add class="animated bounceInDown" to make the menu move-->

<div id="header" >
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="navbar">
							<div class="navbar-inner">
								<div class="container">
									<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="brand pull-left" href="index.php"><img class="logo" src="_assets/img/logo.png" alt="ExamPilot Logo"></a>
										
									<div class="nav-collapse collapse">
									<!--banner in the middle-->
									<!--<span class="index-img"><img class="logo" src="_assets/img/index-wrapper1.png"></span>-->
										<ul class="brand nav pull-right">
											
							
											<?php 
											if(isset($_SESSION['studentEmail'])){
												echo 
												'	
													<li><a href="learning.php"  		id ="flat-btn" class="flat-button flat-btn-round-3">補充練習</a></li>
													<li><a href="student-account.php"   id ="flat-btn" class="flat-button flat-btn-round-2">學習報告</a></li>
													<li><a href="learning-reward.php"  	id ="flat-btn" class="flat-button flat-button-3">學習獎勵</a></li>
													
												';	
											
											}elseif(isset($_SESSION['admin_name'])){

												echo  

												'<li class="dropdown">
												<a id="drop" href="" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="student-login-font">管理員：'. $_SESSION['admin_name'] . '</span><b class="caret"></b></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="drop">
													<li><a href="admin-panel.php">管理員平台</a></li>
													<li><a href="logout.php"><span class="admin-login-font">登出</span></a></li>
													
												</ul>
											</li>';	
											}else{
												echo 
										
											'
												<li>
													<a href="login.php" 				id="flat-btn" class="flat-button flat-btn-round-3">學生登入</a>
												</li>
												<li>
													<a href="registration.php"  		id="flat-btn" class="flat-button flat-button-2">帳戶註冊</a>
												</li>
												<li>
													<a href="learning-trial-menu.php" 	id="flat-btn" class="flat-button flat-button-3">試用補充練習</a>

												</li>
												
													
											</ul>';

										
											}

											?>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div><!--/span12-->
				</div><!--/row-->
			</div><!--/container-->
		</div><!--/header-->