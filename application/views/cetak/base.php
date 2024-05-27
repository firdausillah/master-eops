<!DOCTYPE html>
<html>

<head>
    <title><?= $title ? $title : 'Judul Page' ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/dataTables.min.css">
    <style>
        @page {
            footer: html_myFooter;
        }
    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            color: #333333;
            line-height: 1.5;
        }

        /* h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold;
        }

        h1 {
            font-size: 18pt;
            text-align: center;
        } */

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 10px;
        }

        .row {
            width: 100%;
            /* Pastikan baris mengambil lebar penuh */
            overflow: hidden;
            /* Mengatasi masalah clearing float */
            box-sizing: border-box;
            /* Pastikan padding dan border termasuk dalam lebar elemen */
            margin-left: -10px;
            /* Mengompensasi padding kolom */
            margin-right: -10px;
            /* Mengompensasi padding kolom */
        }

        .column-l {
            float: left;
            width: 50%;
            /* margin-right: 10px; */
        }

        .column-r {
            float: right;
            width: 50%;
            /* margin-left: 10px; */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .td-border th,
        .td-border td {
            border: 1px solid #dddddd;
            padding: 8px;
            /* text-align: left; */
        }

        .td-border-sm th,
        .td-border-sm td {
            border: 1px solid #dddddd;
            padding: 2px;
            /* text-align: left; */
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            vertical-align: top;
        }

        .td-text-bottom td {
            vertical-align: top;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-bottom {
            vertical-align: text-bottom;
        }

        .border {
            border: 2px solid black;
            border-radius: 15px;
        }

        .box-34 {
            width: 113.39px;
            height: 151.18px;
            background-color: lightgray;
            border: 1px solid #333333;
        }

        .register-container {
            background-color: blueviolet;
            width: 100%;
            height: 100px;
        }

        .page-header {
            color: lightgray;
            text-align: right;
        }
    </style>

</head>

<body>
    <?php $this->load->view($content) ?>
</body>

</html>