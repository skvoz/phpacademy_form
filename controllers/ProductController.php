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

        try {
            $conn = Application::getDb()->getConnectoion();

        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
            die;
        }

        echo View::render('layout', [
            'usernameWidget' => new UsernameWidget($conn),
            'curCurrency' => $curr,
            'currencyWidget' => new CurrencyWidget($curr, $conn),
            'priceWidget' => new PriceWidget($curr, $conn)

        ]);
    }
}