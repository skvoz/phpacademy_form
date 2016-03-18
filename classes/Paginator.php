<?php

/**
 * Class Paginator
 */
class Paginator
{
    /**
     * @var ProductModel
     */
    public $model;


    /**
     * Paginator constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
        
        $result =  $this->getOffsetData();

        return $result;
    }

    public function getOffsetData()
    {
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

        $offset = ($page-1)*10;

        $this->model->offset = $offset;

        return $this->model->findAll();
    }
}