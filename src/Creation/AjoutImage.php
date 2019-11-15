<?php


namespace Ipssi\Evaluation\Creation;


class AjoutImage
{
private $image;
private $posX;
private $posY;
private $width;
private $lenght;


public function __construct(string $image, int $posX, int $posY, int $width, int $lenght)
{
    $this->image = $image;
    $this->x = $posX;
    $this->y = $posY;
    $this->width = $width;
    $this->lenght = $lenght;
}

}