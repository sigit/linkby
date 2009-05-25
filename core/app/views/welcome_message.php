<html>
<head>
<title>Welcome to <?= $title_page; ?></title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 16px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 font-size: 12px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
 background: url('/public/images/linkby.gif') no-repeat;
 width:192px;
 height:78px;
 text-indent:-20000px;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

form
{
	
	background:#e5e5e5;
	padding:10px;
	
}
form input {padding:5px; font-size:12px;border:1px solid #ccc;}

#logged {position:absolute; right:30px; top:20px;}
#logged p {font-size:10px; color:#666;}
#logged a {color:#ff0000;}

</style>
</head>
<body>
<div id="logged">

<?php if ($clientInfo): ?>
	
<p><strong>Hello <?= $clientInfo->name; ?></strong> [<a href="/logout/">logout</a>]</p>

<? endif; ?>

</div>
<h1>Welcome to <?= $title_page; ?></h1>
<p>linkBy Panel is a web application based on Codeigniter framework. The application helps web developers to manage websites throught a administrator panel already made by linkBy. You just need to create modules for your application or chose between a lot of default modules already done. This modules follow basics patterns witch can be learned easialy.</p>

<p>Companies whose main focus is the devel systems and websites, are the potential customers in the linkBy panel.</p>

<p>Do you want to help us? Give us your idea. mailto; contact[@]linkby.name.</p>


<?php if (!$clientInfo): ?>	
<form action="/login/" method="post">

	<label for="login">Login</label>
	<input type="text" id="login" name="login" />
	
	<label for="password">Password</label>
	<input type="password" id="password" name="password" />
	
	<input type="submit" value="Do it!" />

</form>
<?php endif; ?>



<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>
