<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <div class="wrapper container">
            <header class="page-header">

                <span class="currency label label-success label-lg"><?=$curCurrency?></span>


                <span class="check-currency"><?=$currencyWidget?></span>


                <h1>price         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>example price with some currency</small></h1>
            </header>

            <div class="row">
                <div class="col-md-12">
                    <?=$priceWidget?>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                $('select').on('change', function(){
                    $('form').submit();
                });
            });
        </script>
    </body>
</html>

