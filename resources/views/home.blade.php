@extends('layout.layout')

@section('content')
    <style>
        .hero {
            height: 973px;
            background: url('/images/hero-image.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 2rem;
        }

        .hero h1 {
            color: #245288;
            font-size: 6rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 600px;
        }

        .mission {
            height: 973px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            padding: 2rem;
            background-color: #245288;
            color: white;
        }

        /*MISSION*/
        .mission .mission-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding-left: 4rem;
            gap: 30px;

        }

        .mission .text p {
            line-height: 1.4;
        }

        .mission .text {
            flex: 1;
            margin-right: 30px;
            font-size: 20px;
            text-align: justify;
        }

        .mission .text h2 {
            margin-bottom: 1rem;
            font-size: 48px;

        }

        .mission .text ul {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            padding: 0.5rem 5%;
        }

        .mission .text ul li {
            margin-bottom: 0.5rem;

        }

        .mission .image {
            flex: 1;
            display: flex;
            justify-content: center;
            padding-left: 30px;
            width: 763px;
            height: 753px;
        }

        .mission .image img {
            width: 100%;
            height: auto;
        }

        /*CUSTOM*/
        .custom {
            height: 973px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 100px;
        }

        .text-left, .text-right h2 {
            font-size: 32px;

        }

        .text-left, .text-right {
            width: 382px;
            height: 382px;
            font-size: 16px;
            flex: 1;
            padding: 20px;
            border-radius: 16px;
        }

        .text-left {
            background-color: #D3DCE7;
            color: #245288;
        }

        .text-right {
            background-color: #6586AB;
            color: white;
        }

        .custom .image img {
            width: 436px;
            height: 560px;
        }


        .solja {
            background-color: #245288;
            height: 973px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .solja-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 80px;
            width: 80%;
        }

        .solja-image img {
            width: 763px;
            height: 780px;
        }

        .solja-text {
            font-weight: 500;
            line-height: 24px;
            padding-left: 20px;
        }

        .solja-text h1 {
            font-size: 48px;
            color: white;
        }

        .solja-text p {
            font-size: 20px;
            color: white;
        }

        .kvadrati {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .kvadrat {
            width: 180px;
            height: 180px;
            background-color: #6586AB;
            border-radius: 10px;
        }


        .solje {
            color: #245288;

        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-content: center;
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .products-container a {
            text-decoration: none;
        }

        .product-card {

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #245288;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 16px;
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-details {
            margin-top: 10px;
            text-align: left;
        }

        .product-name {
            font-size: 24px;
            color: #245288;
            font-weight: bold;
            margin: 0;
        }

        .product-category {
            font-size: 16px;
            color: #245288;
            margin-top: 5px;
        }

        .product-price {
            font-size: 24px;
            color: #245288;
            font-weight: bold;
            margin-top: 10px;
        }

        .cart-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-btn i {
            margin-right: 5px;
        }


    </style>

    <section class="hero">
        <h1>VAŠA OMILJENA ŠOLJICA</h1>
    </section>

    <section class="mission" id="about">
        <div class="mission-content">
            <div class="text">
                <h2>NAŠA MISIJA</h2>
                <p>Dobrodošli u Moju Šoljicu, vaš omiljeni online shop za personalizovane šolje! Naša misija je da vam
                    pružimo jedinstvene i kvalitetne šolje koje će ulepšati svaki vaš dan. Štampamo na šoljama po vašoj
                    želji, sa vašim omiljenim dizajnom, slikama i porukama. Tu smo da vam pomognemo da kreirate vašu
                    idealnu šoljicu! Da svaki vaš gutljaj bude čista perfekcija.</p>
                <h3>Prednosti Moje Šoljice</h3>
                <ul>
                    <li>Kvalitetni Materijal</li>
                    <li>Brza Dostava</li>
                    <li>Prilagodljive Količine</li>
                    <li>Unikatni Dizajn</li>
                    <li>Dugoročna Izdržljivost</li>
                    <li>Savršen Poklon</li>
                </ul>
            </div>
            <div class="image">
                <img src="{{ asset('images/mug_image.png') }}" alt="Šolja"/>
            </div>
        </div>
    </section>

    <section class="custom" id="custom">
        <div class="content">
            <div class="text-left">
                <h2>IZABERITE MODEL SVOJE ŠOLJICE</h2>
                <p>Istrazite nasu kolekciju soljica i pronadjite onu koja vam najvise odgovara. Bez obzira na priliku,
                    imamo soljicu za vas. Izaberite svoju omiljenu soljicu vec danas!</p>
                <a href="#proizvodi" class="arrow-link">
                    <span>PREKO 100 PROIZVODA</span>

                </a>
            </div>
            <div class="image">
                <img src="{{ asset('images/solja2.png') }}" alt="Šolja"/>
            </div>
            <div class="text-right">
                <h2>KREIRAJTE SVOJU IDEALNU ŠOLJICU</h2>
                <p>Personalizujte svoju soljicu sa dizajnom po vasoj zelji. Nas jednostavan alat vam omogucava da
                    kreirate soljicu koja savrseno odgovara vama. Napravite svoju soljicu odmah.</p>
                <a href="#proizvodi" class="arrow-link">
                    <span>DODAJTE SVOJ DIZAJN</span>
                </a>
            </div>
        </div>
    </section>

    <section class="solja">
        <div class="solja-content">
            <div class="solja-image">
                <img src="{{ asset('images/solja3.png') }}" alt="Šolja"/>
            </div>
            <div class="solja-text">
                <h1>VAŠA ŠOLJICA - VAŠ IZBOR</h1>
                <p>Moja Šoljica nudi širok izbor šolja koje možete personalizovati po vašem ukusu. Naše šolje su
                    izrađene od visokokvalitetnih materijala, što ih čini savršenim poklonom koji je idealan za
                    svakodnevnu upotrebu ili kao dodatak vašem domu ili kancelariji. Poručite svoju unikatnu šoljicu
                    sada!</p>
                <div class="kvadrati">
                    <div class="kvadrat"></div>
                    <div class="kvadrat"></div>
                    <div class="kvadrat"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="solje" id="solje">
        <h1> POFLEDAJ PONUDU MODELA </h1>
        <div class="products-container">
            @foreach($products as $product)
                <a href="{{ route('product.show', $product->id) }}" class="product-link">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/solja2.png') }}" alt="Šolja"/>
                        </div>
                        <div class="product-details">
                            <h3 class="product-name">{{$product->name}}</h3>
                            <p class="product-category">{{ $product->category ? $product->category->name : 'No category' }}</p>
                            <p class="product-price">{{$product->price}} RSD</p>
                        </div>
                        <div class="product-cart">
                            <button class="cart-btn">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </section>

@endsection
