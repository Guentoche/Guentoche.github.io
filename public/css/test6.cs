/*
Global
*/ 
.heading-site{
	text-align: center;
	font-family: 'Montserrat', sans-serif;
}
.COLORED{
	height:400px;
	width:100%;
	background-color: #3498db;
	padding: 30px;
	text-align: center;
}
/*
HEADER
*/
.header{
	top:0;
	width: 100%
	margin-left:0;
	margin-right:0;
	height:50px;
	line-height: 50px;
	background-color:#000000;
	z-index: 999;
}

.header .header-logo{
	color:#ffffff;
	font-family: 'Montserrat', sans-serif;
	float: left;
	margin-left:30px;
}
.header .header-menu{
	float:right;v
	margin-right: 30px;
}

.header .header-menu a{
	margin-right: 15px;
	color: #ffffff;
}

.header .header-menu a:hover{
	color:#3498db;
}
/*
BANNER
*/
.banner{
	margin-top: -25px;
	}
.banner .banner-image{
	width: 100%;
	height:400px;
	position:relative;
	top:0;
	left:0;
	margin-bottom: 10px;

}
.banner .banner-content{
	position:absolute;
	width:100%;
	text-align:center;
	top:25%;
}

.banner .banner-content h1 {
	color:#ffffff;
}
.banner .banner-content h2 {
	color:#ffffff;
}
.banner .banner-content button{
	margin-top: 50px;
}
/* 
ABOUT
*/
.about .about-single-element i{
	font-size: 30px;
	text-align: center;
}
.about .about-single-element h5{
	text-align: center;
}
.about .about-single-element{
	text-align: center;
}
.about .about-single-element p{
	text-align:left;
	margin-top: 20px;
}
/*
Portfolio
*/
#portfolio-section {
	background-color: #ffffff;
	padding-top: 50px;
	padding-bottom: 20px;
}
#project-gallery {
	padding: 50px 40px 0 40px;
	margin: 0;
}
.thumbnail-frame:hover .project-description {
	visibility: visible;
	opacity: 1;
}
.project-description {
	margin: 5px 0 5px 5px;
	padding: 10px;
	position: absolute;
	top: 0px;
	left: 0;
	height: 360px;
	width: calc(100% - 10px);
	background-color: rgba(0,0,0,0.8);
	visibility: hidden;
	opacity: 0;
	-webkit-transition: visibility 0s, opacity 0.2s linear;
	-o-transition: visibility 0s, opacity 0.2s linear;
	transition: visibility 0s, opacity 0.2s linear;
}
.project-description-title{
	color:#ffffff;
}
.thumbnail {
	margin-bottom: 30px;
}
.thumbnail-frame {
	position: relative;
	border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    padding: 5px;
    -webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
            box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
}
.thumbnail-img {
	height: 360px;
	width: 100%;
	-o-object-fit: cover;
	   object-fit: cover;
	-o-object-position: 50%;
	   object-position: 50%;
}
.visit-button {
	padding: 10px;
	background-color: #f05f40;
	border-radius: 3px;
	color: #fff;
}
.visit-button:hover {
	text-decoration: none;
	color: #fff;
}
.project-description-title {
	font-size: 22px;
}
.project-description-text {
	font-style: italic;
	color: #ddd;
}
.category-separator {
	position: relative;
	font-size: 15px;
	/*margin-bottom: 0;*/
}
.category-separator:before {
	content: " ";
    position: absolute;
    border-bottom: 1px solid #ddd;
    width: 25%;   
    height: 13px;
    display: inline;
    margin-left: calc(-25% - 8px);
}
.category-separator:after {
	content: " ";
    position: absolute;
    border-bottom: 1px solid #ddd;
    width: 25%;   
    height: 13px;
    display: inline;
    margin-left: 8px;
}
.tags-list {
	line-height: 35px;
}
.tag {
	padding: 5px;
	background-color: #f05f40;
	border-radius: 5px;
}

/*
Formations
*/
#formations-section {
	background-color: #ddd;
	padding-top: 50px;
}
.section-title {
	font-size: 40px;
	display: inline-block;
}
.light-ribbon {
	display: inline-block;
	border: 12px solid #fff;
	border-radius: 2px;
 	width: 40px;
}
.dark-ribbon {
	display: inline-block;
	border: 12px solid #333;
	border-radius: 2px;
 	width: 40px;
}
.ribbon-left {
	border-right: 0;
	border-left: 12px solid transparent;  
	margin-right: 13px;
}
.ribbon-right {
	border-left: 0;  
	border-right: 12px solid transparent;
 	margin-left: 13px;
}

.timeline {
	list-style: none;
	position: relative;
	min-width: 100%;
	margin-top: 50px;
	margin-bottom: 100px;
	padding: 0;
}
.timeline:before {
	top: 0;
  	bottom: 0;
  	position: absolute;
  	content: " ";
  	width: 10px;
  	background-color: #333;
  	left: 50%;
  	margin-left: -10px;
  	-webkit-transform: skew(0deg, -30deg);
	-ms-transform: skew(0deg, -30deg);
	transform: skew(0deg, -30deg);
	-webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
	        box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
}
.timeline:after {
	top: 0;
  	bottom: 0;
  	position: absolute;
  	content: " ";
  	width: 10px;
  	background-color: #333;
  	left: 50%;
  	margin-left: 0px;
	-webkit-transform: skew(0deg, 30deg);
    -ms-transform: skew(0deg, 30deg);
    transform: skew(0deg, 30deg);
    -webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
            box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
}
.timeline li:before, .timeline li:after {
  content: " ";
  display: table;
}
.timeline li:after {
  clear: both;
}
.timeline li:before, .timeline li:after {
  content: " ";
  display: table;
}
.timeline li {
  	margin-bottom: 25px;
  	position: relative;
  	padding-left: 50px;
}
.timeline li .timeline-panel {
  	width: calc(50% - 60px);
  	float: left;
 	background: #fff;
  	border-top: 5px solid #f05f40;
  	padding: 15px;
  	position: relative;
  	border-radius: 2px;
   	-webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
   	        box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
}
.timeline li .timeline-panel p {
	margin-bottom: 3px;
}
.timeline li .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline li .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline li.timeline-inverted {
	padding-left: 0;
	padding-right: 50px;
}
.timeline li.timeline-inverted .timeline-panel {
  float: right;
}
.timeline li.timeline-inverted .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline li.timeline-inverted .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline li .tl-circ {
	position: absolute;
	top: 26px;
	left: 50%;
	text-align: center;
	background: #333;
	color: #fff;
	width: 35px;
	height: 35px;
	line-height: 35px;
	margin-left: -16px;
	border: 3px solid #fff;
 	border-top-right-radius: 50%;
	border-top-left-radius: 50%;
	border-bottom-right-radius: 50%;
	border-bottom-left-radius: 50%;
	z-index: 99;
	-webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
	        box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
}
.timeline li .tl-circ-current {
	border-color: #f05f40;
}

/*
Footer
*/

.footer .footer-information {
	margin-top: 20px;
	text-align: center;
}

.footer .footer-information ul{
	padding:0;
}

.footer .footer-information ul li{
	display: inline-block;
	list-style-type: none;
}
.footer .footer-information i{
	font-size: 40px;
	margin:20px;
}
/*.footer #insta {
	color:pink;
}
.footer #github {
	color:black;
}*/
.fa-linkedin {
  background: white;
  color: #007bb5;
 }
.fa-github {
    background: white;
    color: black;
}
.fa-instagram {
	font-size: 80px;
  color: transparent;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background-clip: text;
  -webkit-background-clip: text;
}