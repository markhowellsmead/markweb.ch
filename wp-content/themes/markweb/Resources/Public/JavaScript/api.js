    var isonline = true;
    var lists = [];
    var jsonAPI = 'https://permanenttourist.ch/wp-json/wp/v2/posts';
    var page_overlay;

    function handleOnlineStatus() {
        updateOnlineStatus();
        window.addEventListener('online', updateOnlineStatus);
        window.addEventListener('offline', updateOnlineStatus);
    }

    function loadScript(url, callback) {
        var script = document.createElement("script");
        script.type = "text/javascript";

        if (script.readyState) { //IE
            script.onreadystatechange = function() {
                if (script.readyState === "loaded" || script.readyState === "complete") {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        }
        else { //Others
            script.onload = function() {
                callback();
            };
        }

        script.src = url;
        document.getElementsByTagName("head")[0].appendChild(script);
    }

    function updateOnlineStatus() {
        if ('onLine' in navigator) {
            if (navigator.onLine) {
                isonline = true;
                document.body.classList.add('online');
                document.body.classList.remove('offline');
            }
            else {
                isonline = false;
                document.body.classList.add('offline');
                document.body.classList.remove('online');
            }
        }
    }

    function renderData(data, key) {
        if (data && data.length) {
            if (!lists.wordpress) {
                lists.wordpress = $('<div class="list posts wordpress"></div>');
                $('body').append(lists.wordpress);
            }
            lists.wordpress.empty();

            loadScript('/vendor/api/date.format.js', function() {
                var list = $('<ul class="post-holder">');
                $.each(data, function() {
                    var post = this;
                    var readable_date = dateFormat(post.date, 'dS mmmm yyyy, H:MM');
                    list.append('<li class="post post-' + post.id + '"><header><h2 class="post-title"><a rel="bookmark" href="' + post.link + '">' + post.title.rendered + '</a><time>' + readable_date + '</time></h2></header>' + post.excerpt.rendered + '<p><a rel="bookmark" href="' + post.link + '">Read this blog post</a></p></li>');
                });
                page_overlay.addClass('open');
                lists.wordpress.append(button('Close', lists.wordpress)).append(list).addClass('open');
                $('a', list).attr('target', '_blank');
                lists.wordpress.on('closeme', function() {
                    $(this).removeClass('open');
                    page_overlay.removeClass('open');
                });

                storeData(data, key);

            });
        }
    }

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

    function button(text, relatesTo) {
        var _holder = $('<div class="button-holder"></div>');
        var _button = $('<button class="button button-primary"></button>');
        _holder.append(_button);
        _button.text(text);
        _button.on('click.close', function(e) {
            $(relatesTo).trigger('closeme', e);
        });
        return _holder;
    }

    handleOnlineStatus();

    // if (isonline) {
    //     loadScript("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", function() {

    //         page_overlay = $('<div class="page-overlay"></div>');
    //         $('body').append(page_overlay);

    //         $('[data-postsbytag]').on('click.loadme', function(e) {

    //             e.preventDefault();
    //             var tag = $(this).data('postsbytag');

    //             var data = localData(tag);
    //             if (data) {
    //                 renderData(data, tag);
    //             }
    //             else {
    //                 $.ajax({
    //                     url: jsonAPI,
    //                     type: 'jsonp',
    //                     method: 'get',
    //                     data: {
    //                         filter: {
    //                             tag: tag
    //                         }
    //                     },
    //                     success: function(data) {
    //                         renderData(data, tag);
    //                     }
    //                 });
    //             }
    //         });
    //     });
    // }
