<table class="table">
        <tr>
            <th>firm</th>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php
        if (is_array($data)) {
            foreach ($data as $item) {
                $firm = $item['firm'];
                $name = $item['name'];
                $price = $item['price_' . $curr];

                echo sprintf('
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>
                ', $firm, $name, $price);
            }
        } else {
            echo sprintf('<tr><td colspan="3">%s</td></tr>', '---');
        }
    ?>
</table>

<?=$paginator?>

