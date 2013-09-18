<!DOCTYPE html>
<head>
<style type="text/css">
/*Start of Font*/
@font-face
{
font-family: Arial;
src: url('<?php bloginfo('template_directory');?>/fonts/arial.ttf');
}
/*End of Font*/

.topbar {
width: 100%;
height: 8px;
background-color: #2fabe3; /* color overlay */
}

.get-a-quote-by-phone {
	color: #db2d2d; /* text color + color overlay */
	font-family: "Times";
	font-size: 29px;
}

.phone {
	color: #3f3f3f; /* text color + color overlay */
	font-family: "Times";
	font-size: 34px;
}

.cl{
	clear: both;
}

.right{
	float: right !important;
}

#main-nav{
	width: 100%;
	height: 56px;
	background-image: url(data:<?php bloginfo('template_directory');?>/image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDgyOSA1NyIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGxpbmVhckdyYWRpZW50IGlkPSJoYXQwIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjUwJSIgeTE9IjEwMCUiIHgyPSI1MCUiIHkyPSItMS40MjEwODU0NzE1MjAyZS0xNCUiPgo8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMjU0ZDc3IiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSI0OCUiIHN0b3AtY29sb3I9IiMyNTRkNzciIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjU3JSIgc3RvcC1jb2xvcj0iIzMxOTljZCIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzMxOTljZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iODI5IiBoZWlnaHQ9IjU3IiBmaWxsPSJ1cmwoI2hhdDApIiAvPgo8L3N2Zz4=); /* gradient overlay */
	background-image: -moz-linear-gradient(bottom, #254d77 0%, #254d77 48.36%, #3199cd 57.06%, #3199cd 100%); /* gradient overlay */
	background-image: -o-linear-gradient(bottom, #254d77 0%, #254d77 48.36%, #3199cd 57.06%, #3199cd 100%); /* gradient overlay */
	background-image: -webkit-linear-gradient(bottom, #254d77 0%, #254d77 48.36%, #3199cd 57.06%, #3199cd 100%); /* gradient overlay */
	background-image: linear-gradient(bottom, #254d77 0%, #254d77 48.36%, #3199cd 57.06%, #3199cd 100%); /* gradient overlay */
	border-top-right-radius: 20px;
	-moz-border-top-right-radius: 20px;
	-o-border-top-right-radius: 20px;
	-webkit-border-top-right-radius: 20px;
	border-top-left-radius: 20px;
	-moz-border-top-left-radius: 20px;
	-o-border-top-left-radius: 20px;
	-webkit-border-top-left-radius: 20px;
	padding-left: 0px;
padding-right: 0px;
text-transform: uppercase;
overflow: hidden;
}

.strips {
	background-image: url(data:<?php bloginfo('template_directory');?>/image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMDEgNjAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAxMDEwMSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzYzNjM2MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwMSIgaGVpZ2h0PSI2MCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+); /* gradient overlay */
	background-image: -moz-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: -o-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: -webkit-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
}

#main-nav ul{
list-style: none;
padding: 0;
padding-top: 20px;
}

#main-nav ul li{
display: inline-block;
	color: #fff; /* text color + color overlay */
	font-family: "Arial";
	font-size: 16px;
	font-weight: bold;
	text-shadow: -1px -1px 0 rgba(23,49,74,.65); /* drop shadow */
	margin-left: -4px;
}

#main-nav ul li a.current, #main-nav ul li a:hover{
	background-image: url(data:<?php bloginfo('template_directory');?>/image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMDEgNjAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAxMDEwMSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzYzNjM2MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwMSIgaGVpZ2h0PSI2MCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+); /* gradient overlay */
	background-image: -moz-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: -o-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: -webkit-linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
	background-image: linear-gradient(bottom, #010101 0%, #636363 100%); /* gradient overlay */
}

#main-nav ul li:last-child a{
	margin-right: 0px;
	padding-left: 22px;
}

