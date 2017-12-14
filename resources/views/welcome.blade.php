<html>
<head>
    <title>Laravel</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="content">
        <div class="title">Laravel 5</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
        <div><h5>Laravel was installed with <a href="http://turnkeylinux.org">TurnKey Linux</a>.</h5></div>
    </div>

</div>
<br>

<div>
    @if(\Illuminate\Support\Facades\Auth::user() != null )
        <a href="/logout"><button>LOGOUT</button></a>
        <a href="/car"><button>Cars</button></a>
    @else
        <a href="/login"><button>LOGIN</button></a>
    @endif

</div>
</body>
</html>