<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="author" content="Hassan Khan">
<meta name="viewport" content="width=device-width">

<title>Hassan Khan</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600italic,300,300italic,800' rel='stylesheet' type='text/css'>
<link href=css/html5reset-1.6.1.css rel=stylesheet type=text/css>
<link href=css/grid.min.css rel=stylesheet type=text/css>

<link href=css/beta.less rel=stylesheet/less type=text/css>
<!--
<link href=css/style.css rel="stylesheet" type=text/css>
-->
</head>
<body>
	<header>
		<div class="container_12 header">
			<?php include("php/header.php"); ?>
		</div>
	</header>
	<div class="clear">&nbsp;</div>
	<br />
	<section>
		<div class="container_12 section">
			<div class="grid_9 article">
		        <article>
		        	<h1>Error</h1>
			       	<p><?php $errMsg_arr = $_SESSION['ERRMSG_ARR']; print($errMsg_arr[0]); ?></p>
		        </article>
	        </div>
	        <div class="grid_3 aside">
		        <aside>
		        	<h1>How did I end up here?!</h1>
			    	<p>You've obviously tried to be naughty and access some part of the website that you're not allowed to. Or some general error has actually occurred for once and the text in the main content pane should shed more light on the situation.</p>
		        </aside>
	        </div>
        </div>
    </section>
    <div class="clear">&nbsp;</div>
    <br />
		<footer>
			<div class="container_12 footer">
				<?php include("php/footer.php"); ?>
			</div>
		</footer>
	</div>
	<script src="js/lib/jquery-1.7.2.min.js"></script>
	<script src="js/lib/less-1.3.0.min.js"></script>
	<script type="text/javascript">
		var _gaq=_gaq||[];
		_gaq.push(['_setAccount','UA-32000161-1']);
		_gaq.push(['_trackPageview']);
		(function(){var ga=document.createElement('script');
		ga.type='text/javascript';ga.async=true;
		ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
		var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
	</script>
</body>
</html>