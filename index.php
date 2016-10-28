<?php

$version = 'v0.0.20';

function gravatar($size)
{
    return '/gravatar.php?size='.$size;
}

?><!DOCTYPE html>
<html class="no-js">

<!--

    No copyright here. Steal and re-use anything at markweb.ch for whatever you like.
    Interested in working with me? Email permanent.tourist@gmail.com.

    Mark Howells-Mead | Since October 2016

-->

<head>
    <script>
    // if ('serviceWorker' in navigator) {
    //   navigator.serviceWorker.register('/serviceworker.min.js', {
    //     scope: '/'
    //   });
    // }


    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/serviceworker.min.js?<?=$version?>', {
        scope: '/'
      }).then(function(registration) {
        registration.unregister().then(function(boolean) {
          console && console.log('serviceworker.min.js unregistered');
        });
      }).catch(function(error) {
        // registration failed
        console && console.log('serviceworker.min.js: registration failed with ' + error);
      });
    };
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, follow" />
    <title>Mark Howells-Mead, Web developer</title>
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="I’m a British web developer, designer and photographer living in Switzerland. markweb.ch is a personal website dedicated to internet techologies like WordPress." />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?<?=$version?>">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?<?=$version?>" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png?<?=$version?>" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?<?=$version?>" color="#444444">
    <link rel="stylesheet" href="Resources/Public/Fonts/Overpass/stylesheet.css?<?=$version?>" />
    <link rel="stylesheet" href="Resources/Public/Css/css-reset.css?<?=$version?>" />
    <link rel="stylesheet" href="Resources/Public/Css/comingsoon.css?<?=$version?>" />
</head>
<body>
    <main>

        <img class="profile-image" src="<?=gravatar(60)?>" alt="Mark Howells-Mead" srcset="<?=gravatar(125)?> 125w, <?=gravatar(167)?> 167w, <?=gravatar(192)?> 192w, <?=gravatar(256)?> 256w, <?=gravatar(360)?> 360w, <?=gravatar(480)?> 480w">

        <h1>Mark Howells-Mead</h1>
        <p>Extended website coming Autumn 2016</p>
        <ul class="links tags">
            <li class="tag"><a href="https://permanenttourist.ch/topic/wordpress/" data-postsbytag="WordPress">#WordPress</a></li>
<!--             <li class="tag"><a href="https://permanenttourist.ch/topic/wpbern/">WordPress Bern</a></li>
            <li class="tag"><a href="https://permanenttourist.ch/topic/wcch/">WordCamp Switzerland</a></li>
 -->        </ul>
        <ul class="links presentations">
            <li class="presentation"><a href="http://slides.com/markweb/responsive-design-de/" target="_blank">Responsive Design - Worauf kommt es an?</a><span class="hide-for-tiny">For <a href="https://wpbern.ch/" target="_blank">WordPress Bern</a>, October 2016</span></li>
        </ul>
        <ul class="links social">
            <li class="site"><a class="button button-twitter" href="https://twitter.com/mhmli">@mhmli</a></li>
        </ul>
    </main>
    <footer>No copyright here. Steal and re-use anything at markweb.ch for <a href="https://github.com/mhmli/markweb.ch/blob/master/LICENSE">whatever you like</a>.</footer>
    <script src="Resources/Public/JavaScript/ui.min.js"></script>
</body>
</html>
