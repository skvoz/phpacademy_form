<?php

/**
 * Class ProductController
 */

class ProductController extends BaseController
{
    /**
     * @throws Exception
     */
    public function actionIndex()
    {
        $curr = (new Currency())->getCurrency();

        echo View::render('layout', [
//            'usernameWidget' => new UsernameWidget($conn),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr),
            'priceWidget' => new PriceWidget($curr)

        ]);
    }
}