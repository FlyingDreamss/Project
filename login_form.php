<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<header>
    	<?php include 'header.php'; ?>
    </header>
<br><br>
	<section>
		
        <div id="main_content">
      		<div id="login_box">
	    		<div id="login_title">
		    		<span>로그인 사이트</span>
	    		</div>
	    		<div id="login_form">
          		<form  name="login_form" method="post" action="login.php">
                  	<ul>
                    <li><input type="text" name="id" placeholder="로그인 사이트" ></li>
                    <li><input type="password" id="pass" name="pass" placeholder="로그인 사이트" ></li> <!-- pass -->
                  	</ul>
                  	<div id="login_btn">
                      	<a href="#"><img src="./img/login.png" onclick="check_input()"></a>
                  	</div>		    	
           		</form>
        		</div> <!-- login_form -->
    		</div> <!-- login_box -->
        </div> <!-- main_content -->
	</section> 
	<footer>
    <br><br>
	<div class="container"><p class="m-0 text-center text-white">Copyright &copy; GMANH Website 2022</p></div>
    </footer>
</body>
</html>

