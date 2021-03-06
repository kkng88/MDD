<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pictionary</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0; user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">--<
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */
	html {
	overflow: hidden;
	max-width:100%;
	}
    body {
      padding-bottom: 0px;
      color: #5a5a5a;
	  max-width:100%;
    }

     .lead{
	 font-size:30px;
	 }

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
	  margin-top:80px;
    }

    .carousel .container {
      position: relative;
      z-index: 8;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 9;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 400px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 7px rgba(0,0,0,.6);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
	.menuitem1, .menuitem1 li a{
	color: #FFFFFF;
	}
    </style>

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
 <script>
var langa=null;

function redirect(lang2)
{
hideclass("menuitem1");
 window.location = "index.php?lang1="+langa+"&lang2="+lang2;
 
}

function setlang(lang1)
{
langa=lang1;
hideclass("menuitem1");
showclass("menuitem2");
document.getElementById('brand').innerHTML="Set Language 2";
}

function hideclass(match)
    {
    var elems = document.getElementsByTagName('*'),i;
    for (i in elems)
        {
        if((" "+elems[i].className+" ").indexOf(" "+match+" ") > -1)
            {
            elems[i].style.display = 'none';
            }
        }
    }
	function showclass(match)
    {
    var elems = document.getElementsByTagName('*'),i;
    for (i in elems)
        {
        if((" "+elems[i].className+" ").indexOf(" "+match+" ") > -1)
            {
            elems[i].style.display = 'block';
            }
        }
    }
 </script>
 
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="brand" class="brand" href="#">Pictionary</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav menuitem1" style=" opacity: 0.5;-moz-opacity: 0.5;-webkit-opacity: 0.5;">
           
                <li><a href="#" onclick="setlang('en')">English</a></li>
                <li><a href="#" onclick="setlang('ml')">Malay</a></li>
                <li><a href="#" onclick="setlang('cn')">Mandarin</a></li>
				<li><a href="#" onclick="setlang('ja')">Japanese</a></li>
				<li><a href="#" onclick="setlang('sp')">Spanish</a></li>
				
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
              </ul>
              
              <ul class="nav menuitem2" style="display: none; opacity: 0.5;-moz-opacity: 0.5;-webkit-opacity: 0.5;">
           
                <li><a href="#" onclick="redirect('en')">English</a></li>
                <li><a href="#" onclick="redirect('ml')">Malay</a></li>
                <li><a href="#" onclick="redirect('cn')">Mandarin</a></li>
				<li><a href="#" onclick="redirect('ja')">Japanese</a></li>
				<li><a href="#" onclick="redirect('sp')">Spanish</a></li>
				
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
          
        <?php
            include('config.php');
        
            $strLang1 = $_GET['lang1'];
            $strLang2 = $_GET['lang2'];
            
            switch($strLang1){
                case 'en';
                    $strTbl1 = 'english';
                    break;
                case 'ml':
                    $strTbl1 = 'malay';
                    break;
                case 'cn':
                    $strTbl1 = 'mandrin';
                    break;
				case 'ja':
                    $strTbl1 = 'japanese';
                    break;
				case 'sp':
                    $strTbl1 = 'spanish';
                    break;
                default:
                    $strTbl1 = 'english';
                    break;
            }
            switch($strLang2){
                case 'en';
                    $strTbl2 = 'english';
                    break;
                case 'ml':
                    $strTbl2 = 'malay';
                    break;
                case 'cn':
                    $strTbl2 = 'mandrin';
					break;
				case	
				    $strTbl2 = 'japanese';
                    break;
				case 'sp':
                    $strTbl2 = 'spanish';
                    break;
                default:
                    $strTbl2 = 'malay';
                    break;
            }
            
            $con = mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
            if (!$con){
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db(DB_NAME);
            
            mysql_query('SET NAMES "utf8"');
            $sql = sprintf(
                    "SELECT p1.filename AS img, l1.value AS lang1, l2.value AS lang2 FROM
                    photos p1, %s l1, %s l2 WHERE
                    l1.ID=p1.id AND l2.ID=p1.id", $strTbl1, $strTbl2);
            $result = mysql_query($sql,$con);

            $strOut = '';
            while($row = mysql_fetch_assoc($result)){
                $strOut .= sprintf('<div class="item%s">
          <img src="%s/%s" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>%s</h1>
              <p class="lead">%s</p>
            </div>
          </div>
        </div>', 
               $strOut ? '' : ' active',
               IMG_ROOT, $row['img'], $row['lang1'], $row['lang2']);
            }
            mysql_close($con);
            
            echo $strOut;
?> 
        
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="bootstrap/js/holder/holder.js"></script>
	<script src="bootstrap/js/mobile.js"></script>
  </body>
</html>
