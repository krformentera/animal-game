<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game 5</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #efd827;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 50em;
            min-height: 100vh;
            background-color: #ffffff;
            padding: 3em 2em 1em;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 0.8em;
        }

        h3 {
            text-align: center;
            margin-bottom: 1em;
            font-size: 1.5em;
            font-weight: 600;
            color: #010c39;
        }

        #timer {
            text-align: center;
            font-size: 1.5em;
            font-weight: 600;
            color: #010c39;
            margin-bottom: 1em;
        }

        .draggable-objects,
        .drop-points {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 1em;
        }

        .draggable-image {
            width: 6em;
            margin-bottom: 1em;
            cursor: move;
        }

        img {
            width: 4em;
            filter: drop-shadow(0 0.3em 0.9em rgba(0, 0, 0, 0.25));
        }

        .countries {
            width: 6em;
            height: 6em;
            display: grid;
            place-items: center;
            border: 0.20em dashed #010c39;
            border-radius: 0.4em;
            margin-bottom: 1em;
        }

        .dropped {
            padding: 0;
            background-color: #e5ffc8;
        }

        .controls-container {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            background-color: #efd827;
            flex-direction: column;
            top: 0;
        }

        .controls-container button {
            font-size: 1.12em;
            padding: 0.8em 1em;
            border-radius: 0.2em;
            border: none;
            outline: none;
            color: #ffffff;
            background-color: #010c39;
            letter-spacing: 0.06em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .controls-container button:hover {
            background-color: #020f5a;
        }

        .controls-container p {
            color: #ffffff;
            font-size: 2em;
            margin-bottom: 1em;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Stage 5</h3>
        <div id="timer"></div>
        <h3>Drag & Drop the Animals</h3>
        <div class="draggable-objects"></div>
        <div class="drop-points"></div>
    </div>
    <div class="controls-container">
        <p id="result"></p>
        <button id="start">Start Stage 5</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="s5.js"></script>
</body>

</html>