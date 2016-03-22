<?php


class CartController extends BaseController
{
    public function actionIndex()
    {
        $curr = (new Currency())->getCurrency();

        echo View::render('cart', [
            'listProduct' => null,
            'usernameWidget' => new UsernameWidget(),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr),
            'priceWidget' => new PriceWidget($curr)

        ]);
    }
}