<?php


class CartController extends BaseController
{
    public function actionIndex()
    {
        $curr = (new Currency())->getCurrency();
        $listProduct = (new CartModel())->getList();
        $sum = (new CartModel())->getSum();

        echo $this->render('cart', [
            'curr' => $curr,
            'sum' => $sum,
            'listProduct' => $listProduct,
            'usernameWidget' => new UsernameWidget(),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr),
            'priceWidget' => new PriceWidget($curr)

        ]);
    }
}