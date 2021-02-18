<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dilfina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" integrity="sha512-YTL2qFiv2wZNnC764l1DD5zN6lYxDzJ89Ss6zj6YoYIzr6+zwjdVKM1sUR+971X3h7qWCa9cPUBXyYqhOqWWLQ==" crossorigin="anonymous" />

<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">


    <style>
    	html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
	scroll-behavior:smooth;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
html, body {
	height:100%;
	color:#ffffff;
	font-family: 'PT Sans Narrow', sans-serif;
	line-height: 1;
	background-color:#000000;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
#particles-js{
	position:fixed;
	width:100%;
	height:100%;
	z-index:10;

}

header{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	text-align:center;
	padding:25px 0;
	z-index:99;

}

header ul li a{
	font-weight:550;
	font-size:24px;
	color:#f00;
	text-transform:uppercase;
	text-decoration:none;
	margin:0 40px;
	visibility:hidden;

}
.fixed{
	position:fixed;
	top:0;
	left:0;
	background-color:#000000;
	z-index:999;
}
section{
	padding:60px 0;
	height:100%;
	position:relative;
}

.home{
	color:#ffffff;
	padding:0;
	text-align:center;
	display:flex;
	justify-content:center;

	align-items:flex-end;
	background:url("https://thumbs.dreamstime.com/b/gorgeous-young-model-woman-perfect-blonde-hair-looking-camera-posing-city-wearing-black-evening-dress-100623471.jpg") no-repeat;
	background-size:cover;
	background-position:center;
	background-color:#34495e;
	background-attachment:fixed;
	z-index:9;

}
.home h1{
	font-size:68px;
	text-transform:uppercase;
	color:#f00;
	text-shadow:0 15px 20px #f00;
	margin-bottom:0;
	visibility:hidden;
}

.home h5{
	background:#000;
	font-size:18px;
	text-align:center;
	padding:10px 20px;
	margin:10px 0 50px;
	display:inline-block;
	letter-spacing:2px;
	border-radius:2px;
	visibility:hidden;
}

.section-title{
	text-align:center;

}
.section-title h2{
	color:#f00;
	text-shadow:#f00;
	display:inline-block;
	font-size:28px;
	border-bottom:1px solid;
	text-transform:uppercase;
	padding:0 0 10px;
}

.about-info{
	width:60%;
	margin:0 auto;
	padding:50px 0;
	text-align:center;
	z-index:99;

}
.about-info p{
	line-height:28px;
	font-size:18px;
}

.about-info .downloadbtn{
	display:inline-block;
	padding:15px 35px;
	background-color:#ffffff10;
	border:1px solid #ffffff30;
	border-radius:50px;
	color:#ffffff;
	font-size:18px;
	text-transform:uppercase;
	text-decoration:none;
	margin-top:35px;
	position:relative;
	z-index:999;
}

.timeline{
	margin-top:50px;
	display:flex;

}
.timeline .col{
	margin:5px;
	padding:25px 5px;
	border:1px solid #ffffff30;
	float:left;
}
.timeline h6{
	margin:15px 0 0;
	font-size:14px;
	line-height:24px;

}

.service{
	width:60%;
	margin:0 auto;
	padding:50px 0;
	text-align:center;
	z-index:99;
	margin-top:90px;
}

.service .service-info{
	display:flex;
	flex-wrap:wrap;
	margin:50px 0;
}
.service .col{
	width:40%;
	margin:25px 30px;
	text-align:center;

} 
.service .col img{
	max-width:48px;

}
.service .col h3{
	margin-top:10px;
	font-size:28px;
	margin-bottom:15px;
}
.service .col p{
	line-height:28px;

}

.contact{
	width:60%;
	margin:0 auto;
	padding:50px 0;
	z-index:99;
}
.contact-info{
	display:flex;
	justify-content:center;
	margin:50px 0;
}

.contact-info .textField{
	width:100%;
	height:50px;
	border:1px solid #fff;
	box-sizing:border-box;
	background-color:transparent;
	padding:15px 15px;
	margin-bottom:15px;
	font-family: 'PT Sans Narrow', sans-serif;
	color:#f00;
	font-size:16px;
}
.contact-info .messageField{
	height:200px;
}