#main-nav ul li a{
	color: #fff; /* text color + color overlay */
	font-family: "Arial";
	font-size: 16px;
	font-weight: bold;
	text-shadow: -1px -1px 0 rgba(23,49,74,.65); /* drop shadow */
	text-decoration: none;
	padding-top: 31px;
	padding-bottom: 33px;
	padding-right: 25px;
padding-left: 25px;
}

a.after-nav-item {
	background-image: url('<?php bloginfo('template_directory');?>/images/after-nav-item.png'); /* gradient overlay */
	background-position: right;
	 background-repeat: repeat-y;
}

.bar-below-nav{
	width: 100%;
	height: 10px;
	background-color: #151515;
}

img.slider{
	max-width: 103% !important;
margin-left: -15px;
}

#services ul{
list-style: none;
padding: 0px;
height: 215px;
}

#services ul li{
display: inline; 
float: left;
text-align: center;
position: relative;
margin-right: 101px;
margin-right: 35px;
width: 160px;
}

#services ul li:last-child{
margin-right: 0px;
}

.shadow{
margin-left: 30px;
margin-right: 30px;
}

body {
	width: 100%;
	height: 100%;
	background-image: url('<?php bloginfo('template_directory');?>/images/body-bg.png');
	background-repeat: repeat-x;
	background-color: #f6f7f7;
}

.service-text {
	color: #2d8dc1; /* text color + color overlay */
	font-family: "Times";
	font-size: 20px;
}

#services ul li span{


margin: 0;
padding: 0;
left: 11px;
width: 100px;
}

.fix-image{
height: 140px;
}

