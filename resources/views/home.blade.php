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
      padding: 15px 0;
      text-align: center;
      font-size: 2.2rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    main {
      padding: 0;
    }

 .wide-banner {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
  margin: 0;
  border-radius: 0;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}


    .content-wrapper {
      max-width: 600px;
      margin: 0 auto;
      padding: 50px 20px 0;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #367ec2;
      font-weight: 500;
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
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    width: 100%;
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
    Beh Siu Li 065
  </header>

  <main>
    <img class="wide-banner" src="Watery.png" alt="Main Banner Image" />
    <div class="content-wrapper">
      <h1>Kumpulan Tugas PBW</h1>
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

  {{-- <footer>
    Beh Siu Li - 5026231065
  </footer> --}}

</body>
</html>