.contact-info .submitButton{
	background-color:#f00;
	color:#000;
	height:50px;
	font-weight:600;
	font-size:16px;
	cursor:pointer;
	text-transform:uppercase;

}
@media (max-width:760px){

}


</style>
</head>
<body>
	<div id="particles-js"></div>
	<header>
		<ul>
			<li>
			<a class="wow fadeInDown" data-wow-duration=".5s" data-wow-delay="1s" href="#home">Home</a>
			<a class="wow fadeInDown" data-wow-duration=".5s" data-wow-delay="1.1s" href="#about">About</a>
			<a class="wow fadeInDown" data-wow-duration=".5s" data-wow-delay="1.2s" href="#service">Services</a>
			<a class="wow fadeInDown" data-wow-duration=".5s" data-wow-delay="1.3s" href="#contact">Contact</a>
		</li>
		</ul>
	</header>


	<section id="home" class="home wow fadeIn" data-wow-duration="2s" data-wow-delay="1.2s">
		<div class="name">
			<h1 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="1.9s">Kazhiyeva Dilfina</h1>
			<h5 class="wow fadeInDown" data-wow-duration="4s" data-wow-delay="1.4s">Data Scientist</h5>
		</div>
	</section>

	<section id="about" class="about">
		<div class="section-title">
			<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">About</h2>
		</div>
		<div class="about-info">
			<p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.</p>
			<p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros.</p>
			<a href="#" class="downloadbtn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s" style="color:#f00">Download Resume</a>

			<div class="timeline">
				<div class="col wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">
					<span style="color:#f00">2019 - 2023</span>
					<h6>orem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
				</div>
				<div class="col wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.3s">
					<span style="color:#f00">2023 - 2025</span>
					<h6>orem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
				</div>
				<div class="col wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.6s">
					<span style="color:#f00">2025 - 2027</span>
					<h6>orem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
				</div>
				<div class="col wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.8s">
					<span style="color:#f00">2027 - 2090</span>
					<h6>orem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
				</div>
			</div>
		</div>
	</section>


	<section id="service" class="service">
		<div class="section-title">
			<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Services</h2>
		</div>
		<div class="service-info">
			<div class="col">
				<img class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s" src="https://image.flaticon.com/icons/png/512/2083/2083213.png">
				<h3 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="color:#f00">Machine Learning</h3>
				<p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</p>
			</div>

			<div class="col">
				<img class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s" src="https://image.flaticon.com/icons/png/512/2083/2083213.png">
				<h3 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="color:#f00">Artificial Intelligence</h3>
				<p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</p>
			</div>
			<div class="col">
				<img class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s" src="https://i.pinimg.com/originals/ca/a5/3d/caa53dc27ac3166d8b0be717886346c0.png">
				<h3 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="color:#f00">Data Visualization</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</p>
			</div>
			<div class="col">
				<img class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s" src="a5.png">
				<h3 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="color:#f00">Statistics</h3>
				<p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et.</p>
			</div>
		</div>
	</section>

	<section id="contact" class="contact">
		<div class="section-title">
			<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Contact</h2>
		</div>
		<div class="contact-info">
			<form>
				<input type="text" class="textField wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".9s"
                placeholder="Full Name" required="">
				<input type="text" class="textField wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s"
                placeholder="Email Address" required="">
				<textarea class="textField messageField wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s"
                placeholder="Your Message"></textarea>
				<input type="submit" class="textField submitButton wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.8s"
                value="Send Message">
			</form>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" integrity="sha512-Kef5sc7gfTacR7TZKelcrRs15ipf7+t+n7Zh6mKNJbmW+/RRdCW9nwfLn4YX0s2nO6Kv5Y2ChqgIakaC6PW09A==" crossorigin="anonymous"></script>
	<script src="<?php echo url('/'); ?>/js/particle-script.js"></script>
	<script type="text/javascript">
		new WOW().init();


		$(window).scroll(function(){
			var sticky = $("header");
			if($(window).scrollTop() >=100){
				sticky.addClass("fixed");
			}else{
				sticky.removeClass("fixed");
			}
		});
	</script>
</body>