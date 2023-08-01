<!-- gallery.php -->
<?php @include 'stylesheet.php';?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GEiST - Gallery</title>

    <style>
        /* Custom styles for the gallery */
        body {
            font-family: Arial, sans-serif;
        }

        .gallery-item {
            max-width: 300px;
            margin: 20px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }

        .gallery-img {
            width: 100%;
            height: 200px; /* Adjust the height of the images as needed */
            object-fit: cover; /* Make sure the image fills the container without stretching */
            border: 1px solid #ccc;
            border-radius: 10px;
            border-color: brown;
            margin-bottom: 10px;
        }

        .gallery-desc {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <?php @include 'navbar.php';?> 
    <div class="container mt-5 mb-3">
        <!-- Add your gallery content here -->
        <div class="gallery-item">
            <img src="Godr.png" alt="Photo 1" class="gallery-img">
            <div class="gallery-desc">DALLE: God'r </div>
        </div>

        <div class="gallery-item">
            <img src="Gergioues.png" alt="Photo 2" class="gallery-img">
            <div class="gallery-desc">DALLE: Tawehado Saint George</div>
        </div>

        <!-- Add more gallery items as needed -->
        <!-- ... -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