.checklist-bg {
	width: 100%;
	height: 44px;
	border: 1px solid #4da7d3; /* stroke */
	background-image: url(data:<?php bloginfo('template_directory');?>/image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDQ4NiA0NiIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGxpbmVhckdyYWRpZW50IGlkPSJoYXQwIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjUwJSIgeTE9IjEwMCUiIHgyPSI1MCUiIHkyPSItMS40MjEwODU0NzE1MjAyZS0xNCUiPgo8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDA2ZGFiIiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMDAxYjM3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgPC9saW5lYXJHcmFkaWVudD4KCjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSI0ODYiIGhlaWdodD0iNDYiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==); /* gradient overlay */
	background-image: -moz-linear-gradient(bottom, #006dab 0%, #001b37 100%); /* gradient overlay */
	background-image: -o-linear-gradient(bottom, #006dab 0%, #001b37 100%); /* gradient overlay */
	background-image: -webkit-linear-gradient(bottom, #006dab 0%, #001b37 100%); /* gradient overlay */
	background-image: linear-gradient(bottom, #006dab 0%, #001b37 100%); /* gradient overlay */
	border-radius: 20px;
	margin-bottom: 12px;
}

.checklist-bg p {
	color: #fff; /* text color + color overlay */
	font-family: "Arial";
	font-size: 20px;
	font-weight: bold;
	margin-top: 6px; 
}

.checklist-bg img{
	margin-left: 20px;
	margin-right: 10px;
}

img.dottedline{
	margin-bottom: 15px;
	margin-top: 10px;
}

img.wemakeinsurance{
	margin-top: 20px;
}

.margintop{
	margin-top: 20px;
}

img.logo{
	margin-bottom: 15px;
}

.testimonials{
	background-image: url('<?php bloginfo('template_directory');?>/images/test-bg.png');
	background-repeat: no-repeat;
	width: 350px;
	height: 200px;
	position: relative;
	margin-top: 30px;
margin-left: 30px;
}

.testimonials p{
	color: #333; /* text color + color overlay */
	font-family: "Arial";
	font-size: 14px;
	width: 240px;
	margin-left: 49px;
	height: 140px;
	padding-top: 5px;
}

img.quote-one{
	position: absolute;
	bottom: 36px;
	right: 26px;
}

img.quote-two{
	position: absolute;
	top: 11px;
	left: 11px;
}

img.client-test-title{
	margin-top: 21px;
margin-bottom: 5px;
}

a.name {
position: absolute;
bottom: 1px;
left: 101px;
}

a.readall {
position: absolute;
bottom: -19px;
right: 16px;
}

#footer{
	width: 100%;
	background-image: url('<?php bloginfo('template_directory');?>/images/footer-bg.png');
	background-repeat: no-repeat;
	background-size: cover;
	height: 356px;
}

.littleright{
	margin-right: 5px;
}

input {
	width: 193px;
	height: 30px;
	border: 1px solid #e5e5e5; /* stroke */
	background-color: #fff; /* color overlay */
	-moz-box-shadow: inset 2px 2px 3px rgba(204,204,204,.65); /* inner shadow */
	-webkit-box-shadow: inset 2px 2px 3px rgba(204,204,204,.65); /* inner shadow */
	box-shadow: inset 2px 2px 3px rgba(204,204,204,.65); /* inner shadow */
	border-radius: 5px;
	padding-left: 5px;
	padding-right: 5px;
}

button {
	width: 91px;
	height: 26px;
	-moz-box-shadow: inset 1px 1px 0 rgba(255,255,255,.65); /* inner shadow */
	-webkit-box-shadow: inset 1px 1px 0 rgba(255,255,255,.65); /* inner shadow */
	box-shadow: inset 1px 1px 0 rgba(255,255,255,.65); /* inner shadow */
	background-image: url(data:<?php bloginfo('template_directory');?>/image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDkxIDI2IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9ImhhdDAiIGdyYWRpZW50VW5pdHM9Im9iamVjdEJvdW5kaW5nQm94IiB4MT0iNTAlIiB5MT0iMTAwJSIgeDI9IjUwJSIgeTI9Ii0xLjQyMTA4NTQ3MTUyMDJlLTE0JSI+CjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMyOTVmOGIiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzMzhmYzMiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjkxIiBoZWlnaHQ9IjI2IiBmaWxsPSJ1cmwoI2hhdDApIiAvPgo8L3N2Zz4=) !important; /* gradient overlay */
	background-image: -moz-linear-gradient(bottom, #295f8b 0%, #338fc3 100%) !important; /* gradient overlay */
	background-image: -o-linear-gradient(bottom, #295f8b 0%, #338fc3 100%) !important; /* gradient overlay */
	background-image: -webkit-linear-gradient(bottom, #295f8b 0%, #338fc3 100%) !important; /* gradient overlay */
	background-image: linear-gradient(bottom, #295f8b 0%, #338fc3 100%) !important; /* gradient overlay */
	border: none;
border-radius: 5px;
color: #fff;
font-weight: bold;
}

p.subtext{
color: #003f69;
font-family: "Times";
font-size: 16px;
text-transform: uppercase;
width: 130px;
text-align: center;
float: left;
}

form.sub-form{
	margin-top: 8px;
}

.abovefooter{
	padding-top: 68px;
}

#bottom-nav{
	color: #fff;
	font-family: "Arial";
	font-size: 14px;
	padding-top: 90px;
	text-align: center;
	font-weight: bold;
}

#bottom-nav nav ul{
list-style: none;
}

#bottom-nav nav ul li{
display: inline;
border-right: solid 2px #fff;
padding-right: 10px;
padding-left: 10px;
}

#bottom-nav nav ul li:last-child{
border-right: 0px;
}

#bottom-nav nav ul li a{
color: #fff;
}

#bottom-nav nav{
	margin-top: 30px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
</head>
<body>
<div class="topbar"></div>
<section class="container margintop">
<header id="header" class="col-md-12">
	<div id="logo" class="col-md-5">
		<img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-responsive logo">
	</div>
	<div class="col-md-5 right text-center">
		<span class="get-a-quote-by-phone cl">GET A QUOTE BY PHONE</span><br/>
		<span class="phone">(800)888-88-88</span>
	</div>
</header>
<div class="cl"></div>

<nav id="main-nav" class="col-md-12">
<div class="cl"></div>
	<?php wp_nav_menu( array('menu' => 'main_nav')); ?>
</nav>
<div class="bar-below-nav"></div>
<div class="cl"></div>