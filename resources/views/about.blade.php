@extends('layout.layout')

@section('content')
    <style>



        .hero {
            height: 973px;
            background: url('/images/hero1-image.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 2rem;
        }

        .hero h1 {
            color: white;
            font-size: 64px;
            line-height: 78px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 600px;
        }

        /* About Section */
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 100%;
            height: 973px;
            background-color: #fff;
            overflow: hidden;
            align-items: center;
        }

        .image-section {
            flex: 2;
            display: flex;
        }

        .image-section img {
            height: 773px;
            width: 753px;
            max-width: 120%;
        }

        .text-section {
            flex: 2;
            padding: 40px;
            color: #245288;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-section h1 {
            font-size: 2.5rem;
            color: #245288;
            margin-bottom: 20px;
            text-align: left;
        }

        .text-section p {
            width: 75%;
            font-size: 20px;
            line-height: 24px;
            margin-bottom: 20px;
            text-align: justify;
        }


        .mission {
            background-color: #245288;
            height: 973px;
            display: flex;
            align-items: center;
            max-width: 100%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mission-content {
            justify-content: space-between;
            display: flex;
            align-items: center;
            max-width: 100%;
            padding: 20px;
            gap: 10px;
        }

        .mission .text {
            flex: 1;
            padding: 20px;
            color: white;
            text-align: justify;
            font-size: 20px;
            width: 100%;
            margin-right: 20px;
        }

        .mission .text h2 {
            font-size: 48px;
            margin-bottom: 15px;
            color: #FFFFFF;
        }

        .mission .image {
            flex: 1;
            display: flex;
        }

        .mission .image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .advantage {
            padding: 3rem 1rem;
            background-color: #f9f9f9;
        }

        .image-container {
            flex: 1;
            max-width: 300px;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        h2 {
            font-size: 2rem;
            color: #1B365D;
            margin-bottom: 1.5rem;
        }


        .advantage {
            height: 973px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25rem;
            padding: 2rem;
            margin: 0 auto;
        }

        .image-container img {
            width: 589px;
            height: 507px;
            border-radius: 10px;
            object-fit: cover;
        }

        .text-advantage {
            max-width: 600px;
        }

        .text-advantage h2 {
            font-size: 2rem;
            color: #2a3b72;
            margin-bottom: 1rem;
        }

        .text-advantage p {
            color: #245288;
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

    </style>

    <section class="hero">
        <h1>STRAST ZA PERSONALIZACIJOM SOLJICA,
            KVALITETOM I DIZAJNOM</h1>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="image-section">
                <img src="{{ asset('images/solja3.png') }}" alt="Šolja"/>
            </div>
            <div class="text-section">
                <h1>KAKO JE SVE POČELO</h1>
                <p>Moja Šoljica je počela kao mala online platforma sa velikom strašću za šoljicama. Vremenom smo rasli,
                    ali naša misija je ostala ista – pružiti klijentima jedinstvene i kvalitetne šoljice. Svaka šoljica
                    je izrađena s ljubavlju i pažnjom, kako bi donela radost u svaki gutljaj.</p>
                <p>Naša priča je počela iz želje da svako jutro bude posebno. Moja Šoljica nudi personalizovane šoljice
                    koje pričaju vašu priču. Svaka šoljica je pažljivo izrađena od najkvalitetnijih materijala, sa
                    ciljem da vam pruži jedinstveno iskustvo svakog dana.</p>
                <p>Osnovani smo sa idejom da unesemo radost i kreativnost u svakodnevne trenutke. Moja Šoljica je
                    sinonim za kvalitet i inovaciju u svetu šoljica. Naša posvećenost detaljima i zadovoljstvu klijenata
                    čini svaku našu šoljicu posebnom.</p>
            </div>
        </div>
    </section>

    <section class="mission" id="mission">
        <div class="mission-content">
            <div class="text">
                <h2>SOLJICA NA MISIJI</h2>
                <p>Naša misija je jednostavna: da vam pružimo najlepše i najkvalitetnije personalizovane šoljice.
                    Verujemo da svaka šoljica treba da odražava ličnost i stil svog vlasnika. Zato nudimo širok izbor
                    dizajna i mogućnosti personalizacije, kako biste mogli da kreirate šoljicu koja je savršeno
                    vaša.</p>
                <p>Posvećeni smo kreiranju šoljica koje će vam uljepšati svaki dan. Naša misija je da vam ponudimo
                    šoljice koje nisu samo funkcionalne, već i estetski privlačne. S našim personalizovanim dizajnom,
                    vaša šoljica će biti jedinstvena, baš kao i vi.</p>
                <p>Naša misija jeste da svakom klijentu pružimo vrhunski proizvod i uslugu. Verujemo da svaka šoljica
                    treba da bude unikatna, kao i osoba koja je koristi. Sa Mojom Šoljicom, vaša zadovoljstvo je naš
                    prioritet, a vaša kreativnost naša inspiracija.</p>
            </div>
            <div class="image">
                <img src="{{ asset('images/mug_image.png') }}" alt="Šolja"/>
            </div>
        </div>
    </section>
    <section class="advantage" id="advantage">
        <div class="advantage">
            <div class="image-container">
                <img src="{{ asset('images/advantage_image.png') }}" alt="Šolja"/>
            </div>
            <div class="text-advantage">
                <h2>NAŠA PREDNOST</h2>
                <p>
                    U Mojoj Šoljici, kreativnost je ključ. Naš tim dizajnera je posvećen
                    stvaranju jedinstvenog i privlačnog dizajna koji će vas oduševiti. Bilo da
                    tražite šolju sa modernim, klasičnim ili zabavnim dizajnom, mi imamo
                    nešto za vas. Takođe tu smo da vašu ideju pretvorimo u vašu novu
                    omiljenu šoljicu.
                </p>
                <p>
                    Moja Šoljica se ponosi vrhunskim kvalitetom. Naše šolje su izrađene od
                    najboljih materijala, sa fokusom na dugotrajnost i otpornost. Svaka šolja
                    prolazi strogu kontrolu kvaliteta kako bi osigurala zadovoljstvo naših
                    kupaca. Pružamo šolje koje ne samo da izgledaju dobro, već su i
                    funkcionalne i dugotrajne.
                </p>
                <p>
                    Brza i pouzdana dostava je ono što nas izdvaja. Znamo koliko je važno da
                    vaš proizvod stigne na vreme, zato smo se posvetili tome da vaša šolja
                    bude isporučena brzo i bezbedno. Naš tim za korisničku podršku je uvek
                    tu da odgovori na sva vaša pitanja i reši bilo kakve probleme. Vaše
                    zadovoljstvo je naš prioritet.
                </p>
            </div>
        </div>
    </section>

@endsection
