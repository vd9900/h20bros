<!DOCTYPE html>
<html>

<head lang="en">
    <title> Paymnent | PristineGreen Upholstery and Carpet Cleaning </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name='robots' content='noindex,nofollow,nocrawl'>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100vh;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }

        input,
        textarea {
            outline: none;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: #2baf38;
        }

        h1 {
            margin-top: 0;
            font-weight: 500;
        }

        form {
            position: relative;
            width: 80%;
            border-radius: 30px;
            background: #fff;
        }

        .form-left-decoration,
        .form-right-decoration {
            content: "";
            position: absolute;
            width: 50px;
            height: 20px;
            border-radius: 20px;
            background: #2baf38;
        }

        .form-left-decoration {
            bottom: 60px;
            left: -30px;
        }

        .form-right-decoration {
            top: 60px;
            right: -30px;
        }

        .form-left-decoration:before,
        .form-left-decoration:after,
        .form-right-decoration:before,
        .form-right-decoration:after {
            content: "";
            position: absolute;
            width: 42px;
            height: 20px;
            border-radius: 30px;
            background: #fff;
        }

        .form-left-decoration:before {
            top: -20px;
        }

        .form-left-decoration:after {
            top: 20px;
            left: 10px;
        }

        .form-right-decoration:before {
            top: -20px;
            right: 0;
        }

        .form-right-decoration:after {
            top: 20px;
            right: 10px;
        }

        .circle {
            position: absolute;
            bottom: 80px;
            left: -55px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #fff;
        }

        .form-inner {
            padding: 40px;
        }

        .form-inner input,
        .form-inner textarea {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            background: #d0dfe8;
        }

        .form-inner textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border-radius: 20px;
            border: none;
            /* border-bottom: 4px solid #2baf38; */
            background: #2baf38;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #12901e;
        }

        @media (min-width: 664px) {
            form {
                width: 60%;
            }
        }

        @media (max-width:664px) {
            form {
                width: 90%;
            }

            .circle {
                display: none;
            }

            .form-inner {
                padding: 28px;
            }
        }
    </style>

</head>

<body>
    <form action="{{route('presubmit')}}" method="post" class="decor">
        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h1>Payment</h1>
            <input name="amount" placeholder="Amount">
            <input type="email" name="email" placeholder="Email (not-required)">
            <textarea name="describe" placeholder="Describe your order..." rows="5"></textarea>
            <input name="password" type="password" placeholder="please enter password provided to you by admin side" />
            <button type="submit" href="/">Pay</button>
        </div>
    </form>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        function showAlert(title/*, text*/) {
            swal({
                title: title,
                text: "{!! implode('', $errors->all()) !!}",
                icon: "error"
            });
        }
    </script>

    @if ($errors->any())
        <script type="text/javascript">
            showAlert("Error");
        </script>
    @endif
</body>

</html>
