<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wedding Countdown</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>

<body>
	<style type="text/css">
	.form-main-div{
		background: url(images/countdown-details-bg.png);
		background-repeat: no-repeat;
				width: 485px;
				height: 522px;
				padding: 20px;
		/*margin: 0 auto;*/
		    /*padding-top: 40px;
    padding-bottom: 40px;*/

		/*background-position: 0 50%;*/
	}
		.form-main-div .heading-logo{
			max-width: 100%;
			background-color: #033649;
			padding-top: 10px;
    padding-left: 7%;
    padding-bottom: 7px;
		}
		.form-main-div  .heading-logo h1 img{
			position: relative;
			position: relative;
    left: 8px;
		}
		.form-main-div .inner-texts {
			padding-left: 20px;
			color: #033649;
			/*padding-left: 10%;*/
			font-family: 'Lato', sans-serif;
			/*padding-top: 15px;*/
		}
		.form-main-div  .inner-texts h3{
			    text-transform: uppercase;
			        margin-bottom: 7px;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: 800;
		}
		.form-main-div .wedding-form ul{
			padding: 0px;
		}
     .form-main-div .wedding-form ul li{
     	display: inline-block;
     	width: 14%;
     	margin-right: 25px;
     }
     .form-main-div .wedding-form ul li input{
         max-width: 100%;
    border: none;
    background: transparent;
    border-bottom: 1px solid #1d5b71;
        font-size: 15px;
            padding: 6px 0px;
            color: #1d5b71;
            font-weight: bold;
                outline: none;
}
.form-main-div .wedding-form .location input{
         max-width: 100%;
    border: none;
    background: transparent;
    border-bottom: 1px solid #1d5b71;
        font-size: 15px;
            padding: 6px 0px;
            color: #1d5b71;
            font-weight: bold;
                outline: none;
                width: 96%;
}
.form-main-div .wedding-form ul li input::placeholder {
  color: #1d5b71;
 
}
.form-main-div .wedding-form input::placeholder {
  color: #1d5b71;
 
}

.form-main-div  .inner-texts p{
			margin-top: 0px;
			font-size: 17px;
			font-weight: bold;
		}
		.inner-texts p:nth-of-type(2){
			padding-top: 5px;
		}
		.form-main-div .picture-buttons {
    padding-top: 12px;
    width: 100%;
    display: inline-block;
}
.form-main-div .picture-buttons div{
	width: 46%;
	float: left;
}
.form-main-div .picture-buttons div span{
	    font-size: 16px;
    font-weight: 600;
    margin-bottom: 22px;
    display: inline-block;
}
.form-main-div .location{
	padding-top: 2px;
}
.form-main-div .location p{
	margin-bottom: 10px;
}
.form-main-div .picture-buttons div label{
	    padding: 10px 33px;
    border: 1px solid #1d5b71;
    border-radius: 2px;
    color: #1d5b71;
}
.form-main-div .picture-buttons div label:hover{
	cursor: pointer;
}
.form-main-div .wedding-checkmark{
	    float: left;
    margin-top: 20px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0px;
    /*line-height: 20px;*/
}
.form-main-div .wedding-submit{
	    display: inherit;
    float: left;
    padding-top: 30px;
}
.form-main-div .wedding-submit button{
	       padding: 16px 50px;
	    border-radius: 2px;
	    border:none;
	    color: #ff9800;
	    background-color: #1d5b71;
	    cursor: pointer;
	        margin-right: 15px;
    font-size: 14px;
    text-transform: uppercase;
}

	</style>

<div class="form-main-div">
	<div class="heading-logo">
		<img src="images/countdown-details-logo.png">	</div>
	<div class="inner-texts">
		<h3>Create your facebook wedding counterdown:</h3>
		<p>Enter Your wedding Date and Time:</p>
		<form class="wedding-form" method="post">
		<ul>
			<li><input type="text" name="wedding-month" placeholder="Month"></li>
			<li><input type="text" name="wedding-date" placeholder="Date"></li>
			<li><input type="text" name="wedding-year" placeholder="Year"></li>
			<li><input type="text" name="wedding-hour" placeholder="Hour"></li>
			<li><input type="text" name="wedding-min" placeholder="Min"></li>
		</ul>
		<div class="location">
		<p>Add Wedding Location</p>
		<input type="text" name="wedding-location" placeholder="Location">
	</div>
	<div class="picture-buttons">
		<div><span>Proposal Picture:</span><br><label class="custom-file-upload">
    <input type="file" accept="image/*" name="proposal-pic" style="display: none;" />Browse</label></div>
		<div><span>Ring Picture:</span><br><label class="custom-file-upload">
    <input type="file" accept="image/*" name="ring-pic" style="display: none;" />Browse</label></div>

	<!-- 	<div class=""><span>Proposal Picture:</span><br><input type="file" name="ring-pic" accept="image/*"></div> -->
	</div>
	<div class="wedding-checkmark">
		<input type="checkbox" checked="checked">
		<span>Add my wedding clock countdown to DiamondBLVSD's Upcomming Weddings</span>
	</div>
	<div class="wedding-submit">
		<button> Preview</button>
		<button> Submit</button>
	</div>
		<!-- <div class="button-secure">
			<div class="button-main"><a href=""> Try Now</a></div>
			<div class="secure-main"><img src="images/intro-icon-text.png"  /> </div>
		</div> -->
		</form>
	</div> 
</div>

</body>

</html>