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
	box-shadow:0px 0px 5px 2px #9B6442;
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
	box-shadow:0px 0px 5px 2px #9B6442;
}

header #menu{
	margin-left:5px;
	border-radius:10px;
	width:60%;
	min-width:600px;
	height:50px;
	background-color:#E1AA33;
	float:left;
	box-shadow:0px 0px 1px 1px #E1E1E1;
}
#login{
	margin-left:2px;
	margin-right:2px;
	height:*;
	width:36%;
	min-width:300px;
	background-color:#E1AA33;
	border-radius:10px;
	box-shadow:0px 0px 1px 1px #E1E1E1;
	padding-bottom:20px;
	position:fixed;
	margin-left:32%;
	margin-right:32%;
	margin-top:10%;
}
body{
	margin:0;
	background-color:#FED2DF;
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
	box-shadow:0px 0px 10px 0px; #565656
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
<div id="title"><p>WLECOME</p></div>
<div id="logo">
<img src="<?php echo base_url()?>img/ncuIcon.gif" height="200px" width="200px" style="float:right;margin-top:5px;margin-right:15px;"/>
</div>


</header>
<body>

<div id="login">
<h2 style="color:#FFF;text-shadow:1px 1px 1px #333333;">Login</h2>
<form name="form1" method="post" action="<?php echo base_url();?>index.php/checkLogin">
  <input type="text" class="inputlogin" name="username" id="username" placeholder="Username" required><br>
  <input type="password"  class="inputlogin" name="password" id="password" placeholder="Password" required><br>
  <input name="" type="submit" value="Login" class="submit"> <?php echo $error;?>
</form></div>

</body>
</html>
