<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f2f2f2;
        }

       header{
            background:#f472b6;
            color:white;
            padding:18px;
       }

        nav{
            margin-top:10px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-right:15px;
        }

        nav a:hover{
            text-decoration:underline;
        }

        .container{
            width:80%;
            margin:25px auto;
        }

        .card{
            background:white;
            padding:15px;
            border-radius:8px;
            margin-top:15px;
            border:1px solid #ddd;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }

       button{
    padding:10px 20px;
    background:#ec4899;
    color:white;
    border:none;
    cursor:pointer;
}

        button:hover{
    background:#db2777;
}

        footer{
            text-align:center;
            padding:15px;
            background:#ddd;
            margin-top:30px;
        }

    </style>

</head>
<body>

<header>

    <h2>LaporBanjir BPBD Kabupaten Bandung</h2>

    <nav>

        <a href="{{ route('form') }}">Form</a>

        <a href="{{ route('laporan') }}">Daftar Laporan</a>

    </nav>

</header>

<div class="container">

    @yield('content')

</div>

<footer>

    <p>2026 &copy; BPBD Kabupaten Bandung</p>

</footer>

</body>
</html>