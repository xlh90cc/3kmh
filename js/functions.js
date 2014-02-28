// jquery.tile.min.js
(function(a){a.fn.tile=function(b){var c,d,e,f,g=this.length-1,h;if(!b)b=this.length;this.each(function(){h=this.style;if(h.removeProperty)h.removeProperty("height");else if(h.removeAttribute)h.removeAttribute("height")});return this.each(function(h){e=h%b;if(e==0)c=[];c[e]=a(this);f=c[e].height();if(e==0||f>d)d=f;if(h==g||e==b-1)a.each(c,function(){this.height(d)})})}})(jQuery)

// $(function(){
//   $(".entry-header").tile();
// });
// jquery.tile.min.js


// EqualHeight.js
$(document).ready(function () {
    var equalHeight = $('.content-area .post').equalHeight({
        wait: false,
        responsive: true
    });

    // Browser supports matchMedia
    if (window.matchMedia) {

        // MediaQueryList
        var mql = window.matchMedia("(min-width: 500px)");

        // MediaQueryListListener
        var equalHeightCheck = function (mql) {
            if (mql.matches) {
                equalHeight.start();
            } else {
                equalHeight.stop();
            }
        };

        // Add listener
        mql.addListener(equalHeightCheck);

        // Manually call listener
        equalHeightCheck(mql);

    }

    // Browser doesn't support matchMedia
    else {

        equalHeight.start();

    }

});
// EqualHeight.js

// ボックスリンク
$(function(){
    $(".bLink").click(function(){
        window.location=$(this).find("a").attr("href");
    });
// ボックスリンク