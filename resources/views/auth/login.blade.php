@extends('layout.app')

@section('title', 'Login')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('images/auth-hero.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }

        .login-box {
            text-align: center;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 1rem;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px #007BFF;
        }

        .forgot-password {
            display: block;
            text-align: right;
            color: #007BFF;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .no-account {
            margin: 1rem 0 0.5rem;
            font-size: 0.9rem;
        }

        .social-buttons button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin: 0.5rem 0;
            cursor: pointer;
            font-size: 1rem;
            color: white;
        }

        .facebook-button {
            background-color: #4267B2;
        }

        .facebook-button:hover {
            background-color: #365899;
        }

        .google-button {
            background-color: #DB4437;
        }

        .google-button:hover {
            background-color: #C1351D;
        }


    </style>
    <div class="login-container">
        <div class="login-box">
            <h2>LOG IN</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Lozinka" required>
                </div>
                <a href="#" class="forgot-password">Zaboravljena Lozinka</a>
                <button type="submit" class="login-button">Prijavite se</button>
            </form>
                <a href="/register">
                    <p class="no-account">Nemate account?</p>
                    <div class="social-buttons">
                        <button class="facebook-button">Continue with Facebook</button>
                        <button class="google-button">Continue with Google</button>
                    </div>

        </div>
    </div>
