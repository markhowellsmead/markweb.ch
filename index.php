<?php

$version = 'v0.0.25.1';

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
    /**
     * De-registers Service Worker for anyone who loaded the site when
     * it was being tested. It is currently not in use.
     */
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
    <link rel="apple-touch-icon" sizes="180x180" href="/Resources/Public/Icons/apple-touch-icon.png?<?=$version?>">
    <link rel="icon" type="image/png" href="/Resources/Public/Icons/favicon-32x32.png?<?=$version?>" sizes="32x32">
    <link rel="icon" type="image/png" href="/Resources/Public/Icons/favicon-16x16.png?<?=$version?>" sizes="16x16">
    <link rel="manifest" href="/Resources/Public/Icons/manifest.json">
    <link rel="mask-icon" href="/Resources/Public/Icons/safari-pinned-tab.svg?<?=$version?>" color="#444444">
    <link rel="stylesheet" href="Resources/Public/Css/css-reset.css?<?=$version?>" />
    <link rel="stylesheet" href="Resources/Public/Css/comingsoon.css?<?=$version?>" />
    <link rel="stylesheet" href="https://s.w.org/wp-includes/css/dashicons.css?20160504" />
</head>
<body>
    <main class="main">
        <header class="who">
            <img class="profile-image" src="<?=gravatar(60)?>" alt="Mark Howells-Mead" srcset="<?=gravatar(125)?> 125w, <?=gravatar(167)?> 167w, <?=gravatar(192)?> 192w, <?=gravatar(256)?> 256w, <?=gravatar(360)?> 360w, <?=gravatar(480)?> 480w">
            <h1>Mark Howells-Mead</h1>
        </header>
        <section class="what">
            <ul class="listless presentations">
                <li class="presentation"><a href="https://2016.geneva.wordcamp.org/sessions/#wcorg-session-639" target="_blank">Modular functionality – organizing your code to make WordPress development easier</a><span class="presentation-client caption-tiny">(<a href="https://2016.geneva.wordcamp.org/" target="_blank">#WCGVA</a>, 18<sup>th</sup> November 2016)</span></li>
                <li class="external-link"><a href="https://wpch.slack.com/">New Slack channel opened for WordPress Switzerland</a><span class="presentation-client caption-tiny">(1<sup>st</sup> November 2016)</span></li>
                <li class="presentation"><a href="http://slides.com/markweb/responsive-design-de/" target="_blank">Responsive Design - Worauf kommt es an?</a><span class="presentation-client caption-tiny">(<a href="https://wpbern.ch/" target="_blank">WordPress Bern</a>, Oktober 2016)</span></li>
            </ul>
        </section>
        <section class="where">
            <ul class="links social">
                <li class="sites"><a class="button button-wordpress" href="https://profiles.wordpress.org/markhowellsmead">WordPress</a> <a class="button button-twitter" href="https://twitter.com/mhmli">Twitter</a> <a class="button button-facebook" href="https://www.facebook.com/mhowellsmead">Facebook</a> <a class="button button-slack" href="https://wpch.slack.com/">Slack</a></li>
            </ul>
        </section>
    </main>
    <footer>No copyright here. Steal and re-use anything at markweb.ch for <a href="https://github.com/mhmli/markweb.ch/blob/master/LICENSE">whatever you like</a>.</footer>
    <script src="Resources/Public/JavaScript/ui.min.js"></script>
</body>
</html>
