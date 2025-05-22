<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@stylewithsoco</title>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background-color: #eeecef;
      font-family:Arial, Helvetica, sans-serif , serif;  
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px 20px;
    }

    .container {
      width: 100%;
      max-width: 580px;
      position: relative;
    }

    .img-fade {
      width: 100%;
      height: 400px;
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .profile-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 24px;
      position: relative;
      z-index: 1;
    }

    .img-fade::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background: linear-gradient(to bottom, 
        rgba(255, 226, 146, 0) 0%, 
        rgba(255, 255, 255, 0.248) 30%, 
        rgba(235, 231, 231, 0.7) 70%, 
        #eeecef 100%);
      z-index: 2;
      pointer-events: none;
    }

    h2 {
      font-size: 1.2rem;
      font-weight: 800;
      margin-bottom: 10px;
      color: #000000;
      text-align: center;
    }
    
    h3 {
      font-size: 0.9rem;
      font-weight: 500;
      margin-bottom: 10px;
      color: #000000;
      text-align: center;
    }

    .tab-toggle {
      display: flex;
      justify-content: center;
      background-color: #8e8c8f;
      border: 3px solid #8e8c8f;
      border-radius: 30px;
      overflow: hidden;
      position: relative;
      margin-top: -15px;
      margin-bottom: 30px;
      width: 75%;
      max-width: 200px;
      z-index: 4;
      height: 50px;
      margin-left: auto;
      margin-right: auto;
    }

    .tab-toggle button {
      padding: 1px 25px;
      background: none;
      border: none;
      font-weight: 600;
      color: #ffffff;
      transition: background-color 0.2s ease, color 0.2s ease;
      width: 50%;
    }

    .tab-toggle button.active {
      background-color: #ffffff;
      color: #000000;
      border-radius: 30px;
    }

    .link-section {
      display: none;
      width: 100%;
      flex-direction: column;
      gap: 15px;
    }

    .link-section.active {
      display: flex;
    }

    .link-btn {
      background-color: #fe9cc5;
      border: 2px solid #d3ced0;
      padding: 19px 20px;
      border-radius: 70px;
      font-weight: 500;
      text-align: center;
      box-shadow: 8px 7px 0 #d3ced0;
      color: #212121;
      text-decoration: none;
      font-size: 1rem;
      width: 100%;
      margin-bottom: 1px;
      display: flex;
      align-items: center;
      position: relative;
    }

    .link-btn .btn-content {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .link-btn .button-img {
      height: 45px;
      width: 45px;
      border-radius: 50px;
      margin-right: 10px;
      flex-shrink: 0;
    }

    .link-btn .btn-text {
      flex-grow: 1;
      text-align: center;
    }

    .button-dots {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px; 
      color: #8e8c8f;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .button-dots:hover {
      color: #ffffff; 
    }

    .link-btn:hover {
      transform: translateY(2px);
      box-shadow: 0 4px 0 #d1cbcb;
    }

    .link-btn:active {
      transform: translateY(4px);
      box-shadow: 0 2px 0 #d1cbcb;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 18px;
      margin: 5px 0;
    }

    .social-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      color: rgb(0, 0, 0);
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 30px;
      position: relative;
    }

    .social-icon:hover {
      cursor: pointer;
      color: #d1cbcb;
    }

    .overlay {
      position: absolute;
      top: 70%;
      left: 0;
      width: 100%;
      z-index: 3;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .top-content {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .mini-title {
      text-align: center;
      width: 100%;
      margin-top: 10px;
      margin-bottom: 10px;
      font-weight: 700;
      color: #000000;
      font-size: 1rem;
    }

    .content-area {
      margin-top: 20px;
    }

    .section-divider {
      width: 100%;
      height: 1px;
      background-color: #d3ced0;
      margin: 10px 0 20px 0;
    }

.top-actions {
  position: absolute;
  top: 15px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 0 15px;
  z-index: 5;
}

.action-button {
  width: 40px;
  height: 40px;
  background-color: rgba(128, 128, 128, 0.7);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.action-button:hover {
  background-color: rgba(158, 157, 157, 0.704);
  transition: all 0.3s ease;

  /* color: #333; */
}
.product-collection {
  background-color: #ff9cc5;
  border-radius: 24px;
  padding: 15px;
  margin-bottom: 20px;
  position: relative;
  box-shadow: 8px 7px 0 #d3ced0;

  /* box-shadow: 5px 5px 10px rgba(0,0,0,0.1); */
}
.product-collection:hover {
      transform: translateY(2px);
      box-shadow: 0 4px 0 #d1cbcb;
    }

.product-images {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin-bottom: 15px;
}

.product-image {
  width: 33.3%;
  height: 200px;
  border-radius: 12px;
  overflow: hidden;
  background-color: white;
}

.product-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.collection-details {
  position: relative;
  padding: 5px 0;
}

.collection-title {
  font-weight: 700;
  font-size: 1rem;
  color: #000;
  margin-bottom: 5px;
  text-align: center;
}

.product-count {
  color: #666;
  font-size: 0.8rem;
  margin: 0;
  text-align: center;
}

.dots-menu {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #666;
}

.linktree-btn {
  background-color: white;
  border: none;
  border-radius: 999px;
  font-weight: 500;
  font-size: 16px;
  color: black;
}

.icon-star {
  font-size: 20px;
  line-height: 1;
}

  </style>
</head>
<body>

  <div class="container">
    <div class="img-fade">

        <div class="top-actions">
            <div class="action-button" id="bellBtn">
              <i class="fa-solid fa-bell"></i>
            </div>
            <div class="action-button" id="menuBtn">
              <i class="fa-solid fa-ellipsis"></i>
            </div>
          </div>
        
      <img src="./tugas2pfp.jpeg" alt="Sophie Cohen" class="profile-img">
      
      <div class="overlay">
        <div class="top-content">
          <h2>Sophie Cohen <i class="fa-solid fa-certificate fa-sm" style="color: #13b0ed;"></i></h2>
          <h3>nyc 🩷 queen of pink</h3>
          <div class="social-icons">
            <a href="https://www.instagram.com/accounts/suspended/?next=https%3A%2F%2Finstagram.com%2Fstylewithsoco%3F__coig_ufac%3D1#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@stylewithsoco" class="social-icon" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.YouTube.com" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
           </div>
        </div>
      </div>
    </div>

    <div class="tab-toggle">
      <button class="tab-btn active" data-target="links">Links</button>
      <button class="tab-btn" data-target="shop">Shop</button>
    </div>

    <div class="content-area">
      <!-- Links Section -->
      <div class="link-section active" id="links">
        <a href="https://www.nordstrom.com/browse/women/under-100?campaign=stylewithsoco_bestofspringfashion_april" class="link-btn">
          <div class="btn-content">
            <span class="btn-text">Nordstrom Under $100</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>


        <a href="https://shopmy.us/stylewithsoco/" class="link-btn">
            <div class="btn-content">
              <span class="btn-text">ShopMy</span>
            </div>
            <i class="fa fa-ellipsis-v button-dots"></i>
          </a>

        <a href="https://bit.ly/4faKKdq" class="link-btn">
          <div class="btn-content">
            <img src="./tugas2pfp.jpeg" alt="Animal Shelter" class="button-img">
            <span class="btn-text">Coucou French Classes - Sophie10 for 10% off</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>
        
        
        
        <a href="https://www.nordstrom.com/browse/home/holiday-decor/hanukkah?campaign=stylewithsoco_hanukkah_november" class="link-btn">
          <div class="btn-content">
            <span class="btn-text">Nordstrom Hanukkah Finds</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>

        <div class="mini-title">keep up with sophie!</div>
        
        <a href="https://stylewithsoco.substack.com/" class="link-btn">
          <div class="btn-content">
            <span class="btn-text">SUBSTACK</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>
        
        <a href="https://www.instagram.com/accounts/suspended/?next=https%3A%2F%2Fwww.instagram.com%2Fstylewithsoco%2F%3F__coig_ufac%3D1#" class="link-btn">
          <div class="btn-content">
            <span class="btn-text">INSTA</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>
        
        <a href="https://www.tiktok.com/@socosophsoco" class="link-btn">
          <div class="btn-content">
            <span class="btn-text">TIK TOK</span>
          </div>
          <i class="fa fa-ellipsis-v button-dots"></i>
        </a>

        <div class="d-flex justify-content-center align-items-center" style="margin-top: 30px ;" >
            <button class="btn linktree-btn d-inline-flex align-items-center gap-2 px-4 py-2 shadow">
                <span class="icon-star">✱</span>
                Join stylewithsoco on Linktree
              </button>
          </div>
      </div>

      <!-- Shop Section -->
      <div class="link-section" id="shop">

        <div class="mini-title" style="margin-top:0%; font: size 13px; font-weight: 500;">Products may contain affiliate links</div>

        
        <!-- Product Collection Card -->
<div class="product-collection">
    <div class="product-images">
      <div class="product-image">
        <img src="./tugas2pic1.png" alt="Black Bag">
      </div>
      <div class="product-image">
        <img src="./tugas2pic2.png" alt="Pink Luggage">
      </div>
      <div class="product-image">
        <img src="./tugas2pic3.png" alt="Purple Headphones">
      </div>
    </div>
    <div class="collection-details">
      <h4 class="collection-title">PARIS TRIP ESSENTIALS</h4>
      <p class="product-count">17 Products</p>
      <i class="fa fa-ellipsis-v dots-menu"></i>
    </div>
  </div>
        
       

        <div class="product-collection" ">
            <div class="product-images">
              <div class="product-image">
                <img src="tugas2pic4.png" alt="Black Bag">
              </div>
              <div class="product-image">
                <img src="tugas2pic5.png" alt="Pink Luggage">
              </div>
              <div class="product-image">
                <img src="tugas2pic6.png" alt="Purple Headphones">
              </div>
            </div>
            <div class="collection-details">
              <h4 class="collection-title">HOLIDAY COZIES GIFT GUIDE</h4>
              <p class="product-count">20 Products</p>
              <i class="fa fa-ellipsis-v dots-menu"></i>
            </div>
          </div>
        
      
        <div class="product-collection">
            <div class="product-images">
              <div class="product-image">
                <img src="./tugas2pic7.png" alt="Black Bag">
              </div>
              <div class="product-image">
                <img src="./tugas2pic8.png" alt="Pink Luggage">
              </div>
              <div class="product-image">
                <img src="./tugas2pic9.png" alt="Purple Headphones">
              </div>
            </div>
            <div class="collection-details">
              <h4 class="collection-title">OUTERWEAR STAPLES</h4>
              <p class="product-count">4 Products</p>
              <i class="fa fa-ellipsis-v dots-menu"></i>
            </div>
          </div>

        

          <div class="product-collection">
            <div class="product-images">
              <div class="product-image">
                <img src="./tugas2pic10.png" alt="Black Bag">
              </div>
              <div class="product-image">
                <img src="./tugas2pic11.png" alt="Pink Luggage">
              </div>
              <div class="product-image">
                <img src="./tugas2pic12.png" alt="Purple Headphones">
              </div>
            </div>
            <div class="collection-details">
              <h4 class="collection-title">JEWELRY/ACCESSORY STAPLES</h4>
              <p class="product-count">13 Products</p>
              <i class="fa fa-ellipsis-v dots-menu"></i>
            </div>
          </div>

          <div class="product-collection">
            <div class="product-images">
              <div class="product-image">
                <img src="./tugas2pic13.png" alt="Black Bag">
              </div>
              <div class="product-image">
                <img src="./tugas2pic14.png" alt="Pink Luggage">
              </div>
              <div class="product-image">
                <img src="./tugas2pic15.png" alt="Purple Headphones">
              </div>
            </div>
            <div class="collection-details">
              <h4 class="collection-title">DENIM STAPLES</h4>
              <p class="product-count">10 Products</p>
              <i class="fa fa-ellipsis-v dots-menu"></i>
            </div>
          </div>

          <div class="product-collection">
            <div class="product-images">
              <div class="product-image">
                <img src="./tugas2pic16.png" alt="Black Bag">
              </div>
              <div class="product-image">
                <img src="./tugas2pic17.png" alt="Pink Luggage">
              </div>
              <div class="product-image">
                <img src="./tugas2pic18.png" alt="Purple Headphones">
              </div>
            </div>
            <div class="collection-details">
              <h4 class="collection-title">SHOE STAPLES</h4>
              <p class="product-count">26 Products</p>
              <i class="fa fa-ellipsis-v dots-menu"></i>
            </div>
          </div>

          <div class="d-flex justify-content-center align-items-center" >
            <button class="btn linktree-btn d-inline-flex align-items-center gap-2 px-4 py-2 shadow">
                <span class="icon-star">✱</span>
                Join stylewithsoco on Linktree
              </button>
          </div>
          
          
          

      </div>
    </div>
  </div>

  <script>
    const tabs = document.querySelectorAll('.tab-btn');
    const sections = document.querySelectorAll('.link-section');

    tabs.forEach(btn => {
      btn.addEventListener('click', () => {
        tabs.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        sections.forEach(s => s.classList.remove('active'));
        const target = document.getElementById(btn.dataset.target);
        if (target) target.classList.add('active');
      });
    });
    
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>