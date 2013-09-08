<?php
	session_start();

	// include hybridauth lib
	$config = dirname(__FILE__) . '/hybridauth/hybridauth/config.php';
	require_once( "hybridauth/hybridauth/Hybrid/Auth.php" );
    include('config.php');

	// start login with facebook?
	if( isset( $_GET["login"] ) ){
		try{
			$hybridauth = new Hybrid_Auth( $config );

			$adapter = $hybridauth->authenticate( "facebook" );

			$user_profile = $adapter->getUserProfile();
		}
		catch( Exception $e ){
			die( "<b>got an error!</b> " . $e->getMessage() ); 
		}
	}

	// logged in ?
	if( ! isset( $user_profile ) ){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Language Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      	background-image:url("http://howtodrawanimals.net/wp-content/uploads/2010/05/drawing.jpg");
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    
    <div class="container">
        <br /><br />
        <a href="fblogin.php?login=1"><img src="img/fb-login-button.png" /></a>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
  </body>
</html>

<?php
	}
	
	// user signed in with facebook
	else{
        //print_r($user_profile);
        $con = mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
        if (!$con){
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db(DB_NAME);
        $result = mysql_query('SELECT COUNT(*) AS cnt FROM user WHERE id=' .
                mysql_real_escape_string($user_profile->identifier));
        while($row = mysql_fetch_assoc($result)){
            if($row['cnt'] > 0){
                // Redirects
                header('Location: http://glanzd.com/MDD2013/index.php');
                exit;
            }
        }
        
        $sql = sprintf(
            "INSERT INTO users(id, name, first, last,
                            link, username, gender,
                            locale)
             VALUES('%s', '%s', '%s', '%s',
                    '%s', '%s', '%s',
                    '%s')
         ",
            mysql_real_escape_string($user_profile->identifier),
            mysql_real_escape_string($user_profile->displayName),
            mysql_real_escape_string($user_profile->firstName),
            mysql_real_escape_string($user_profile->lastName),
            mysql_real_escape_string($user_profile->photoURL),
            mysql_real_escape_string($user_profile->email),
            mysql_real_escape_string($user_profile->gender),
            mysql_real_escape_string($user_profile->region)
          );
            
          $result = mysql_query($sql);
          if($result === false){
              echo mysql_error();
              exit;
          }
          mysql_close($con);
          
          header('Location: http://glanzd.com/MDD2013/index.php');
          
	}
