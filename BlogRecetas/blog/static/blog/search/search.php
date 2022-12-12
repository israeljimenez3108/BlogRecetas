<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="../js/jquery.equalheights.js"></script>
	<script src="search.js"></script>
    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div id="ie6-alert" style="width: 100%; text-align:center; background: #232323;">
        <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0"
             usemap="#Map" longdesc="http://die6.frontcube.com"/>
        <map name="Map" id="Map">
            <area shape="rect" coords="496,201,604,329"
                  href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
                  alt="Download Interent Explorer"/>
            <area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank"
                  alt="Download Apple Safari"/>
            <area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank"
                  alt="Download Opera"/>
            <area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank"
                  alt="Download Firefox"/>
            <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank"
                  alt="Download Google Chrome"/>
        </map>
    </div>

    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
    <![endif]-->
</head>

<body>

    <div class="page">
        <!--========================================================
                                  HEADER
        =========================================================-->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <ul class="inline-list">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Create an Account</a></li>
                        </ul>

                        <form id="search" class="search-form" action="search.php" method="GET"
                              accept-charset="utf-8">
                            <label class="input" for="i1">
                                <input id="i1" class="_input" type="text" name="s" value="Find Recipes, Videos & More..."
                                       onblur="if(this.value == '') { this.value='Find Recipes, Videos & More...'}"
                                       onfocus="if (this.value == 'Find Recipes, Videos & More...') { this.value = '' }" />
                            </label>
                            <a class="submit fa fa-search" onclick="document.getElementById('search').submit()"></a>
                        </form>

                        <ul class="socials">
                            <li><a href="#" class="fa-facebook">Facebook</a></li>
                            <li><a href="#" class="fa-google-plus">Google Plus</a></li>
                            <li><a href="#" class="fa-twitter">Twitter</a></li>
                            <li><a href="#" class="fa-rss">RSS</a></li>
                        </ul>
                    </div>
                </div>
                <hr />
            </div>
            <div id="stuck_container" class="stuck_container">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="brand">
                                <h1>
                                    <a href="../">Cooking Recipes</a>
                                </h1>
                            </div>

                            <nav class="nav">
                                <ul class="sf-menu">
                                    <li>
                                        <a href="../">Home</a>
                                    </li>
                                    <li>
                                        <a href="../index-1.html">Recipes</a>
                                        <ul>
                                            <li><a href="#">Testimonials</a></li>
                                            <li>
                                                <a href="#">History</a>
                                                <ul>
                                                    <li><a href="#">Lorem</a></li>
                                                    <li><a href="#">Dolor</a></li>
                                                    <li><a href="#">Sit amet</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Clients</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="../index-2.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="../index-3.html">About</a>
                                    </li>
                                    <li>
                                        <a href="../index-4.html">Contacts</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!--========================================================
                          CONTENT
=========================================================-->
<div id="content" class='content'>
	<hr class="container" />

    <div class="container well">	
		<h2>
			<span class="tm tm-icon4"></span>Search results
        </h2>
        <div class='row'>
			<div id="search-results" ></div>
		</div>
    </div>

	<hr class="container" />
</div>


<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12 wow fadeInUp">
				Cooking recipes © <span id="copyright-year"></span> All Rights Reserved | <a href="../index-5.html">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>

<script src="script.js"></script>
</body>
</html>