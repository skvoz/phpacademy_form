<?php

class ProductModel extends BaseModel {
    public function index($params)
    {
        $curr = (new Currency())->getCurrency();

        //render html
        echo View::render('layout', [
            'usernameWidget' => new UsernameWidget(Application::getDb()->getConnectoion()),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr, Application::getDb()->getConnectoion()),
            'priceWidget' => new PriceWidget($curr, Application::getDb()->getConnectoion())

        ]);
    }
}