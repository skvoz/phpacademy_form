<?php


abstract class AbstractWidget implements IWidget
{
    public $currency;

    /**
     * AbstractWidget constructor.
     * @param $curr
     */
    public function __construct($curr)
    {
        $this->currency = $curr;
    }

    public function __toString()
    {
        return $this->display();
    }

    /**
     * @return string
     * @throws Exception
     */
    abstract function display();
}