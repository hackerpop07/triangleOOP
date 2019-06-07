<?php


class Shape
{
    public $side1 = 1;
    public $side2 = 1;
    public $side3 = 1;

    /**
     * @param int $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param int $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param int $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    /**
     * @return int
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return int
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return int
     */
    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide123($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
}