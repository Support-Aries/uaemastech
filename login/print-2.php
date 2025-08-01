<?php
session_start();

if (isset($_SESSION['user_id'])) {
include('../dbcon.php');
$id = $_SESSION['user_id'];
$table = $_SESSION['table'];
$sql_details = mysqli_query($con,"SELECT * FROM `$table` where id ='$id'");
$user_data = mysqli_fetch_assoc($sql_details);

//print_r($user_data);

$name1 = $user_data["name"];
$designation = $user_data["designation"];
$company = $user_data["company"];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Signika:600|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <style>
        @font-face {
            font-family: 'roboto_condensedregular';
            src: url('robotocondensed-regular-webfont.woff2') format('woff2'),
                url('robotocondensed-regular-webfont.woff') format('woff'),
                url('RobotoCondensed-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @page {
            size: A6;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* 
        .content {
            padding-top: 20px;
        } */

        .title {
            font-size: 26px;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .content {
            font-size: 22px;
            color: #2c3574;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .print-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-family: "Roboto Condensed";
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        @media print {
            .print-button {
                display: none;
            }
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            position: relative;
        }

        page[size="A6"] {
            width: 4.1in;
            /* 105mm converted to inches */
            height: 5.8in;
            /* 148mm converted to inches */
        }

        .wrapper {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -45%);
            font-family: "Roboto Condensed";
            width: 100%;
        }

        .a6-preview {
            display: grid;
            align-content: center;

        }
    </style>
</head>

<body>
    <page size="A6">
        <div class="wrapper">
            <div class="a6-preview">
                <div class="title"><?= $name1 ?></div>
                <div class="content"><?= $designation ?></div>
                <div class="content"><?= $company ?></div>
            </div>
        </div>
    </page>
    <button class="print-button" onclick="printPage()">Print card </button>
   
    <!-- <a href="./print-card" class="print-button">Print card 2</a> -->

    <script>
        function printPage() {
            var content = document.querySelector('page[size="A6"]').innerHTML;
            var printWindow = window.open('', '_blank');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('<style>');
            printWindow.document.write(document.querySelector('style').innerHTML);
            printWindow.document.write('</style></head><body>');
            printWindow.document.write(content);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>

</body>

</html>