<?php
    $courses = [
        [
            "name" => "PHP",
            "description" => "PHP is a server-side programming language and free and open-source software.",
            "price" => 10000,
            "img_url" => "assets/images/php.png",
            "seat_left" => 10
        ],
        [
            "name" => "Java",
            "description" => "Java is a programming language and a platform.",
            "price" => 20000,
            "img_url" => "assets/images/java.png",
            "seat_left" => 5
        ],
        [
            "name" => "Python",
            "description" => "Python is a widely used high-level, general-purpose, interpreted, dynamic programming language.",
            "price" => 30000,
            "img_url" => "assets/images/python.png",
            "seat_left" => 3       
        ],  
    ];
    $total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: azure;
        }
        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($courses as $course): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?= $course["img_url"] ?>" class="card-img-top" alt="<?= $course["name"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $course["name"] ?></h5>
                            <p class="card-text"><?= $course["description"] ?></p>
                            <p class="card-text"><strong>Price:</strong> <?= $course["price"] ?> Kyats</p>
                            <p class="card-text"><small class="text-muted">Seats Left: <?= $course["seat_left"] ?></small></p>
                        </div>
                    </div>
                </div>
                <?php $total += $course["price"]; ?>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <h4><b>Total:</b> <?= $total ?> Kyats</h4>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>