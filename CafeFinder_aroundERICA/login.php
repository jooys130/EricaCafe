<?php
	try{
		$db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$ID = $_POST['ID'];
		$PW = $_POST['PW'];

		$rows = $db->query("SELECT * FROM user_info");
        $result = $rows->fetchAll();

		for($i = 0; $i<count($result); $i++){
        	if($result[$i]["id"] == $ID and $result[$i]["pwd"] == $PW){
                session_start();
                $_SESSION['user_name'] = $result[$i]["uname"];
                header("Location: index.php");
                exit;
        	}
        }
         
        header("Location: login.html");
        exit;


	} catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }
    exit;
?>