<?php header("HTTP/1.1 404 Not Found"); ?>
<html>
<head>
<title>404 Page Not Found</title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			12px;
color:				#000;
}

#content  {
width:700px;
margin:0 auto;
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

h1 {
font-weight:		normal;
font-size:			14px;
color:				#990000;
margin: 			0 0 4px 0;
}
</style>
</head>
<body>
	<div id="content">
		<center><img src="/public/images/404.jpg" />
		<br /><br />
		<a href="/">Ir para p�gina inicial</a>
		<br /><br />
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
	</center>
</body>
</html>