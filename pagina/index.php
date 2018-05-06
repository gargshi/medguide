<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ajax pagination with php and mysql">
        <meta name="keywords" content="Ajax pagination with php and mysql">
        <meta name="author" content="Shahrukh Khan">
        <title>Ajax pagination with php and mysql</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="body">
                <div class="mainTitle" >Ajax pagination with php and mysql</div>
                <div class="height10"></div>
                <div class="height10"></div>
                <article>
                    <div class="height10"></div>
                    <div id="results"></div>
                    <div class="loader"></div>
                </article>
            </div>
        </div>
        <script src="jquery-1.9.0.min.js"></script>
        <script type="text/javascript">
        // fetching records
                            function displayRecords(numRecords, pageNum) {
                                $.ajax({
                                    type: "GET",
                                    url: "getrecords.php",
                                    data: "show=" + numRecords + "&pagenum=" + pageNum,
                                    cache: false,
                                    beforeSend: function() {
                                        $('.loader').html('<img src="loader.gif" alt="" width="24" height="24" style="padding-left: 400px; margin-top:10px;" >');
                                    },
                                    success: function(html) {
                                        $("#results").html(html);
                                        $('.loader').html('');
                                    }
                                });
                            }

        // used when user change row limit
                            function changeDisplayRowCount(numRecords) {
                                displayRecords(numRecords, 1);
                            }

                            $(document).ready(function() {
                                displayRecords(10, 1);
                            });
        </script>
    </body>
</html>
