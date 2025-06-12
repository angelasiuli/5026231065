<!DOCTYPE html>
<html>
<head>
    <title>5026231065 - Beh Siu Li</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        .header-box {
            width: 100%;
            background-color: #d3d3d3; /* abu-abu */
            padding: 30px;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .counter-box {
            width: 100%;
            background-color: #ccffcc; /* ijo muda */
            border: 1px solid #66bb66; /* ijo gelap */
            padding: 30px;
            font-size: 20px;
            color: #2e7d32; /* semua teks ijo */
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="header-box">
        5026231065 - Beh Siu Li
    </div>

    <div class="counter-box">
        Anda Pengunjung ke: {{ $jumlah }}
    </div>

</body>
</html>
