<?php
    $referer_domain = $_SERVER['HTTP_REFERER'];
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

//
    $con = mysqli_connect("localhost", "test2", "1234", "member");
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_match = mysqli_num_rows($result);
//
  

    if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
     $row = mysqli_fetch_array($result);

     $db_pass = $row["pass"];
     $db_pass2 = password_verify($pass, $db_pass);
        mysqli_close($con);

        if(!$db_pass2)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {

	    session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            echo ("
		<script>
			window.alert('로그인이 성공하였습니다.')
			location.href='index.php';
		</script>
	    ");
		// 카카오맵 누르고 들어왔으면 카카오맵으로 이동 
        }
     }
?>
