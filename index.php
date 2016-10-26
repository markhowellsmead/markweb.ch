<?php
    
function gravatar($size){
    return '/gravatar.php?size=' . $size;
}
    
?><!DOCTYPE html>
<html class="no-js">

<!--

    No copyright here. Steal and re-use anything at markweb.ch for whatever you like.
    Interested in working with me? Email permanent.tourist@gmail.com.
    
    Mark Howells-Mead | Since October 2016

-->

<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, follow" />
    <title>Mark Howells-Mead, Web developer</title>
    <link rel="stylesheet" href="Resources/Public/Fonts/Overpass/stylesheet.css?v1" />
    <link rel="stylesheet" href="Resources/Public/Css/comingsoon.css?v1" />
    <meta name="description" content="I’m a British web developer, designer and photographer living in Switzerland. markweb.ch is a personal website dedicated to internet techologies like WordPress." />
    </style>
</head>
<body>
	<main>
    	<picture>
            <source media="(min-width: 375px)" srcset="<?=gravatar(125)?>">
            <source media="(min-width: 667px)" srcset="<?=gravatar(167)?>">
            <source media="(min-width: 768px)" srcset="<?=gravatar(192)?>">
            <source media="(min-width: 1024px)" srcset="<?=gravatar(256)?>">
            <source media="(min-width: 1440px)" srcset="<?=gravatar(360)?>">
            <source media="(min-width: 1660px)" srcset="<?=gravatar(480)?>">
            <img src="<?=gravatar(60)?>" alt="Mark Howells-Mead" />
        </picture>
		<h1>Mark Howells-Mead</h1>
		<p>Website coming Autumn 2016.<br />Visit <a href="https://permanenttourist.ch/">my main website</a> for now.</p>
		<ul class="tags">
    		<li class="tag"><a href="https://permanenttourist.ch/topic/wordpress/">#WordPress</a></li>
    		<li class="tag"><a href="https://permanenttourist.ch/topic/wpbern/">WordPress Bern</a></li>
    		<li class="tag"><a href="https://permanenttourist.ch/topic/wcch/">WordCamp Switzerland</a></li>
		</ul>
		<ul class="social">
    		<li class="site"><a class="button button-twitter" href="https://twitter.com/mhmli">@mhmli</a></li>
		</ul>
	</main>
    <footer>No copyright here. Steal and re-use anything at markweb.ch for <a href="https://github.com/mhmli/markweb.ch/blob/master/LICENSE">whatever you like</a>.</footer>
</body>
</html>