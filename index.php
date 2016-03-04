<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Dr. Quiroz al Congreso</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    
    <style type="text/css">
    body {
	background-color: #FFF;
}
    </style>
<script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript">
		$(function(){
			$('.mp-slider').cycle({
				pager: '#mp-pags',
				timeout:7000,
				pagerAnchorBuilder: pagerFactory
				});
			function pagerFactory(index, slide) {
				var titles = []
				titles[0] = $("#mp-pags-cont li:eq(0)").text()
				titles[1] = $("#mp-pags-cont li:eq(1)").text()
				titles[2] = $("#mp-pags-cont li:eq(2)").text()
			return '<li><a href="#">'+(titles[index])+'</a></li>';
			}; 
		})
	</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body id="page1">
<!-- Header -->
<header>
    <div class="inner">
        <h1 class="logo"><a href="index.php">Dr. Quiroz al Congreso!!</a></h1>
	</div>
    <nav>
        <ul class="sf-menu">
            <li class=""><a href="index.php">Principal</a></li>
            <li><a href="pages/biografia.html">biografia</a></li>
            <li><a href="laborsocial.html">Labor social</a></li>
            <li><a href="fotosvideos.html">Fotos/videos</a></li>
            <li><a href="contactos.html">contactos</a></li>

        </ul>
        <div class="clear"></div>
    </nav>
    <div class="slider-container">
        <div class="mp-slider">
            <div><img src="images/slide-3.png" alt=""><a href="#">leer mas</a></div>
            <div><img src="images/slide-2.png" alt=""><a href="#">leer mas</a></div>
            <div><img src="images/slide-1.png" alt=""><a href="#">leer mas</a></div>
        </div>
    </div>
</header>



<!-- Content -->
<section id="content"><div class="ic"></div>
    <div class="container_24">
    	<div class="grid_24 content-border">
            <div class="top-content-box">
                <ul id="mp-pags-cont">
                    <li><a href="#">labor social</a></li>
                    <li><a href="#">excelente profesional</a></li>
                    <li><a href="#">Buen candidato</a></li>
                </ul>
                <ul id="mp-pags"></ul>
            </div>

            <div class="top-row">
            	<h1 class="aligncenter">Tu mejor opción al Congreso...!!!.</h1>
                <div class="wrapper">
                	<div class="grid_5 prefix_1 alpha">
                    	<div class="wrapper">
                        	<span class="dropcap color-1">A.</span>
                            <div class="extra-wrap">
                            	<strong class="str-1 color-1">
                                	<br>
                                	texto1
                                </strong>
                                <a href="#" class="link">leer mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid_5">
                    	<span class="dropcap color-2">B.</span>
                            <div class="extra-wrap">
                            <strong class="str-1 color-2">
                                texto2</strong>
                            <a href="#" class="link">leer mas</a>
                        </div>
                    </div>
                    <div class="grid_5">
                    	<span class="dropcap color-3">C.</span>
                        <div class="extra-wrap">
                            <strong class="str-1 color-3">texto 3</strong>
                            <a href="#" class="link">leer mas</a>
                        </div>
                    </div>
                    <div class="grid_7 suffix_1 omega">
                    	<span class="dropcap color-4">D.</span>
                        <div class="extra-wrap">
                            <strong class="str-1 color-4">
                                texto4.
                            </strong>
                            <a href="#" class="link">leer mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper indent-top">
            	<article class="grid_15 suffix_1 prefix_1 alpha">
                	<h2>Alianza para el Progreso del Perú!</h2>
                    <p>TEXTO. 
                    </p>
                    <div class="wrapper">
                    	<div class="grid_5 alpha">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img1.jpg" alt="">
                            </figure>
                            <div class="alignright author">
                           	Presidente</div>
                        </div>
                        <div class="grid_5">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img2.jpg" alt="">
                            </figure>
                            <div class="alignright author">Congresista</div>
                        </div>
                        <div class="grid_5 omega">
                        	<figure class="img-indent-bot">
                            	<img src="images/page1-img3.jpg" alt="">
                            </figure>
                            <div class="alignright author">
                           	Escribe Asi:</div>
                        </div>
                    </div>
                </article>
                <article class="grid_6 suffix_1 omega">
                	<h2>Noticias del Día:</h2>
                    <dl class="news-list">
                    	<dt>
                        	<a href="#">Marzo. <strong>02</strong>, 2016</a></dt>
                        <dd>
                        	noticia 1</dd>
                        <dt>
                        	<a href="#">Marzo. <strong>02</strong>, 2016</a></dt>
                        <dd class="last">
                        	noticia 2
                        </dd>
                    </dl>
                    <div class="alignright"></div>
                </article>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>
<aside>
	<div class="container_24">
    	<div class="wrapper">
        	<div class="grid_24 aside-bg"></div>
        </div>
    </div>
</aside>
<!-- Footer -->
<footer>
    <div class="copyright">
        &copy; 2016 <strong class="footer-logo">microweb business company</strong>
      <div>Puno - Perú</div>
  </div>
    <ul class="social-list">
    	<li><a href="//facebook.com/Dr-Daniel-Quiroz-Orihuela-1748651845363517/"><img src="images/social-link-1.jpg" alt="" target="blank"></a></li>
        <li><a href="#"><img src="images/social-link-2.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/social-link-3.jpg" alt=""></a></li>
    </ul>
</footer>
</body>
</html>





