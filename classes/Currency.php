<?php


class Currency
{
    public $currency;

    const DEFAULT_CURRENCY = 'grn';

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        $currency = isset($_REQUEST['cur']) ? $_REQUEST['cur'] : false;

        if (!$currency) {
            $currency = isset($_COOKIE['cur']) ? $_COOKIE['cur'] : false;
        } else {
            $this->setCurrency($currency);
        }

        $currency = $currency ? $currency : self::DEFAULT_CURRENCY;

        return $currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        setcookie('cur', $currency, 3600, '/');
        $this->currency = $currency;
    }


}