PHP Simple Color Thief
======================

> 🖼 Detect the Dominant Color used in an Image

![EXAMPLE](header.png)

How to Use
----------

PHP:

```php
require 'color.php';
$image = 'https://cdn.pixabay.com/photo/2012/11/24/07/43/colorful-67134_960_720.jpg'
$default_color = 'ffffff';
echo fast_color_thief($image, $default_color);
```

Will return the Hex Color: e0a654

```php
require 'color.php';
foreach(glob('./demo/*.{jpg,png,gif}', GLOB_BRACE) as $img) {
  $default_color = 'ff0000';
  $color = simple_color_thief($img, $default_color);
  $style = 'width:26%;padding:50px;background:#'.$color.';display:inline-block';
  echo '<div style="'.$style.'">';
  echo '<img style="height:200px" src="'.$img.'">';
  echo '</div>';
}
```

Will show something like the Screenshot on this Page ;-)

```php
require 'color.php';

$images = array( // PATTERN
    'https://cdn.pixabay.com/photo/2021/07/21/17/01/background-6483514_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/17/02/background-6483522_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/17/03/background-6483524_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/16/59/background-6483509_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/22/17/29/background-6485795_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/16/56/background-6483494_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/16/54/background-6483483_1280.jpg',
    'https://cdn.pixabay.com/photo/2021/07/21/16/56/background-6483492_1280.jpg',
    'https://upload.wikimedia.org/wikipedia/commons/4/4a/World_map_with_four_colours.svg',
);

$start = microtime(true);

foreach($images as $image) {

  $color = simple_color_thief($image);
  echo '<div style="width:24%;padding:10px;background:#'.$color;
  echo ';display:inline-block;text-align:center;font-family:monospace">';
  echo '<img style="height:200px" src="'.$image.'" title="'.$image.'"><br>#'.$color.'</div>';

}

echo 'Execution time '.round(microtime(true) - $start, 5).'s';
```

Show Example with URls!

How it Works
------------

The only things you need:

```sh
PHP
GD-Lib
```

###### Copyright 2019-2021 Igor Gaffling
