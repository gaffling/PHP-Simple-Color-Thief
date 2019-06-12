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

How it Works
------------

The only things you need:

```sh
PHP
GD-Lib
```

Infos about Images
------------------

https://homepages.cae.wisc.edu/~ece533/images/

###### Copyright 2019 Igor Gaffling
