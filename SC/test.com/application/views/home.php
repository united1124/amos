<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
   <script src="<?php echo base_url()?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>script.js"></script>
   <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
      <style>
	  *{
		  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	  }
header{
	margin-top:0px;
	width:100%;
	background-color:#9B6442;
	height:130px;
	min-width:1100px;
	box-shadow:0px 0px 5px 2px #333333;
}
header #title{
	width:80%;
	min-width:800px;
	height:70px;
	background-color:#9B6442;
	color:#FFF;
	font-size:50px;
	float:left;
}
header #title p{
	margin-top:0px;
	margin-left:30px;
	text-shadow:0px 2px 2px #646464;
	float:left;
}
header #logo{
	width:220px;
	min-width:220px;
	height:205px;
	background-color:#9B6442;
	float:right;
	border-bottom-left-radius:100px;
	box-shadow:0px 0px 5px 2px #333333;
}

header #menu{
	margin-left:5px;
	border-radius:10px;
	width:60%;
	min-width:600px;
	height:50px;
	background-color:#E1AA33;
	float:left;
	box-shadow:0px 0px 5px 2px #333333;
}
#login{
	margin-left:2px;
	margin-right:2px;
	height:*;
	width:36%;
	min-width:300px;
	
background: rgb(255,255,178); /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,178,1) 0%, rgba(255,255,127,1) 39%, rgba(255,255,76,1) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,178,1)), color-stop(39%,rgba(255,255,127,1)), color-stop(100%,rgba(255,255,76,1))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,178,1) 0%,rgba(255,255,127,1) 39%,rgba(255,255,76,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,178,1) 0%,rgba(255,255,127,1) 39%,rgba(255,255,76,1) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,178,1) 0%,rgba(255,255,127,1) 39%,rgba(255,255,76,1) 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  rgba(255,255,178,1) 0%,rgba(255,255,127,1) 39%,rgba(255,255,76,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffb2', endColorstr='#ffff4c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

	
	box-shadow:0px 0px 5px 2px #333333;
	padding-bottom:20px;
	position:fixed;
	margin-left:32%;
	margin-right:32%;
	margin-top:10%;
}
body{
	margin:0;
	
	background: rgb(255,102,255); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(255,102,255,1) 1%, rgba(255,204,255,1) 50%, rgba(255,102,255,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right top, color-stop(1%,rgba(255,102,255,1)), color-stop(50%,rgba(255,204,255,1)), color-stop(100%,rgba(255,102,255,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(left,  rgba(255,102,255,1) 1%,rgba(255,204,255,1) 50%,rgba(255,102,255,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(left,  rgba(255,102,255,1) 1%,rgba(255,204,255,1) 50%,rgba(255,102,255,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(left,  rgba(255,102,255,1) 1%,rgba(255,204,255,1) 50%,rgba(255,102,255,1) 100%); /* IE10+ */
background: linear-gradient(to right,  rgba(255,102,255,1) 1%,rgba(255,204,255,1) 50%,rgba(255,102,255,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff66ff', endColorstr='#ff66ff',GradientType=1 ); /* IE6-9 */

	text-align:center;
}
.content{
	margin-top:6px;
	width:80%;
	margin-left:10%;
	margin-right:10%;
	min-width:880px;
	height:800px;
	background-color:#FFFFFF;
	box-shadow:0px 0px 5px 2px #333333;
}

.active a{color:#FFF}
.inputlogin{
	margin-top:10px;
	border-radius:5px;
	width:160px;
	height:25px;
}
.submit{
	width:80px;
	height:25px;
	margin-top:5px;
	border-radius:5px;
}
#title{
	margin-top:20px;
}
   </style>
</head>
<header>
<div id="title" style="color:#FFF; text-shadow:1px 1px 1px #000;"><p>WLECOME</p></div>
<div id="logo">
<img src="<?php echo base_url()?>img/ncuIcon.gif" height="200px" width="200px" style="float:right;margin-top:5px;margin-right:15px;"/>
</div>


</header>
<body>

<div id="login">
<h2 style="color:#000;text-shadow:1px 1px 1px #FFF;">Login</h2>
<form name="form1" method="post" action="<?php echo base_url();?>index.php/checkLogin">
  <input type="text" class="inputlogin" name="username" id="username" placeholder="Username" required><br>
  <input type="password"  class="inputlogin" name="password" id="password" placeholder="Password" required><br>
  <input name="" type="submit" value="Login" class="submit"><br> <?php echo $error;?>
</form></div>

</body>
</html>
