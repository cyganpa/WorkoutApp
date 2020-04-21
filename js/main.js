'use strict'

document.addEventListener('DOMContentLoaded', function () {
    var app = document.querySelector('#app');

    function getPage(page){
        var request = new XMLHttpRequest(); //XHR
        request.open('GET', page + '.html', true);
        request.onload = function (e) {
            if(request.status === 200){
                app.innerHTML = request.responseText;
            }else{
                getPage('404');
            }
        }
        request.send();
    }

    window.addEventListener('hashchange', function (e) {
        var location = window.location.hash.substr(1); //#jeden -> jeden
        getPage(location);
    })
});
