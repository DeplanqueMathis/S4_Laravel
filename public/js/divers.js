$(document).ready(function() {
    $("a.img").hover(function(e) {
         e.preventDefault();
         var img = $('#img')[0]
         img.src =  $(this).attr('data-file');
    }, function(){
        img.src =  $(this).attr('');
    });
})