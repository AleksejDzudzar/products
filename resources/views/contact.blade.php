@extends('layout.layout')

@section('content')
    <style>

        .hero {
            height: 973px;
            background: url('/images/hero3-image.jpg') no-repeat center center/cover;
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

        .container {
            height: 973px;
            max-width: 100%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            grid-template-areas:
        "title title"
        "inputs message"
        "checkbox button";
            gap: 20px;
        }

        h1 {
            color: #245288;
            font-size: 64px;
            margin-bottom: 20px;
            grid-area: title;
        }

        form {
            display: contents;
        }

        form input, form textarea {
            width: 100%;
            padding: 10px;
            font-size: 24px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            outline: none;
            transition: border-color 0.3s ease;
        }

        form input:focus, form textarea:focus {
            border-bottom: 1px solid #245288;
        }

        form input::placeholder,
        form textarea::placeholder {
            color: #245288;
        }

        .inputs {
            font-size: 24px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            grid-area: inputs;
        }

        .message {
            grid-area: message;
        }

        form textarea {
            resize: none;
            height: 200px;
            font-size: 18px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            gap: 10px;
            margin-top: 20px;
        }

        .submit-button {
            grid-area: button;
            text-align: right;
        }

        .submit-button button {
            padding: 10px 20px;
            background-color: #245288;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

    </style>

    <section class="hero">
        <h1>UKOLIKO IMATE BILO KAKVO PITANJE MOLIMO VAS DA NAS KONTAKTIRATE</h1>
    </section>

    <div class="container">
        <h1>KONTAKTIRAJTE NAS</h1>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="inputs">
                <input type="text" name="ime" placeholder="Ime" required>
                <input type="text" name="prezime" placeholder="Prezime" required>
                <input type="email" name="email" placeholder="Email adresa" required>
            </div>

            <textarea class="message" name="poruka" placeholder="Vaša poruka" required></textarea>

            <div class="checkbox-container">
                <input type="checkbox" name="obavestenja" id="obavestenja">
                <label for="obavestenja">Saglasan / na sam da primam obaveštenja na email adresu</label>
            </div>

            <div class="submit-button">
                <button type="submit">Pošaljite poruku</button>
            </div>
        </form>
    </div>



@endsection
