(function($){
    $('[data-toggle]').on('click.toggle', function(){
        var $target = $($(this).data('toggle'));
        var $targetclass = $target.data('toggleclass');
        if($targetclass){
            $target.toggleClass($targetclass);
        }

        // An optional class name which will be toggled on the
        // document root element when the button is clicked.
        var $htmlclass = $(this).data('htmlclass');
        if($htmlclass){
            $('html').toggleClass($htmlclass);
        }
    });
})(jQuery);
