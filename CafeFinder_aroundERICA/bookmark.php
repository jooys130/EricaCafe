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
                        <!-- Bookmark Page -->
                        <?php
                           if(!isset($_SESSION['user_id'])){
                              echo "<center><h2> Please sign in to view your bookmark </h2></center></br>";
                              echo '<center><a href="login.html" class="button big">SIGN IN</a></center>';
                           }
                           else{
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
                                       echo '<center> <a href="cafe_list/cafe_0.php"class="button special fit">스타벅스</a> </center>'; 
                                       break;
                                    case "cafe_1" :
                                       echo '<center> <a href="cafe_list/cafe_1.php"class="button special fit">워터킹커피로스터스</a> </center>';
                                       break;
                                    case "cafe_2" :
                                       echo '<center> <a href="cafe_list/cafe_2.php"class="button special fit">토프레소</a> </center>';
                                       break;
                                    case "cafe_3" :
                                       echo '<center> <a href="cafe_list/cafe_3.php"class="button special fit">시저커피</a> </center>';
                                       break;
                                    case "cafe_4" :
                                       echo '<center> <a href="cafe_list/cafe_4.php"class="button special fit">아마스빈</a> </center>';
                                       break;
                                    case "cafe_5" :
                                       echo '<center> <a href="cafe_list/cafe_5.php"class="button special fit">카페윈드밀</a> </center>';
                                       break;
                                    case "cafe_6" :
                                       echo '<center> <a href="cafe_list/cafe_6.php"class="button special fit">모모커피</a> </center>';
                                       break;
                                    case "cafe_7" :
                                       echo '<center> <a href="cafe_list/cafe_7.php"class="button special fit">쥬씨</a> </center>';
                                       break;
                                    case "cafe_8" :
                                       echo '<center> <a href="cafe_list/cafe_8.php"class="button special fit">요거프레소</a> </center>';
                                       break;
                                    case "cafe_9" :
                                       echo '<center> <a href="cafe_list/cafe_9.php"class="button special fit">카페마루</a> </center>';
                                       break;
                                    case "cafe_10" :
                                       echo '<center> <a href="cafe_list/cafe_10.php"class="button special fit">이디야커피</a> </center>';
                                       break;
                                    case "cafe_11" :
                                       echo '<center> <a href="cafe_list/cafe_11.php"class="button special fit">카페누엘</a> </center>';
                                       break;
                                    case "cafe_12" :
                                       echo '<center> <a href="cafe_list/cafe_12.php"class="button special fit">커피플렌트</a> </center>';
                                       break;
                                    case "cafe_13" :
                                       echo '<center> <a href="cafe_list/cafe_13.php"class="button special fit">룽고커피</a> </center>';
                                       break;
                                    case "cafe_14" :
                                       echo '<center> <a href="cafe_list/cafe_14.php"class="button special fit">우리동네커피공장카페</a> </center>';
                                       break;
                                    case "cafe_15" :
                                       echo '<center> <a href="cafe_list/cafe_15.php"class="button special fit">타르트블라썸</a> </center>';
                                       break;
                                    case "cafe_16" :
                                       echo '<center> <a href="cafe_list/cafe_16.php"class="button special fit">카페내향적</a> </center>';
                                       break;
                                    case "cafe_17" :
                                       echo '<center> <a href="cafe_list/cafe_17.php"class="button special fit">크레바스</a> </center>';
                                       break;
                                    case "cafe_18" :
                                       echo '<center> <a href="cafe_list/cafe_18.php"class="button special fit">투썸플레이스</a> </center>';
                                       break;
                                    case "cafe_19" :
                                       echo '<center> <a href="cafe_list/cafe_19.php"class="button special fit">카페카르와</a> </center>';
                                       break;
                                    case "cafe_20" :
                                       echo '<center> <a href="cafe_list/cafe_20.php"class="button special fit">카페드림</a> </center>';
                                       break;
                                 }
                              }
                           }

                        ?>    
                        <!-- php End -->
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
