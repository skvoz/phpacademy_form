<?php


class CurrencyWidget extends AbstractWidget
{
    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        return View::render('checkCurrency',[
            'cur' => $this->currency
        ]);
    }
}