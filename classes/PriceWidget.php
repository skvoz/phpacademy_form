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

        $paginator = new Paginator($data);

        return View::render('displayPrice',[
            'data' => $paginator->getOffsetData(),
            'curr' => $this->currency,
        ]);
    }
}