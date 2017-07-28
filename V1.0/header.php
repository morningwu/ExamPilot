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
										<ul class="nav pull-right">
											
							
											<?php 
											if(isset($_SESSION['student_name'])){

												echo 
												'
												<li>
													<a href="learning.php" id="btn" class=" green-btn btn">學野啦！</a>
												</li>
												<li>
													<a href="student-account.php" id="btn" class=" blue-btn btn">學習報告</a>
												</li>
												

												';	

												/*

												<li class="dropdown">
												<a id="drop" href="learning.php" role="button" class="	dropdown-toggle" data-toggle="dropdown">選擇科目<b class="caret"></b></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="drop">
													<li><a href="chinese.php">中國語文</a></li>
													<li><a href="english.php">英國語文</a></li>
													<li><a href="404.php">小學數學</a></li>
													<li><a href="404.php">考試道場</a></li>
												</ul>
											</li>
													<li class="dropdown">
													<a id="drop" href="" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="student-login-font">學生：'. $_SESSION['student_name'] . '</span><b class="caret"></b></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="drop">
													<li><a href="student-account.php">學生帳戶</a></li>
													<li><a href="logout.php"><span class="student-login-font">登出</span></a></li>
												</ul>
												</li>
		
												*/
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
										
											'<li>
												<a href="login.php" id="btn" class="green-btn btn">登入</a>
											</li>
											<li>
												<a href="registration.php" id="btn" class=" blue-btn btn">註冊</a>
											</li>
											<li>
												<a href="learning.php" id="btn" class=" red-btn btn">立即試用</a>
											</li>


													
													
												</ul>
											</li>';

											/*
											<li class="dropdown">
												<a id="drop" href="learning.php" role="button" class="dropdown-toggle" data-toggle="dropdown">選擇科目<b class="caret"></b></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="drop">
													<li><a href="chinese.php">中國語文</a></li>
													<li><a href="english.php">英國語文</a></li>
													<li><a href="math.php">小學數學</a></li>
													<li><a href="exam.php">考試道場</a></li>
												</ul>
											</li>
												<li class="dropdown">
												<a id="drop" href="" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="student-login-font">帳戶管理</span><b class="caret"></b></a>
												<ul class="dropdown-menu" role="menu" aria-labelledby="drop">
													<li><a href="registration.php"><span class="font-red">帳戶註冊（學生）</span></a></li>
													<li><a href="login.php">帳戶登入（學生）</a>
											</li>
											*/
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