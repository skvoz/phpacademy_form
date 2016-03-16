<table class="table">
        <tr>
            <th>firm</th>
            <th>name</th>
            <th>price</th>
            <th>action</th>
        </tr>
        <?php
        if (is_array($data)) {
            foreach ($data as $item) {
                $id = $item['id'];
                $firm = $item['firm'];
                $name = $item['name'];
                $price = $item['price_' . $curr];

                $link = sprintf('<a href="/index.php?save_order=true&product_id=%s">button</a>', $id);

                echo sprintf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>
                ', $firm, $name, $price, $link);
            }
        } else {
            echo sprintf('<tr><td colspan="3">%s</td><td><a href="#">button</a></td></tr>', '---');
        }
    ?>
</table>

<?=$paginator?>

