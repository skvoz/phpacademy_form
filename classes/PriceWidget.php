<?php


class PriceWidget extends AbstractWidget
{
    public $conn;
    public $curr;
    /**
     * PriceWidget constructor.
     * @param $curr - currency
     * @param $conn - connection to DB
     */
    public function __construct($curr, $conn)
    {
        $this->curr = $curr;
        $this->conn = $conn;
    }
    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        $paginator = new Paginator($this->conn);

        return View::render('displayPrice',[
            'curr' => $this->curr,
            'data' => $paginator->getOffsetData(),
            'paginator' => (new PaginatorWidget($this->conn))->display(),

        ]);
    }
}