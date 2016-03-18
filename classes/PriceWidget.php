<?php


class PriceWidget extends AbstractWidget
{
    public $curr;
    /**
     * PriceWidget constructor.
     * @param $curr - currency
     * @param $conn - connection to DB
     */
    public function __construct($curr)
    {
        $this->curr = $curr;
    }
    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        $model = new ProductModel();
        $paginator = new Paginator($model);

        return View::render('displayPrice',[
            'curr' => $this->curr,
            'data' => $paginator->getOffsetData(),
            'paginator' => (new PaginatorWidget($model))->display(),

        ]);
    }
}