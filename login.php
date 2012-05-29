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
<link href=css/style.less rel=stylesheet/less type=text/css>
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
		        	<h1>Log In</h1>
		        	<div class="grid_2">&nbsp;</div>
		        	<div class="grid_5 form">
		        		<form action="" method="post">
		        		<div class="prefix_1 grid_3 suffix_1 nomargin" id="formContent">
							<label for="fullname"><h2>Full Name</h2></label>
							<input id="fullname" name="fullname" type="text" placeholder="Enter full name here" required />
							<label for="email"><h2>Email Address</h2></label>
							<input id="email" name="email" type="email" placeholder="Enter email address here" required />
							<label for="company"><h2>Company Name</h2></label>
							<input id="company" name="company" type="text" placeholder="Enter company name here" />
							<label for="location"><h2>Where are you based?</h2></label>
							<input id="location" name="location" type="text" placeholder="Enter location here" required />
							<label for="details"><h2>Please supply more details relating to your query</h2></label>
							<textarea id="details" name="details" required wrap="soft" /></textarea>
							<input id="formSubmit" type="submit" name="submit" value="Send Email!" />
							<br /><br />
						</div>
						</form>
		        	</div>
		        	<div class="grid_2">&nbsp;</div>
		        </article>
	        </div>
	        <div class="grid_3 aside">
		        <aside>
		        	<h1>Uuummmm, this is a tasty burger!</h1>
			    	<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
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
	<script type="text/javascript">
		$(function() {
			$("#formSubmit").click(function() {
				var fullname = $("input#fullname").val();
				var email = $("input#email").val();
				var company = $("input#company").val();
				var location = $("input#location").val();
				var details = $("textarea#details").val();

				var dataString = 'fullname='+ fullname + '&email=' + email + '&company=' + company + '&location=' + location + '&details=' + details;
				//alert (dataString);return false;

		$.ajax({
			type: "POST",
			url: "php/bin/contact.php",
			data: dataString,
			success: function() {
				$('#contact_form').html("<div class=\"prefix_1 grid_3 suffix_1 nomargin\" id=\"formContent\"></div>");
				$('#formContent').html("<h2>Email Sent</h2>").append("<p>I'll be in touch soon!</p><br />").hide()
				.fadeIn(1500, function() {
				});
			}
		});
				return false;
			});
		});
	</script>
</body>
</html>