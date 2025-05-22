{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beh Siu Li - Homepage</title>
  <style>
    /* Reset and base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f6ff;
      color: #2c3e50;
      line-height: 1.6;
    }

    header {
      background-color: #3b5998;
      color: white;
      padding: 30px 0;
      text-align: center;
      font-size: 2.2rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    main {
      max-width: 1000px;
      margin: 50px auto;
      padding: 0 20px;
    }

    img {
      display: block;
      width: 100%;
      max-width: 600px;
      margin: 0 auto 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #34495e;
    }

    ul {
      list-style-type: none;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    li a {
      display: block;
      padding: 15px;
      background-color: #e3f2fd;
      border-radius: 10px;
      text-decoration: none;
      color: #1565c0;
      font-weight: 600;
      transition: all 0.3s ease;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
    }

    li a:hover {
      background-color: #bbdefb;
      transform: translateY(-3px);
    }

    footer {
      background-color: #3b5998;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      ul {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      ul {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <header>
    Beh Siu Li
  </header>

  <main>
    <img src="./Watery.jpg" alt="Main Banner Image" />


    <h2>Kumpulan Tugas</h2>
    <ul>
      <li><a href="/tugas1">Tugas 1 - Bootstrap</a></li>
      <li><a href="/tugas2linktree">Tugas 2 - Linktree</a></li>
      <li><a href="/tugas3">Tugas 3 - Kalkulator</a></li>
      <li><a href="/tugas4">Tugas 4 - Validasi</a></li>
      <li><a href="/tugas5asinkron">Tugas 5 - Danantara</a></li>
      <li><a href="/uts">UTS</a></li>
    </ul>
  </main>

  <footer>
    &copy; 2025 Beh Siu Li. All rights reserved.
  </footer>

</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beh Siu Li - Homepage</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f6ff;
      color: #2c3e50;
      line-height: 1.6;
    }

    header {
      background-color: #3b5998;
      color: white;
      padding: 30px 0;
      text-align: center;
      font-size: 2.2rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    main {
      padding: 0 20px;
    }

    .content-wrapper {
      max-width: 600px;
      margin: 50px auto;
    }

    img {
      display: block;
      width: 100%;
      border-radius: 12px;
      margin-bottom: 40px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #34495e;
    }

    ul {
      list-style-type: none;
      padding: 0;
      width: 100%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    li a {
      display: block;
      padding: 15px;
      background-color: #e3f2fd;
      border-radius: 10px;
      text-decoration: none;
      color: #1565c0;
      font-weight: 600;
      transition: all 0.3s ease;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
    }

    li a:hover {
      background-color: #bbdefb;
      transform: translateY(-3px);
    }

    footer {
      background-color: #3b5998;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      ul {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      ul {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <header>
    Beh Siu Li
  </header>

  <main>
    <div class="content-wrapper">
      <img src="./Watery.jpg" alt="Main Banner Image" />
      <h2>Kumpulan Tugas</h2>
      <ul>
        <li><a href="/tugas1">Tugas 1 - Bootstrap</a></li>
        <li><a href="/tugas2linktree">Tugas 2 - Linktree</a></li>
        <li><a href="/tugas3">Tugas 3 - Kalkulator</a></li>
        <li><a href="/tugas4">Tugas 4 - Validasi</a></li>
        <li><a href="/tugas5asinkron">Tugas 5 - Danantara</a></li>
        <li><a href="/uts">UTS</a></li>
      </ul>
    </div>
  </main>

  <footer>
    &copy; 2025 Beh Siu Li. All rights reserved.
  </footer>

</body>
</html>
