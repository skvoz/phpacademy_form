<style>
    .active {
        color: red;
    }
</style>
<div class="row">
    <div class="col-lg-12 text-center">
<?php

//var_dump($countPage);
//die;e;

for ($i =1; $i < $countPage; $i++) {
    if ($i > 10 ) {
        echo '...';
        break;
    }
    $class = $i == $curPage ? 'class="active"' : '';
    echo sprintf('<a href="./?page=%s" %s>%s</a>', $i, $class, $i) . ' ';
}
?>
</div>
</div>