<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CALLBACK WITH ITEM REQUEST</title>
    <style type="text/css">
        body {
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.4;
            color: #333333;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #dddddd;
        }

        h1,
        h2,
        h3 {
            margin-top: 0;
        }

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <h1>CALLBACK WITH ITEM REQUEST</h1>
            </td>
        </tr>
        <tr>
            <td>
                <img src="https://metro.whippdigital.com/assets/images/logo/PristineGreen-House-Cleaning-Logo-NYC.png" alt="Logo">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Client Information</h3>
                <ul>
                    <li>Phone: {!! $phone !!}</li>
                    <li>Item: {!! $item !!}</li>
                </ul>
            </td>
        </tr>
    </table>
</body>

</html>
