<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Šoljica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<style>
    /*NAV*/
    body {
        margin: 0;
        font-family: Montserrat;
        line-height: 1.6;
        text-decoration: none;
    }

    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 2rem 5%;
    }

    .navbar .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #007bff;
    }

    .navbar .logo span {
        color: #0056b3;
    }

    .navbar .nav-links {
        list-style: none;
        display: flex;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }

    .navbar .nav-links li a {
        text-decoration: none;
        color: white;
        font-size: 24px;
        transition: color 0.3s;
    }

    .navbar .nav-links li a:hover {
        color: #007bff;
    }

    .navbar .nav-icons {
        display: flex;
        gap: 0.5rem;
    }

    .icon-btn, .cta-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
    }

    /* Stilizovanje malog pravougaonika ispod dugmeta korpe */
    .cart-preview {
        position: absolute;
        top: 50px; /* Pozicija ispod dugmeta */
        right: 10px;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        border-radius: 5px;
        width: 250px;
        display: none; /* Početno sakriveno */
        z-index: 1000;
        max-height: 300px;
        overflow-y: auto;
    }

    .cart-item {
        margin-bottom: 0.5rem;
        font-size: 14px;
        color: #333;
    }

    .cart-item strong {
        font-weight: bold;
    }


    .icon-btn {
        background: none;
        font-size: 1.2rem;
    }

    .cta-btn {
        background: #007bff;
        color: #fff;
        font-weight: bold;
        transition: background 0.3s;
    }

    .cta-btn:hover {
        color: #245288;
    }

    .shopping-cart-button, .user-button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
    }

    .cart-preview {
        position: absolute;
        top: 60px; /* Ispod ikone korpe */
        right: 20px;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        border-radius: 5px;
        width: 300px;
        display: none; /* Početno sakriveno */
        z-index: 1000;
        max-height: 300px;
        overflow-y: auto;
    }

    .cart-item {
        margin-bottom: 0.5rem;
        font-size: 14px;
        color: #333;
    }

    .total {
        margin-top: 1rem;
        text-align: right;
        font-weight: bold;
    }


    .footer {
        background-color: #245288;
        color: #fff;
        padding: 2rem 5%;
        font-size: 1rem;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .footer-logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .footer-logo span {
        color: #cce4ff;
    }

    .footer-links {
        list-style: none;
        display: flex;
        gap: 1.5rem;
    }

    .footer-links li a {
        color: #fff;
        font-size: 1rem;
        transition: color 0.3s;
    }


    .footer-links li a:hover {
        color: #cce4ff;
    }

    .footer-social {
        display: flex;
        gap: 1rem;
    }

    .social-icon {
        color: #fff;
        font-size: 1rem;
        transition: color 0.3s;
    }

    .social-icon:hover {
        color: #cce4ff;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 2rem;
        border-top: 1px solid #cce4ff;
        padding-top: 1rem;
    }

    .footer-bottom p {
        margin: 0;
        font-size: 0.9rem;
        text-align: center;
    }

    .footer-policy {
        display: flex;
        gap: 1rem;
    }

    .footer-policy li a {
        font-size: 0.9rem;
        color: #fff;
    }

    .footer-policy li a:hover {
        color: #cce4ff;
    }
</style>
<script>
    function toggleCart() {
        const cartPreview = document.getElementById("cart-preview");
        if (cartPreview.style.display === "block") {
            cartPreview.style.display = "none";
        } else {
            cartPreview.style.display = "block";
        }
    }

    // Zatvori dropdown ako korisnik klikne van njega
    window.onclick = function (event) {
        const cartPreview = document.getElementById("cart-preview");
        if (!event.target.closest('.shopping-cart-button') && !event.target.closest('#cart-preview')) {
            cartPreview.style.display = "none";
        }
    }
</script>


<body>
<header>
    <nav class="navbar">
        <a href="/">
            <img src="images/logo12.png" alt="Moja Šoljica" style="height: 50px; width: auto;"> </a>
        <ul class="nav-links">
            <li><a href="/about">O Nama</a></li>
            <li><a href="/shop">Proizvodi</a></li>
            <li><a href="/contact">Kontakt</a></li>
        </ul>
        <div class="nav-icons">
            <button class="user-button">
                <i class="fas fa-user"></i>
            </button>
            <button class="shopping-cart-button" onclick="toggleCart()">
                <i class="fas fa-shopping-cart"></i>
            </button>

            <!-- Mali pravougaonik koji prikazuje sadržaj korpe -->
            <div id="cart-preview" class="cart-preview">
                <div id="cart-container">
                    @if(isset($cart) && count($cart) > 0)
                        @foreach($cart as $id => $item)
                            <div class="cart-item">
                                <strong>{{ $item['name'] }}</strong> -
                                {{ $item['quantity'] }} x {{ $item['price'] }} RSD
                            </div>
                        @endforeach
                        <hr>
                        <div class="total">
                            <strong>Ukupno:</strong>
                            {{ number_format(array_sum(array_map(function($item) {
                                return $item['quantity'] * $item['price'];
                            }, $cart)), 2) }} RSD
                        </div>
                    @else
                        <p>Vaša korpa je prazna.</p>
                    @endif
                </div>
            </div>

            <button class="cta-btn">Napravi Šoljicu</button>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
<footer class="footer">
    <div class="footer-content">
        <img src="images/logo12.png" alt="Moja Šoljica" style="height: 50px; width: auto;">
        </a>
        <ul class="footer-links">
            <li><a href="/about">O Nama</a></li>
            <li><a href="#products">Proizvodi</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
        <div class="footer-social">
            <a href="#" class="social-icon">
                <img src="images/ig.png" alt="Instagram" style="height: 30px; width: auto;">
            </a>
            <a href="#" class="social-icon">
                <img src="images/fb.png" alt="Facebook" style="height: 30px; width: auto;">
            </a>
            <a href="#" class="social-icon">
                <img src="images/tiktok.png" alt="TikTok" style="height: 30px; width: auto;">
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © MojaŠoljica 2023</p>
        <ul class="footer-policy">
            <li><a href="#">Uslovi Korišćenja</a></li>
            <li><a href="#">Politika Privatnosti</a></li>
        </ul>
    </div>
</footer>


</html>
