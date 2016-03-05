
<table class="table">
        <tr>
            <th>firm</th>
            <th>name</th>
            <th>price</th>
        </tr>
        <?php
        if (is_array($data)) {
            foreach ($data as $item) {
                $arr = explode(';', $item);
                $firm = iconv('CP1251', 'UTF-8', @$arr[3]);
                $name = iconv('CP1251', 'UTF-8', @$arr[4]);
                $price = $curr == 'grn' ? @$arr[5] : @$arr[14];
                $price = iconv('CP1251', 'UTF-8', $price);
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

