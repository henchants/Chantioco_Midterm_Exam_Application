<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorite Games</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e0e0e0;
            margin: 0;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: space-around;
            align-items: flex-start;
        }
        .game-card {
            width: 340px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            margin: 10px;
        }
        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .game-card h3 {
            margin: 15px 0 10px;
            font-size: 1.5em;
        }
        .game-card p {
            margin: 0 15px 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Top Video Games I Enjoy</h1>
    </header>
    <section class="gallery">
        <div class="game-card" title="Apex Legends">
            <img src="{{ $image }}" alt="Apex Legends">
            <h3>{{ $title }}</h3>
            <p>Rating: {{ $rating }}</p>
        </div>
        <div class="game-card" title="Grand Theft Auto V">
            <img src="{{ $image1 }}" alt="GTA V">
            <h3>{{ $title1 }}</h3>
            <p>Rating: {{ $rating1 }}</p>
        </div>
        <div class="game-card" title="Rainbow Six Siege">
            <img src="{{ $image2 }}" alt="Rainbow Six Siege">
            <h3>{{ $title2 }}</h3>
            <p>Rating: {{ $rating2 }}</p>
        </div>
        <div class="game-card" title="Fallout 3">
            <img src="{{ $image3 }}" alt="Fallout 3">
            <h3>{{ $title3 }}</h3>
            <p>Rating: {{ $rating3 }}</p>
        </div>
    </section>
</body>
</html>
