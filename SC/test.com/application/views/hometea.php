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
header #login{
	margin-left:2px;
	margin-right:2px;
	height:50px;
	width:18%;
	min-width:200px;
	background-color:#E1AA33;
	border-radius:10px;
	box-shadow:0px 0px 1px 1px #E1E1E1;
	float:left;
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

   </style>
</head>
<header>
<div id="title"><p>WLECOME</p></div>
<div id="logo">
<img src="<?php echo base_url()?>img/ncuIcon.gif" height="200px" width="200px" style="float:right;margin-top:5px;margin-right:15px;"/>
</div>
<div id="login">สวัสดีคุณ : <?php echo $login['name'].'  '.$login['lastname'];?><br>
<a href='<?php echo base_url()?>index.php/home/logout'>Logout</a>
</div>
<div id="menu">
<ul>
   <li><a href='#'>หน้าแรก</a></li>
   <li><a href='#'>แก้ไขข้อมูลส่วนตัว</a>
    <ul>
    </ul>
   </li>
   <li><a href='<?php echo base_url()?>index.php/tea/show'>ดูข้อมูลนักศึกษา</a></li>
   <li><a href='#'>ทำรายการนัดหมาย</a></li>
   <li><a href='#'>จัดการเวลานัดหมาย</a></li>
    <li><a href='#'>รายงาน</a></li>
</ul>
</div>
</header>
<body>
<div class="content">
</div>
</body>
</html>
