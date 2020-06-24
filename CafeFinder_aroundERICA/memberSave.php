<!-- Save Member to DB -->
<?php
    session_start();

    try {
        $db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id=$_POST['id'];
        $password=$_POST['pwd'];
        $password2=$_POST['pwd2'];
        $name=$_POST['name'];
        $birthDay=$_POST['birthDay'];

        if ($password !== $password2) {
            $_SESSION['pwError'] = "error";
            header("Location: signup.php");
            exit;
        }

        $q_id = $db->quote($id);
        $q_password = $db->quote($password);
        $q_password2 = $db->quote($password2);
        $q_name = $db->quote($name);
        $q_birthDay = $db->quote($birthDay);
        
        $rows = $db->query("SELECT * FROM user_info");
        $result = $rows->fetchAll();
        
        for($i = 0; $i < count($result); $i++){
            if($result[$i]["id"] == $id){
                $_SESSION['idError'] = "error";
                header("Location: signup.php");
                exit;
            }
        }

        $str = "INSERT INTO user_info (memberSeq, id, pwd, uname, birthDay) 
                VALUE (NULL, $q_id, $q_password, $q_name, $q_birthDay)";
        $db->exec($str);

        $_SESSION['signUpOk'] = "yes";
        header("Location: index.php");
        exit;

    } catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }

?>






