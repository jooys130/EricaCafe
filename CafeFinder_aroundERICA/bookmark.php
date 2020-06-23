<!DOCTYPE HTML>
<?php session_start(); ?>

<html>
   <head>
      <title>BookMark</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
   </head>
   <body class="is-loading"></body>

      <!-- Wrapper -->
         <div id="wrapper">

            <!-- Header -->
               <header id="header">
						<a href="index.php" class="logo">Cafe Finder</a>
					</header>

            <!-- Nav -->
               <nav id="nav">
                  <ul class="links">
                     <li><a href="cafe.php">CAFE</a></li>
                     <li><a href="intro.html">INTRODUCE</a></li>
                     <li class="active"><a href="bookmark.php">BOOKMARK</a></li>
                  </ul>
               </nav>

            <!-- Main -->
               <div id="main">

                  <!-- Post -->
                     <section class="post">
                        <header class="major">
                           <h2>BookMark</h2>
                        </header>
                     </section>
                     <section>
                        <?php
                           if(!isset($_SESSION['user_id'])){
                              echo "<center><h2> Please sign in to view your bookmark </h2></center></br>";
                              echo '<center><a href="login.html" class="button big">SIGN IN</a></center>';
                           }else{
                              $db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
                              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              
                              $userId = $_SESSION['user_id'];
                              $q_userId = $db -> quote($userId);

                              $rows = $db->query("SELECT * FROM user_favorite WHERE id = $q_userId");
                              $result = $rows->fetchAll();

                              for($i = 0; $i<count($result); $i++){
                                 echo '</br>';
                                 switch($result[$i]["cafe"]){
                                    case "cafe_0" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_0.php">스타벅스</a> </h2> </center>'; break;

                                    case "cafe_1" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_1.php">워터킹커피로스터스</a> </h2> </center>'; break;

                                    case "cafe_2" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_2.php">토프레소</a> </h2> </center>'; break;

                                    case "cafe_3" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_3.php">시저커피</a> </h2> </center>'; break;

                                    case "cafe_4" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_4.php">아마스빈</a> </h2> </center>'; break;

                                    case "cafe_5" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_5.php">카페윈드밀</a> </h2> </center>'; break;

                                    case "cafe_6" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_6.php">모모커피</a> </h2> </center>'; break;

                                    case "cafe_7" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_7.php">쥬씨</a> </h2> </center>'; break;

                                    case "cafe_8" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_8.php">요거프레소</a> </h2> </center>'; break;

                                    case "cafe_9" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_9.php">카페마루</a> </h2> </center>'; break;

                                    case "cafe_10" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_10.php">이디야커피</a> </h2> </center>'; break;

                                    case "cafe_11" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_11.php">카페누엘</a> </h2> </center>'; break;

                                    case "cafe_12" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_12.php">커피플렌트</a> </h2> </center>'; break;

                                    case "cafe_13" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_13.php">룽고커피</a> </h2> </center>'; break;

                                    case "cafe_14" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_14.php">우리동네커피공장카페</a> </h2> </center>'; break;

                                    case "cafe_15" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_15.php">타르트블라썸</a> </h2> </center>'; break;

                                    case "cafe_16" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_16.php">카페내향적</a> </h2> </center>'; break;

                                    case "cafe_17" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_17.php">크레바스</a> </h2> </center>'; break;

                                    case "cafe_18" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_18.php">투썸플레이스</a> </h2> </center>'; break;

                                    case "cafe_19" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_19.php">카페카르와</a> </h2> </center>'; break;

                                    case "cafe_20" :
                                       echo '<center> <h2> <a href="cafe_list/cafe_20.php">카페드림</a> </h2> </center>'; break;
                                       
                                 }
                              }
                           }

                        ?>
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
