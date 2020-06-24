<!DOCTYPE HTML>
<?php session_start(); ?>

<html>
   <head>
      <title>SignUp</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
   </head>
   <body class="is-loading"></body>
        <!-- Sign Up Error Message -->
        <?php
            if (isset($_SESSION['idError'])) {
                if($_SESSION['idError'] == "error"){
                    $_SESSION['idError'] = "noError";
                    echo "<script>alert('이미 사용 중인 아이디입니다.');</script>";
                }
            }

            if (isset($_SESSION['pwError'])){
                if($_SESSION['pwError'] == "error"){
                    $_SESSION['pwError'] = "noError";
                    echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
                }
            }
            session_destroy();
        ?>
         <!-- php End -->

      <!-- Wrapper -->
         <div id="wrapper">

            <!-- Header -->
               <header id="header">
						<a href="index.php" class="logo">Cafe Finder</a>
					</header>

            <!-- Nav -->
               <nav id="nav">
                  <ul class="links">
                     <li><a href="cafe.html">CAFE</a></li>
                     <li><a href="intro.html">Introduce</a></li>
                     <li><a href="bookmark.php">BOOKMARK</a></li>
                  </ul>
               </nav>

            <!-- Main -->
               <div id="main">

                  <!-- Post -->
                     <section class="post">
                        <header class="major">
                           <h2>Sign Up</h2>
                        </header>
                        
                     </section>
                     <section>
                        <form name="EricaCafe" method="post" action="memberSave.php">
                            <div class="field">
                                <label for="name">아이디</label>
                                <input type="text" maxlength="30" name="id"/>
                            </div>
                            <div class="field">
                                <label for="email">비밀번호</label>
                                <input type="password" maxlength="20" name="pwd"/>
                            </div>
                            <div class="field">
                                <label for="email">비밀번호 재입력</label>
                                <input type="password" maxlength="20" name="pwd2"/>
                            </div>
                            <div class="field">
                                <label for="email">이름</label>
                                <input type="text" maxlength="20" name="name"/>
                            </div>
                            <div class="field">
                                <label for="email">생년월일(8자리)</label>
                                <input type="text" maxlength="8" name="birthDay"/>
                            </div>
                            <ul class="actions">
                                <li><input type=submit value="회원가입" /></li>
                                <li><input type=reset value="재작성" /></li>
                            </ul>
                        </form>
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
