<!-- Add Bookmark Function -->
<?php
    session_start();

    $db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cafeName = $_POST['add'];
    $userId = $_SESSION['user_id'];

    $q_cafeName = $db -> quote($cafeName);
    $q_userId = $db -> quote($userId);
    
    $str = "INSERT INTO user_favorite VALUE ($q_userId, $q_cafeName)";
    $db->exec($str);

    header("Location: cafe_list/".$cafeName.".php");
    exit;
?>