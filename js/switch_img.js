function switch_img(img_array){
    var prev_src = $('#main-img').attr('src');
    var cur_image = /[^/]*$/.exec("foo/bar/test.html")[0];
    var filter_arr = img_array.filter(function(e){
        return e!==cur_image;
    });

    var new_img = filter_arr[Math.floor(Math.random()*filter_arr.length)];
    $('#main-img').attr('src','images/posters/' + new_img);
}
