<?php
if ($name):
?>
<div class="username"><span><?=$name?></span>  | <span><?=$email?></span></div>
<?php else:?>
    <div class="username"><span>Guest</span></div>
<?php endif;?>
