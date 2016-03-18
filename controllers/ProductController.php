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
            'usernameWidget' => new UsernameWidget(Application::getDb()->getConnectoion()),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr, Application::getDb()->getConnectoion()),
            'priceWidget' => new PriceWidget($curr, Application::getDb()->getConnectoion())

        ]);
    }
}