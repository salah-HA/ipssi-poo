<?php


namespace Ipssi\Evaluation\Creation;


class Page
{
    /** @var int */
private $x;

    /** @var int */
private $y;

    /** @var string */
private $color;

public function __construct(int $x, int $y, string $color)
{
    $this->x = $x;
    $this->y = $y;
    $this->color = $color;
}
public function getInfo(){
    echo '=============INFO PAGE===============' . PHP_EOL;
    echo 'Horizontal : ' . $this->getX() . PHP_EOL;
    echo 'Vertical : ' . $this->getY() . PHP_EOL;
    echo 'Couleur : '. $this->getColor() . PHP_EOL;
    echo '=====================================';
}

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

}
