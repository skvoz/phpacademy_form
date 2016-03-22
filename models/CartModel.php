<?php


class CartModel extends BaseModel
{


    public function getList()
    {
        $sql = sprintf("
          SELECT
            firm,
            name,
            price_grn,
            price_rub
          FROM `order` as o
            INNER JOIN users u ON u.id=o.id_user
            INNER JOIN product p ON p.id=o.id_product
          WHERE
            u.id=%s

          ", DEFAULT_USER_ID);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        return $result;
    }

    public function getSum()
    {
        $sql = sprintf("
          SELECT
            sum(price_grn) as grn,
            sum(price_rub) as rub
          FROM `order` as o
            INNER JOIN users u ON u.id=o.id_user
            INNER JOIN product p ON p.id=o.id_product
          WHERE
            u.id=%s

          ", DEFAULT_USER_ID);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return $result;
    }
}