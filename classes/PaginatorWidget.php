<?php


class PaginatorWidget extends AbstractWidget
{
    /** data cur page
     * @var
     */
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return string
     * @throws Exception
     */
    function display()
    {
        $perPage = 10;
        $curPage = @$_REQUEST['page'] ? @$_REQUEST['page'] : 1;

        $sql = <<<SQL
SELECT count(*) FROM product
SQL;
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        $count = $result[0]/$perPage;

        $countPage = round($count);

        return View::render('paginator', [
            'perPage' => $perPage,
            'countPage' => $countPage ,
            'curPage' => $curPage,
        ]);
    }
}