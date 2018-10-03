<html>
<head>
 
<title>Admin Panel</title>
<style>
body{
	margin: 0px;
	border: 0px;
}
#header{
	width: 100%;
	height:120px;
	background: black;
	color: white;
}
#sidebar{
	width: 300px;
	height: 400px;
	background: #27ae60;
	float: left;
}
#Data{
	 height: 700px;
	 background: #e0392b;
	 color:white;
	 font-family:Helvicta;
	 font-size: 25px;
	}
ul li{
	padding: 20px;
	border-bottom: 2px solid grey;
}
ul li:hover{
	background: #e0392b;
	color:white;
}

      body{
            background-image:url("wer.png");
            background-size:cover;
            background-position:center;
            opacity:0.6;
          }

</style>

</head>
<body>
<div id="header">
<center>
    <h1 style="color:white;font-size:60px;font type:times new roman">MANAGEMENT SYSTEM</h1>
  </center>

</div>
<div id="sidebar">
<ul>
	<li><a href="add.php" >Add Data</a></li>
	<li><a href="delete.php">Delete Data</li>
	<li><a href="view.php">View Data</li>
	

</ul>


</body>
</html>