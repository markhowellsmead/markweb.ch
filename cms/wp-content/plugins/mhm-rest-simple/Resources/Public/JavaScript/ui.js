(function($, undefined) {

    var $link = $('link[rel="https://api.w.org/"]');
    var api_root = $link.attr('href');
    
    var api_root = 'https://permanenttourist.ch/wp-json/';

    function storeData(data, key) {
        if ('localStorage' in window) {
            data = JSON.stringify(data);
            window.localStorage.setItem(key, data);
        }
    }

    function localData(key) {
        if ('localStorage' in window) {
            var data = window.localStorage.getItem(key);
            if (data) {
                return JSON.parse(data);
            }
        }
        return false;
    }

    function getArticles() {
        $.ajax({
            url: api_root + 'wp/v2/posts',
            method: 'get',
/*
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce);
            },
*/
            data: {
                'order': 'desc',
                'orderby': 'date',
                'categories': '319'
            }
        }).done(renderArticles);
    }

    function renderArticles(response) {
        
        requirejs([
            '/cms/wp-content/plugins/mhm-rest-simple/Resources/Public/JavaScript/mustache.js',
            '/cms/wp-content/plugins/mhm-rest-simple/Resources/Public/JavaScript/dateformat.js'
        ], function(Mustache, dateFormat){

            $.get('/cms/wp-content/plugins/mhm-rest-simple/Resources/Private/Templates/Article.html', function(template) {

                $('[data-holder="articles"]').append('<article class="post"><header class="post-header"><h1>Posts from my main blog</h1></header>');
                
                $.each(response, function(){
                    
                    var article = this;
            
                    var data = {
                        id: article.id,
                        permalink: article.link,
                        date: DateFormat.format.date(article.date, 'D MMMM yyyy'),
                        datetime: article.modified,
                        excerpt: article.excerpt.rendered,
                        title: article.title.rendered
                    };
            
                    $('[data-holder="articles"]').append(Mustache.render(template, data)).delay(500).slideDown();
            
                });
            });
        });
    }
    
    
    if (api_root) {
        getArticles();
    }


})(jQuery);
