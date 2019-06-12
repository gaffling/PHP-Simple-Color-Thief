# PHP Simple Color Thief

> 🖼 Detect the Dominant Color used in an Image

![EXAMPLE](header.png)


## Usage example

PHP:

```php
require 'color.php';
$image = 'https://cdn.pixabay.com/photo/2012/11/24/07/43/colorful-67134_960_720.jpg'
$default_color = 'ffffff';
echo fast_color_thief($image, $default_color);
```

Will return the Hex Color: e0a654


## Requirements

The only things you need:

```sh
PHP
GD-Lib
```


## Release History

  * 0.1
    * First Release


## Meta

I. Gaffling – [@gaffling](https://twitter.com/gaffling) – pro@gaffling.com

Distributed under the MIT license. See ``LICENSE`` for more information.

[https://github.com/gaffling/](https://github.com/gaffling/)x


## Contributing

1. Fork it (<https://github.com/gaffling/PHP-Simple-Color-Thief/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
