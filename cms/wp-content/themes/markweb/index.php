<?php

<<<<<<< HEAD
$version = '0.1.2';
=======
$version = '0.1.1';
>>>>>>> 0aa9dd46a829a479a2929662ef923360e9fb3be0



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
      navigator.serviceWorker.register('/serviceworker.min.js', {
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
    <link rel="stylesheet" href="/wp-content/themes/markweb/Resources/Public/Css/css-reset.css?<?=$version?>">
    <link rel="stylesheet" href="/wp-content/themes/markweb/Resources/Public/Css/style.css?<?=$version?>">

    <link rel="stylesheet" href="/wp-content/themes/markweb/Resources/Public/Css/list.css?<?=$version?>">
<<<<<<< HEAD

    <link rel="https://api.w.org/" href="/cms/wp-json/" />
=======
>>>>>>> 0aa9dd46a829a479a2929662ef923360e9fb3be0

</head>
<body>
<div class="container">

<header class="mod page-header">

    <header class="mod page-toolbar">

        <img class="profile-image" src="/gravatar.php?size=60" alt="Mark Howells-Mead" srcset="/gravatar.php?size=128 128w, /gravatar.php?size=192 192w, /gravatar.php?size=256 256w, /gravatar.php?size=360 360w, /gravatar.php?size=480 480w" sizes="16vw" />

        <div class="profile-content">
            <header class="profile-header">
                <h1 class="page-title">Mark Howells-Mead</h1>
                <h2 class="page-subtitle">Web developer and photographer</h2>
            </header>
        </div>

        <a class="is-icon burger show-for-small-only" data-toggle=".nav.social" data-htmlclass="burger-open"><span>Social media</span></a>

    </header>

    <nav class="mod nav social hide-for-small-only" data-toggleclass="hide-for-small-only">
        <ul class="inline">
            <li class="menu-item"><a href="mailto:hi@markweb.ch" class="is-icon envelope">Get in touch</a></li>
            <li class="menu-item"><a href="https://profiles.wordpress.org/markhowellsmead" class="is-icon wordpress">WordPress</a></li>
            <li class="menu-item"><a href="https://twitter.com/mhmli" class="is-icon twitter">Twitter</a></li>
            <li class="menu-item"><a href="https://www.facebook.com/mhowellsmead" class="is-icon facebook">Facebook</a></li>
            <li class="menu-item"><a href="https://wpch.slack.com/" class="is-icon slack">Slack</a></li>
        </ul>
    </nav>

</header>


<section class="mod page-content">

    <main class="mod main list">

        <div class="posts">

            <article class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a rel="bookmark" href="https://2016.geneva.wordcamp.org/sessions/#wcorg-session-639" target="_blank">Modular functionality – organizing your code to make WordPress development easier</a>
                    </h2>
                    <time class="post-date" datetime="2016-11-18T16:00"><em class="post-upcoming">Soon:</em> 18<sup>th</sup> November 2016</time>
                </header>
                <div class="excerpt">
                    <p>Join me at <a href="https://2016.geneva.wordcamp.org/">WordCamp Geneva</a>, where I'll be presenting to a conference for the first time!</p>
                    <p>Touching on front end techniques most commonly known from programmers like Brad Frost, I’ll explain how to plan a development project for both front end and backend environments in an overview, using a recent real-world example of developing for both blogs and non-blog-type WordPress multisite installation.</p>
                    <p>My talk will provide a summarized insight into maintaining individual features through the use of your own Plugins, why it’s important to decide whether to add features to a Theme or via a Plugin, and the flexibility and organisation which modular coding brings.</p>
                </div>
                <footer class="post-footer">
                    <p><a class="small button" rel="bookmark" href="https://2016.geneva.wordcamp.org/sessions/#wcorg-session-639" target="_blank">Find out more</a></p>
                </footer>
            </article>

            <article class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a rel="bookmark" href="https://permanenttourist.ch/2016/11/tailoring-your-web-design-process-to-site-visitors-needs/" target="_blank">Tailoring your web design process to site visitors' needs</a>
                    </h2>
                    <time class="post-date" datetime="2016-11-03T12:00">3<sup>rd</sup> November 2016</time>
                </header>
                <div class="excerpt">
                    <p>For work projects, designs are usually planned for common device sizes: smartphone, tablet, desktop and occasionally laptop. But in this project, we could see that it was necessary to specifically target a specific medium-small resolution, as that would be the version seen by the most users.</p>
                </div>
                <footer class="post-footer">
                    <p><a class="small button" rel="bookmark" href="https://permanenttourist.ch/2016/11/tailoring-your-web-design-process-to-site-visitors-needs/" target="_blank">Read more</a></p>
                </footer>
            </article>

            <article class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a rel="bookmark" href="https://permanenttourist.ch/2016/11/new-slack-channel-opened-for-wordpress-switzerland/">New Slack channel opened for WordPress Switzerland</a>
                    </h2>
                    <time class="post-date" datetime="2016-11-01T12:00">1<sup>st</sup> November 2016</time>
                </header>
                <div class="excerpt">
                    <p>Providing WordPress developers and designers in Switzerland with an online place to hang out and exchange tips and ideas.</p>
                </div>
                <footer class="post-footer">
                    <p><a class="small button" rel="bookmark" href="https://permanenttourist.ch/2016/11/new-slack-channel-opened-for-wordpress-switzerland/" target="_blank">Read more</a></p>
                </footer>
            </article>

            <article class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a rel="bookmark" href="http://slides.com/markweb/responsive-design-de/" target="_blank">Responsive Design - Worauf kommt es an?</a>
                    </h2>
                    <time class="post-date" datetime="2016-10-27T17:30">27<sup>th</sup> October 2016</time>
                </header>
                <div class="excerpt">
                    <p>Slides (in German) from a presentation I made to <a href="https://wpbern.ch/" target="_blank">WordPress Bern</a> on the subject of Responsive Design.</p>
                </div>
                <footer class="post-footer">
                    <p><a class="small button" rel="bookmark" href="http://slides.com/markweb/responsive-design-de/" target="_blank">View presentation</a></p>
                </footer>
            </article>

        </div>

    </main>

    <aside class="mod aside"></aside>

</section>

</div>

<script>

(function() {
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = '/wp-content/themes/markweb/Resources/Public/JavaScript/jquery.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);

    // Poll for jQuery to come into existance
    var checkReady = function(callback) {
        if (window.jQuery) {
            callback(jQuery);
        }
        else {
            window.setTimeout(function() { checkReady(callback); }, 100);
        }
    };

    // Start polling...
    checkReady(function($) {
        $.cachedScript = function( url, options ) {

          // Allow user to set any option except for dataType, cache, and url
          options = $.extend( options || {}, {
            dataType: "script",
            cache: true,
            url: url
          });

          // Use $.ajax() since it is more flexible than $.getScript
          // Return the jqXHR object so we can chain callbacks
          return jQuery.ajax( options );
        };

        $.cachedScript( '/wp-content/themes/markweb/Resources/Public/JavaScript/ui.min.js' );
        //$.cachedScript( '/wp-content/themes/markweb/Resources/Public/JavaScript/api.min.js' ); // Not implemented yet

    });
})();


</script>
</body>
</html>
