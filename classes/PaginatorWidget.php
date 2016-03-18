<?php


class PaginatorWidget extends AbstractWidget
{
    /**
     * @var ProductModel
     */
    public $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     * @throws Exception
     */
    function display()
    {

        $curPage = @$_REQUEST['page'] ? @$_REQUEST['page'] : 1;

        $result = (int)$this->model->count();

        $perPage = $this->model->perPage;

        $count = $result/$perPage;

        $countPage = round($count);

        return View::render('paginator', [
            'perPage' => $perPage,
            'countPage' => $countPage ,
            'curPage' => $curPage,
        ]);
    }
}