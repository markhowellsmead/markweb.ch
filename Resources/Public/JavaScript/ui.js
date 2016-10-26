(function(){

    function updateOnlineStatus(){
        if('onLine' in navigator){
            if(navigator.onLine){
                document.body.classList.add('online');
                document.body.classList.remove('offline');
            }else{
                document.body.classList.add('offline');
                document.body.classList.remove('online');
            }
        }
    };

    updateOnlineStatus();

    window.addEventListener('online',  updateOnlineStatus);
    window.addEventListener('offline',  updateOnlineStatus);

})();
