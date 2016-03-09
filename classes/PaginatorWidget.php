<?php


class PaginatorWidget extends AbstractWidget
{
    /** data cur page
     * @var
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        $perPage = 10;
        $curPage = @$_REQUEST['page'] ? @$_REQUEST['page'] : 1;
        $count = count($this->data)/$perPage;
        $countPage = round($count);
        return View::render('paginator', [
            'perPage' => $perPage,
            'countPage' => $countPage ,
            'curPage' => $curPage,
        ]);
    }
}