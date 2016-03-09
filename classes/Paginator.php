<?php

/**
 * Class Paginator
 */
class Paginator
{
    /**
     * @var array
     */
    public $data;

    /**
     * @var int
     */
    public $perPage = 10;

    /**
     * Paginator constructor.
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        
        $result =  $this->getOffsetData();

        return $result;
    }

    public function getOffsetData()
    {
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

        $result = [];

        $start  = @$this->data[($page-1)*10];

        if ($start === false) {
            throw new Exception('Error page');
        }

        for($i=0; $i < $this->perPage; $i++) {

            $result[] = $this->data[($page-1)*10+$i];
        }

        return $result;
    }
}