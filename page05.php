<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Miguel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('path_to_your_background_image.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile {
            position: relative;
            display: inline-block;
        }
        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
        .title {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
            color: #4e2e8e;
        }
        .status {
            margin: 10px 0;
            font-size: 1em;
            color: #000;
        }
        .options {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }
        .option {
            width: 48%;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }
        .option.wifi {
            background: #d474d4;
        }
        .option.info {
            background: #5eabff;
        }
        .option.contact {
            background: #b2b2b2;
        }
        .option.contactos {
            background: #76b0a8;
        }
        .footer {
            margin-top: 10px;
            font-size: 0.8em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="path_to_profile_image.jpg" alt="Profile Picture">
        </div>
        <div class="title">Victor Miguel si el titulo es grande como hacemos</div>
        <div class="status">se guardo bien1234</div>
        <div class="options">
            <div class="option wifi">wi-fi</div>
            <div class="option info">info</div>
            <div class="option contact">contact</div>
            <div class="option contactos">contactos</div>
        </div>
        <div class="footer">Développé par techsysprogram</div>
    </div>
</body>
</html>
