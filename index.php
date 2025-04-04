<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Te Amo Minha Princesa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            font-family: Arial, sans-serif;
            flex-direction: column;
        }
        h1 {
            font-size: 48px;
            color: #ff4d6d;
            display: flex;
            align-items: center;
        }
        .heart {
            font-size: 48px;
            color: red;
            margin-left: 10px;
            animation: pulse 1.5s infinite alternate;
        }
        @keyframes pulse {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <h1>Te amo minha princesa <span class='heart'>❤️</span></h1>
</body>
</html>
";
?>
