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

	    //var data = localData('mhm-rest-simple/1.2.0');

	    // if(data){
		   //  renderArticles(data);
	    // }else{
	        $.ajax({
	            url: api_root + 'wp/v2/posts',
	            method: 'get',
	            cache: true,
	            data: {
	                'order': 'desc',
	                'orderby': 'date',
	                'categories': '319'
	            }
	        }).done(function(response){
		        //storeData(response, 'mhm-rest-simple/1.2.0');
		        renderArticles(response);
	        });
	    // }
    }

    function renderArticles(response) {

        requirejs([
            '/cms/wp-content/plugins/mhm-rest-simple/Resources/Public/JavaScript/mustache.js',
            '/cms/wp-content/plugins/mhm-rest-simple/Resources/Public/JavaScript/dateformat.js'
        ], function(Mustache, dateFormat){

            $.get('/cms/wp-content/plugins/mhm-rest-simple/Resources/Private/Templates/Article.html?v0.0.17', function(template) {

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

                    $('[data-holder="articles"]').append(Mustache.render(template, data)).delay(500).css('display', 'flex');

                });
            });
        });
    }


    if (api_root) {
        getArticles();
    }


})(jQuery);
