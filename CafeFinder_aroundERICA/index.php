<!DOCTYPE HTML>

<?php session_start(); ?>

<html>
	<head>
		<title>HELLO!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
                        
						<nav class="navbar navbar-inverse navbar-fixed-top">
                            <ul class="actions small">

                                <!-- php -->
								<?php
								if($_SESSION['signUpOk'] == "yes"){
									$_SESSION['signUpOk'] = "no";
									echo "<script>alert('회원가입이 완료되었습니다.');</script>";
								}
							
                                if(!isset($_SESSION['user_name'])){
                                    echo '<li><a href="login.html" class="button special small">LOGIN</a></li>';
                                    echo '<li><a href="signUp.php" class="button small">SIGN UP</a></li>';
                                } 
                                else{
									$user_name = $_SESSION['user_name'];
									$user_id = $_SESSION['user_id'];
                                    echo "<p><strong>$user_name</strong>님 환영합니다.";
                                    echo '<li><a href="logOut.php" class="button special small">LOGOUT</a></li>';
                                }?>
                    
							</ul>	
                        </nav>
                                      
						<h1>Cafe Finder<br/>
						around ERICA</h1>
						<p>학교 주변 카페 <b>위치</b>와 <b>정보</b> 간편하게 알아보기</p>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Cafe Finder</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="cafe.php">CAFE</a></li>
							<li><a href="intro.html">INTRODUCE</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div id="main">

					<!-- Post -->
					   <section class="post">
						  <header class="major">
							 <h1>This is a<br />
							 Cafe Page</h1>
							 <h3>around ERICA</h3>
							 <p>성준은유연하조</p>
						  </header>

					   </section>
				 </div>

			  <!-- Copyright -->
				 <div id="copyright">
					<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">디자인</a></li></ul>
				 </div>

		   </div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>