<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Play - Catch and Match</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Montserrat:700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ef2784, #020f5a);
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            color: #010c39;
            height: 100vh;
        }

        .container {
            display: grid;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2em;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2em;
            border-radius: 0.8em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-family: "Montserrat", sans-serif;
            font-size: 2.2em;
            margin-bottom: 0.5em;
            color: #010c39;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 1.5em;
            margin-top: 1.5em;
        }

        .step {
            background-color: #ffffff;
            padding: 1.2em;
            border-radius: 0.8em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .step:hover {
            transform: translateY(-5px);
        }

        .step-icon {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        .step-title {
            font-size: 1.1em;
            font-weight: 600;
            margin-bottom: 0.5em;
        }

        .step-description {
            font-size: 0.9em;
            line-height: 1.4em;
            margin-bottom: 1em;
        }

        .step-image {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin: 0 auto;
            display: block;
            border-radius: 0.4em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
        }

        .button {
            display: block;
            width: 200px;
            height: 30px;
            margin: 1.5em auto 0;
            padding: 0.8em 1.5em;
            font-size: 1.1em;
            text-align: center;
            color: #ffffff;
            background-color: #010c39;
            border: none;
            border-radius: 0.4em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .button:hover {
            background-color: #020f5a;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>How to Play - Catch and Match</h1>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">🐾</div>
                    <div class="step-title">Step 1</div>
                    <div class="step-description">Choose an animal from the available options.</div>
                    <img class="step-image" src="./images/step1.png" alt="Step 1">
                </div>
                <div class="step">
                    <div class="step-icon">🎯</div>
                    <div class="step-title">Step 2</div>
                    <div class="step-description">Drag the animal to the corresponding box.</div>
                    <img class="step-image" src="./images/step2.png" alt="Step 2">
                </div>
                <div class="step">
                    <div class="step-icon">✔️</div>
                    <div class="step-title">Step 3</div>
                    <div class="step-description">Release the animal in the correct box to make a match.</div>
                    <img class="step-image" src="./images/step3.png" alt="Step 3">
                </div>
                <div class="step">
                    <div class="step-icon">🌟</div>
                    <div class="step-title">Step 4</div>
                    <div class="step-description">Repeat the process until all animals are matched correctly.</div>
                    <img class="step-image" src="./images/step4.png" alt="Step 4">
                </div>
            </div>
            <a href="game1.php" class="button">Start Playing</a>
        </div>
    </div>
</body>

</html>