<?php


class PriceWidget extends AbstractWidget
{
    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        $handle = fopen("./assets/price.csv", "r");
        while (!feof($handle)) {
            $data[] = fgets($handle, 4096);
        }
        fclose($handle);

        return View::render('displayPrice',[
            'data' => $data,
            'curr' => $this->currency,
        ]);
    }
}