<?php
    require "function.php"
?>
<html>
<head>

    <style>
        html {
            width: 100%;
        }
        body{
            width: 100%;
        }
        input {
            margin: 0 0 20px 0;
            width: 100px;
        }
        .wrapper {
            margin: 0 auto;
            width: 940px;
        }
    </style>
</head>
<body>
<div class="wrapper">
<h1>insert image</h1>
    <?php
        $contacts = getContact();
    ?>
    <p>First name:<?=$contacts['fname']?></p>
    <p>Last name:<?=$contacts['lname']?></p>
    <p>Phone:<?=$contacts['phone']?></p>
<hr/>

<form action="form.php" name="image-form" method="post" enctype="multipart/form-data">

    <label for="fname">First name</label>
    <input type="text" name="fname"/><br/>
    <label for="lname">Last name </label>
    <input type="text" name="lname" /><br/>
    <label for="phone">Phone </label>
    <input type="text" name="phone" /><br/>

    <input type="submit" name="button" value="save" style="width: 100px; height: 30px;
     background: red; color: #fff; border: 0; cursor: pointer" />

</form>

</div>

</body>
</html>