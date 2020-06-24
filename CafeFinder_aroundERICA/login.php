<!-- Login Function -->
<?php
    session_start();

	try{
		$db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$ID = $_POST['ID'];
		$PW = $_POST['PW'];

		$rows = $db->query("SELECT * FROM user_info");
        $result = $rows->fetchAll();

		for($i = 0; $i<count($result); $i++){
        	if($result[$i]["id"] == $ID and $result[$i]["pwd"] == $PW){
                $_SESSION['user_name'] = $result[$i]["uname"];
                $_SESSION['user_id'] = $result[$i]["id"];
                header("Location: index.php");
                exit;
        	}
        }
         
        print "<script language=javascript> alert('회원정보가 일치하지 않습니다.'); location.replace('login.html'); </script>";
        exit;


	} catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }
    exit;
?>