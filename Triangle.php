<?php


class Triangle extends Shape
{
    public function getArea()
    {
        $p = ($this->getSide1() + $this->getSide2() + $this->getSide3()) / 2;
        $s = sqrt($p * ($p - $this->getSide1()) * ($p - $this->getSide2()) * ($p - $this->getSide3()));
        return $s;
    }

    public function getPerimeter()
    {
        $c = $this->getSide1() + $this->getSide2() + $this->getSide3();
        return $c;
    }

    public function toString()
    {
        echo "S: ", $this->getArea(), " C: ", $this->getPerimeter();
    }
}