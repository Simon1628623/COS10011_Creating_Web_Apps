<!DOCTYPE html>


<html lang="en">
  <head>
	<!-- Meta information-->
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="useragents"/>
	<meta name="author" content="Simon"/>
	
	<!-- for tab bar-->
	<title>HOME</title>

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
	<? if(strpos($_SERVER['REQUEST_URI'], "register.php")){?><script src="css/validator.js"></script><?}?>
	<? if(strpos($_SERVER['REQUEST_URI'], "results.php")){?><script src="css/results.js"></script><?}?>
	<? if(strpos($_SERVER['REQUEST_URI'], "quiz.php")){?><script src="css/quiz.js"></script><?}?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>
    <body>
  
	<!-- Container for body -->
    <div class="container">
        <div id="banner"></div>
		<!--navigation-->
		<nav>
          	<a class="btn01" href="index.php"></a>
			<a class="btn02" href="useragents.php"></a>
			<a class="btn03" href="about.php"></a>
			<a class="btn04" href="register.php"></a>
		</nav>
		<!-- end of navigation-->