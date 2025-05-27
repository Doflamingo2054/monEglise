<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.global-style')
    <title>Accueil</title>
</head>

<body>
    @include('partials.header')
    <main>
        <div class="don-container">
            <h1>Faites un Don ❤️</h1>
            <p>Merci de soutenir l'œuvre de Dieu. Choisissez un montant :</p>

            <div class="amount-options">
                <button class="amount-btn" data-amount="1000">1000F</button>
                <button class="amount-btn" data-amount="5000">5000F</button>
                <button class="amount-btn" data-amount="10000">10000F</button>
            </div>

            <div class="custom-amount">
                <input type="number" id="customAmount" placeholder="Montant F" min="50"/>
            </div>

            <button class="don-btn" onclick="processDonation()">Faire un don</button>
        </div>

        <div class="yas-container">
            <h4>Moyens de Paiement Disponibles</h4>
            <ul class="payment-methods">
                <li><img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" /> Carte Bancaire</li>
                <li><img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="Mastercard" /> Mastercard</li>
                <li><img src="https://img.icons8.com/fluency/48/000000/phone.png" alt="Mobile Money" /> Mobile Money</li>
            </ul>
        </div>

        <div class="don-animation">
            <div class="coin"></div>
            <div class="coin delay1"></div>
            <div class="coin delay2"></div>
        </div>
    </main>
    @include('partials.footer')

    <style>
        main {
            margin: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .don-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: slideFade 1s ease;
            max-width: 400px;
            width: 100%;
        }

        @keyframes slideFade {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .don-container h1 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .don-container p {
            color: #555;
            margin-bottom: 25px;
        }

        .amount-options {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .amount-btn {
            background-color: #ecf0f1;
            color: #2c3e50;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }

        .amount-btn:hover,
        .amount-btn.active {
            background-color: #3498db;
            color: white;
        }

        .custom-amount {
            margin-top: 10px;
        }

        .custom-amount input {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            width: 100px;
            text-align: center;
        }

        .don-btn {
            margin-top: 25px;
            background: #2ecc71;
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .don-btn:hover {
            background: #27ae60;
        }

        @media (max-width: 500px) {
            .amount-options {
                flex-direction: column;
                align-items: center;
            }

            .custom-amount input {
                width: 80%;
            }
        }

        .yas-container {
            background: #ffffff;
            border-radius: 24px 24px 24px 48px;
            padding: 48px;
            width: 400px;
            box-shadow: 5px 0 0 0 rgba(204, 204, 204, 0.3), -5px 0 0 0 rgba(204, 204, 204, 0.3), 0 5px 0 0 rgba(204, 204, 204, 0.3);
            font-family: 'Poppins', sans-serif;
            right: 50px;
            top: 180px;
        }

        .yas-container h4 {
            margin-top: 0;
            font-size: 1.3em;
            color: #2c3e50;
            text-align: center;
        }

        .payment-methods {
            list-style: none;
            padding: 0;
            margin-top: 30px;
        }

        .payment-methods li {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 18px 0;
            font-size: 1em;
            color: #333;
        }

        .payment-methods img {
            width: 40px;
            height: 40px;
        }

        .don-animation {
            position: absolute;
            top: 200px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            width: 100px;
            height: 300px;
            pointer-events: none;
        }

        .coin {
            width: 30px;
            height: 30px;
            background: red;
            clip-path: polygon(50% 15%,
                    61% 0%,
                    75% 0%,
                    88% 12%,
                    88% 30%,
                    75% 45%,
                    50% 70%,
                    25% 45%,
                    12% 30%,
                    12% 12%,
                    25% 0%,
                    39% 0%);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            animation: drop 3s infinite ease-in;
            opacity: 0.8;
        }


        .coin.delay1 {
            animation-delay: 1s;
        }

        .coin.delay2 {
            animation-delay: 2s;
        }

        @keyframes drop {
            0% {
                top: 0;
                opacity: 0;
                transform: translateX(-50%) scale(0.5);
            }

            30% {
                opacity: 1;
                transform: translateX(-50%) scale(1.1);
            }

            100% {
                top: 100%;
                opacity: 0;
                transform: translateX(-50%) scale(0.7);
            }
        }

        .donation-link {
            font-weight: bold;
            color: #f5b342;
        }

        .donation-link:hover {
            color: #ff9800;
        }
    </style>
    <script>
        const amountButtons = document.querySelectorAll('.amount-btn');
        const customAmountInput = document.getElementById('customAmount');

        amountButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                amountButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                customAmountInput.value = '';
            });
        });

        customAmountInput.addEventListener('input', () => {
            amountButtons.forEach(b => b.classList.remove('active'));
        });

        function processDonation() {
            let selectedAmount = document.querySelector('.amount-btn.active');
            let customAmount = customAmountInput.value;

            let amount = selectedAmount ? selectedAmount.dataset.amount : customAmount;
            let lien = "https://www.pay.moneyfusion.net/meme_1736629721259/";
            window.location.href = lien;

            if (!amount || amount <= 0) {
                alert("Veuillez sélectionner ou entrer un montant valide.");
                return;
            }
        }
    </script>
</body>

</html>