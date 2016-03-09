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
        return View::render('paginator', [
            'data' => $data,
            'perPage' => $perPage,
        ])
    }
}