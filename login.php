<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="author" content="Hassan Khan">
    <meta name="viewport" content="width=device-width">

    <title>Hassan Khan</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600italic,300,300italic,800' rel='stylesheet' type='text/css'>
    <link href="css/html5reset-1.6.1.css" rel="stylesheet" type="text/css">
    <link href="css/grid.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.less" rel="stylesheet/less" type="text/css"><!--
<link href=css/style.css rel="stylesheet" type=text/css>
-->
</head>

<body>
    <header>
        <div class="container_12 header">
            <?php include("php/header.php"); ?>
        </div>
    </header>

    <div class="clear">
        &nbsp;
    </div><br>

    <section>
        <div class="container_12 section">
            <div class="grid_9 article">
                <article>
                    <h1>Log In</h1>

                    <div class="grid_2">
                        &nbsp;
                    </div>

                    <div class="grid_5 form">
                        <form action="" method="post">
                            <div class="prefix_1 grid_3 suffix_1 nomargin" id="formContent">
                                <h4><label for="username">Username</label></h4><input id="username" name="username" type="text" placeholder="Enter username here" required="">

                                <h4><label for="password">Password</label></h4><input id="password" name="password" type="password" placeholder="Enter password here" required="">

                                <input id="formSubmit" type="submit" name="submit" value="Log In"><br>
                                <br>
                            </div>
                        </form>
                    </div>

                    <div class="grid_2">
                        &nbsp;
                    </div>
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

    <div class="clear">
        &nbsp;
    </div><br>

    <footer>
        <div class="container_12 footer">
            <?php include("php/footer.php"); ?>
        </div>
    </footer><script src="js/lib/jquery-1.7.2.min.js" type="text/javascript">
</script><script src="js/lib/less-1.3.0.min.js" type="text/javascript">
</script><script type="text/javascript">
    var _gaq=_gaq||[];
        _gaq.push(['_setAccount','UA-32000161-1']);
        _gaq.push(['_trackPageview']);
        (function(){var ga=document.createElement('script');
        ga.type='text/javascript';ga.async=true;
        ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
        var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
    </script><script type="text/javascript">
    $(function() {
            $("#formSubmit").click(function() {
                var username = $("input#username").val();
                var password = $("input#password").val();

                var dataString = 'username='+ username + '&password=' + password;
                //alert (dataString);return false;

        $.ajax({
            type: "POST",
            url: "php/bin/login.php",
            data: dataString,
            success: function() {
                window.location.href =
            }
        });
                return false;
            });
        });
    </script>
</body>
</html>
