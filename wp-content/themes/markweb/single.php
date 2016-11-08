<?php

$version = '0.1.0';



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

    <link rel="stylesheet" href="/wp-content/themes/markweb/Resources/Public/Css/single.css?<?=$version?>">

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

        <a class="is-icon burger show-for-small-only" data-toggle=".nav.main" data-htmlclass="burger-open"><span>Social media</span></a>

    </header>

    <nav class="mod nav main hide-for-small-only" data-toggleclass="hide-for-small-only">
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

    <main class="mod main single">

        <div class="posts">

            <article class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a rel="bookmark" href="https://2016.geneva.wordcamp.org/sessions/#wcorg-session-639" target="_blank">Modular functionality – organizing your code to make WordPress development easier</a>
                    </h2>
                    <time class="post-date" datetime="2016-11-18T16:00">18<sup>th</sup> November 2016</time>
                </header>
                <div id="attachment_21410" class="wp-caption alignnone wider"><img class="size-medium wp-image-21410" src="http://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-720x479.jpg" alt="Standard family room" width="720" height="479" srcset="https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-720x479.jpg 720w, https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1.jpg 1024w, https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-600x399.jpg 600w" sizes="(max-width: 720px) 100vw, 720px"><p class="wp-caption-text">Standard family room</p></div>
                <div class="content">
                    <p>An analysis of the visitor statistics during a recent web project showed that a large number of visitors were visiting the site using medium-small devices with 1024px x 768px screens. This corresponds to an iPad held in horizontal format.</p>
                    <p>But further research into the statistics showed that a large proportion of the visitors with this screen size were using Google’s Chrome web browser in the Windows 7 operating system. That corresponds to a small notebook-type laptop.</p>
                    <p>For work projects, designs are usually planned for common device sizes: smartphone, tablet, desktop and occasionally laptop. But in this project, we could see that it was necessary to specifically target a specific medium-small resolution, as that would be the version seen by the most users.</p>
                    <div id="attachment_21410" class="wp-caption alignnone"><img class="size-medium wp-image-21410" src="http://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-720x479.jpg" alt="Standard family room" width="720" height="479" srcset="https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-720x479.jpg 720w, https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1.jpg 1024w, https://permanenttourist.ch/wp-content/uploads/2016/11/premierinnsouthwark1-600x399.jpg 600w" sizes="(max-width: 720px) 100vw, 720px"><p class="wp-caption-text">Standard family room</p></div>
                    <p>Was the header area compact enough to reduce scrolling as much as possible? Were the icons large enough and the interactive elements planned ideally for use at this size? Could we target the site at this resolution for touch screens? (No. An interface has to work with any input device – touch interface or mouse – regardless of the screen size.)</p>
                    <p>It’s important to talk to clients about their intended audience right from the start of the planning process. During the kick-off meeting, before opening Sketch to start working on visual design, find out what the user base is like for an existing site which you’re redesigning. Whether Google Analytics, Piwiks, or another reporting system, take a look at the visitor counts and details from the last 12 months. Is there a particular trend amongst them?</p>
                    <p>This doesn’t mean that you have to dismiss the needs of other visitors, of course. Just start with the needs of the majority, then work on alternatives for other visitors with larger or smaller devices. Tailor the design for each expected target audience with their needs and interactive methods in mind.</p>
                    <p>Did you know that <a href="#">52% of the internet-browsing public</a> uses mobile devices these days? If you’re still expecting to design projects with the desktop user in mind, then you need to start revising your planning and design processes. By doing so, you’ll meet the needs of the site visitors more accurately, whilst allowing the developers to build your projects more quickly and more efficiently.</p>
                </div>
                <footer class="post-footer">
                    <p><a class="small button" rel="bookmark" href="https://2016.geneva.wordcamp.org/sessions/#wcorg-session-639" target="_blank">Find out more</a></p>
                </footer>
            </article>

        </div>

    </main>

    <aside class="mod aside"></aside>

</section>

<footer class="mod page-footer">No copyright here. Steal and re-use anything at markweb.ch for <a href="https://github.com/mhmli/markweb.ch/blob/master/LICENSE">whatever you like</a>.</footer>

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
