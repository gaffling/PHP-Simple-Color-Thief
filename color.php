<?php

/*
 * PHP Simple Color Thief
 * 
 * Detect the Dominant Color used in an Image
 * 
 * Copyright 2019-2021 Igor Gaffling
 *
 */

function simple_color_thief($image, $default_color='eee') {
  if ($original_image = @imagecreatefromstring(@file_get_contents($image))) {
    $shortend_image = imagecreatetruecolor(1, 1);
    imagecopyresampled($shortend_image, $original_image, 0, 0, 0, 0, 1, 1, imagesx($original_image), imagesy($original_image));
    return dechex(imagecolorat($shortend_image, 0, 0));
  } else {
    return $default_color;
  }
}
