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

        echo $this->render('layout', [
            'usernameWidget' => new UsernameWidget(),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr),
            'priceWidget' => new PriceWidget($curr)

        ]);
    }

    /**
     * @param $id
     */
    public function actionSave($id)
    {
        $model = new OrderModel();
        $model->save([
            'id_product' => $id,
            'id_user' => DEFAULT_USER_ID,
        ]);
        $this->redirect('/product/index');
    }
}