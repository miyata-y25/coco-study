<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>CSVダウンロードリスト</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <style>
        .colum {
            background: #aaa;   
        }
        </style>
    </head>

    <body>
        <div id="content">
            <div class="container">
                <h1>CSVダウンロード</h1>
<?php if (count($export_data) > 0) { ?>
                <table class="table table-bordered">
                    <thead>
                        <tr class="colum">
                            <th>CSV</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($export_data as $one_export_data) { ?>
                        <tr>
                            <td><?php echo $one_export_data; ?></td>
                            <td><a href="/export/download/?file=<?php echo $one_export_data; ?>">ダウンロード</a></td>
                        </tr>
<?php } ?>
                    </tbody>
                </table>
<?php } else { ?>
                <p>ダウンロードファイルがありません</p>
<?php } ?>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>