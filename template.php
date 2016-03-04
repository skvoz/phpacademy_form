<!DOCTYPE html>
<html>
    <head>
        <meta charset=cp-1251>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="wrapper container">
            <h1>price</h1>
            <div class="row">
                <div class="col-md-12">
                    currency <span class="label label-success label-lg"><?=$curCurrency?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    check currency: <?=$currencyWidget?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?=$priceWidget?>
                </div>
            </div>
        </div>
    </body>
</html>

