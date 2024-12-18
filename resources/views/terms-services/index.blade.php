@extends('layout.layout')

@section('content')

    <style>
        .container {
            max-width: 80%;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }


        h1 {
            font-size: 64px;
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }


        h2 {
            font-size: 64px;
            color: #0056b3;
            margin-top: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
        }


        p {
            font-size: 32px;
            color: #245288;
            margin: 10px 0;
        }

    </style>

    <div class="container">
        <h1>Terms and Conditions</h1>

        <h2>Introduction</h2>
        <p>Welcome to our website. By accessing this website, you agree to comply with and be bound by the following
            terms and conditions. If you do not agree with any part of these terms, you may not access the website or
            use its services.
        </p>

        <h2>Services Offered</h2>
        <p>We offer various services, including but not limited to consulting, software development, and digital content
            delivery. The specific details of the services are outlined on our website.</p>

        <h2>Payment and Billing</h2>
        <p>All payments for services must be made in full before services are rendered, unless otherwise specified. We
            accept various payment methods, including credit cards, debit cards, and online payment systems. By
            providing your payment information, you authorize us to charge the applicable amount.</p>

        <h2>Refund Policies</h2>
        <p>
            We have a strict refund policy:<br>
            - Refunds are available within 7 days of purchase.<br>
            - No refunds after services have been delivered.<br>
        </p>

        <h2>Intellectual Property</h2>
        <p>All content, logos, graphics, and materials on this website are our intellectual property or the intellectual
            property of our licensors. You may not reproduce, distribute, or use any content without prior written
            consent.</p>

        <h2>User Content</h2>
        <p>By submitting content (e.g., comments, files, or messages) to our website, you grant us a worldwide,
            non-exclusive, royalty-free license to use, reproduce, and distribute that content. You represent that you
            have the right to grant this license and that your content does not infringe on any third-party rights.</p>

        <h2>Prohibited Conduct</h2>
        <p>You agree not to:
            <br>
            Use the website for unlawful purposes.<br>
            Post or distribute harmful, obscene, or abusive content.<br>
            Attempt to gain unauthorized access to the website or interfere with its operations.<br>
            Violate the rights of others, including intellectual property rights.<br>
            Engage in fraudulent activities or misrepresent your identity.<br>
        </p>

        <h2>Disclaimer of Warranties</h2>
        <p>Our services and website are provided "as is" and without warranties of any kind, whether express or implied.
            We do not guarantee uninterrupted, error-free, or secure access to the website.</p>

        <h2>Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, we shall not be liable for any indirect, incidental, special, or
            consequential damages arising from your use of this website or our services..</p>

        <h2>Governing Law and Jurisdiction</h2>
        <p>These terms and conditions shall be governed by and construed in accordance with the laws of [Your
            Country/State]. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the
            courts located in [Your City/Region].</p>

        <h2>Miscellaneous</h2>
        <p>If any provision of these terms is found to be unenforceable, the remaining provisions shall remain in full
            force and effect. These terms may be updated or modified at any time, and it is your responsibility to
            review them periodically.</p>


    </div>

@endsection
