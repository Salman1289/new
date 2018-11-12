<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wedding Countdown</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>

<body>
	<style type="text/css">
	.main-div{
		background: url(images/intro-bg.png);
		background-repeat: no-repeat;
				width: 530px;
				height: 485px;
		/*margin: 0 auto;*/
		    padding-top: 40px;
    padding-bottom: 40px;

		/*background-position: 0 50%;*/
	}
		.heading-logo h1{
			text-transform: uppercase;
			color: #033649;
			padding-left: 10%;
			font-family: 'Lato', sans-serif;
			    font-weight: 800;
			        letter-spacing: 2px;
			        font-size: 38px;
		}
		.heading-logo h1 img{
			position: relative;
			position: relative;
    left: 8px;
		}
		.inner-texts {
			padding-left: 10%;
			color: #033649;
			padding-left: 10%;
			font-family: 'Lato', sans-serif;
			padding-top: 45px;
		}
		.inner-texts h3{
			margin-bottom: 0px;
			    font-size: 25px;
		}
		.inner-texts p{
			margin-top: 0px;
			font-size: 17px;
			font-weight: bold;
		}
		.inner-texts p:nth-of-type(2){
			padding-top: 45px;
		}
		.button-secure{
			display: block;width: 100%;
			padding-top: 25px;
			padding-bottom: 44px;
		}
		.button-secure .button-main a{
			       background: #033649;
    color: #fff;
    padding: 12px 50px 12px 50px;
    text-decoration: none;
        border-radius: 2px;
		}
		.button-secure .button-main{
			width: 50%;
			float: left;
		}
		.button-secure .secure-main{
			float: right;
    width: 50%;
    margin-top: -25px;
		}
		.button-secure .secure-main img{
			    float: right;
    margin-right: 30px;
		}
	</style>

<div class="main-div">
	<div class="heading-logo">
		<h1>Welcome To <img src="images/intro-logo.png">
</h1>	</div>
	<div class="inner-texts">
		<h3>Wedding Countdown</h3>
		<p>Create your own wedding countdown</p>
		<p>Under 1 Minute! No registration needed!<br>
			Already <span class="count">38,957</span> couples tried the app
		</p>
		<div class="button-secure">
			<div class="button-main"><a href="main-form.php"> Try Now</a></div>
			<div class="secure-main"><img src="images/intro-icon-text.png"  /> </div>
		</div>
	</div>
</div>

</body>

</html>