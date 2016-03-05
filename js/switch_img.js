function switch_img(){
    var images = [
        'bar.png', 'billboard.jpg', 'bnw.png', 'books.png', 'brown.png', 'car.png', 'citscape3.jpg',
        'city1.png', 'city2.png', 'city3.jpg', 'city3scape3.png', 'city4.png', 'city5.png', 'city6.png',
        'cityscape1.jpg', 'cityscape2.jpg', 'cybbnw.png', 'girl2.jpg', 'girl3.jpg', 'girl7.jpg',
        'girl4.jpg', 'girl5.jpg', 'girl6.jpg', 'girl.jpg', 'green.png', 'guy.jpg', 'guys.png', 'head.jpg',
        'humanbymistake2.gif', 'lain.png', 'lone.png', 'path.png', 'repair.jpg', 'retro2.png',
        'retro.png', 'riot.jpg', 'room.png', 'sillo.png', 'tower.png', 'tunnel.gif', 'wire2.png',
        'wire3.png', 'wire.png', 'head2.png', 'img45.png', 'img46.png',
    ];
    var prev_src = $('#main-img').attr('src');
    var cur_image = /[^/]*$/.exec("foo/bar/test.html")[0];
    var filter_arr = images.filter(function(e){
        return e!==cur_image;
    });

    var new_img = filter_arr[Math.floor(Math.random()*filter_arr.length)];
    $('#main-img').attr('src','images/posters/' + new_img);
}
