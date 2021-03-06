<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>c y b e r l i f e</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/switch_img.js"></script>
	<?php
	$dir          = "images/posters";
	$return_array = array();
	if(is_dir($dir)){
	    if($dh = opendir($dir)){
		while(($file = readdir($dh)) != false){
		    if($file == "." or $file == ".."){
		    } else {
			$return_array[] = $file; // Add the file to the array
		    }
		}
	    }
	    echo '<script>var poster_images = ' . json_encode($return_array) . ';</script>';
	}
	?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="one-half column item" style="text-align:right;margin-top:6%">
                    <?php
                    $dir = 'images/posters';
                    $files = glob($dir . '/*.*');
                    $file = array_rand($files);
                    $path = $files[$file];
                    print '<img onclick="switch_img(poster_images)" src="/' . $path .'" id="main-img" class="u-max-full-width">';
                    ?>
                    <span class="caption">
                        <!-- <h4>zeev0</h4> -->
                        <p>
                            <a class="side" href="https://www.github.com/zeev0">github</a>
                        </p>
                    </span>
                </div>
                <div class="one-half column" style="text-align:left;margin-top:5%">
                    <h1>c&nbsp;y&nbsp;b&nbsp;e&nbsp;r&nbsp;l&nbsp;i&nbsp;f&nbsp;e</h1>
                    <?php
                    $data = file_get_contents('data/quotes.json');
                    $json_a = json_decode($data);
                    shuffle($json_a);
                    for ($i = 0; $i <4; $i++){
                        $ele = $json_a[$i];
                        echo "<p>\"{$ele->quote}\" - <b>{$ele->author}</b>, <i>{$ele->source}</i>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
