  <?php @include 'navbar.php';?> 
  <?php @include 'header.php';?> 
  <?php @include 'body.php';?> 
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>GEiST</title>

  <style>
    body {
      font-family: 'Times New Roman', Times, serif, sans-serif;
      background-color: brown;
      margin: 0;
      padding: 0px;
      background-image: url('pape.png');
            background-repeat: repeat;
            background-size: inherit;
    }

    .header {
      background-color: brown;
      background-size: contain;
      border-color: goldenrod;
      border-style: solid;
      border-radius: 20px;
      height: 150px;
      width: 300px;
      color: silver;
      padding: 0px;
      margin-left: 525px;
      text-align: center;
      position: relative;
    }

    .header .bigtitle{
      background: none;
    }

    .header .collectbox {
      border-width: 5px;
      border-radius: 2px;
      border-style: double;
      border-color: wheat;
      display: inline-block;
      color: gold;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: goldenrod;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border-style: ridge;
      border-color: brown;
      border-radius: 30px;
    }


    .post {
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid #ccc;
    }


    .post h2 {
      color: brown;
    }

    .post p {
      margin-bottom: 10px;
      color: saddlebrown;
    }

    .post .read-more {
      color: blue;
      text-decoration: wavy;
      font-size: 15px;
    }

    /* New styles for the navbar */
    .navbar {

      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
      padding: 1px;
      border-width: 2px;
      border-style: solid;
      border-color: goldenrod;
    }

    .banner-left {
      float: left;
      position: fixed;
      left: 20px;
      top: 100px;
      width: 250px;
      height: 400px;
      opacity: 0.75;
      background-image: url('PolterGeist2.png');
      background-repeat: no-repeat;
      background-size: cover;
      z-index: 999;
    }

    .banner-right {
      float: right;
      position: sticky;
      right: 20px;
      top: 200px;
      width: 200px;
      height: 300px;
      background-image: url('Philosplosion.gif');
      border-radius: 5px;
      background-repeat: no-repeat;
      background-size: cover;
      z-index: 999;
    }

    @media screen and (max-width: 768px) {
      .banner-left,
      .banner-right {
        position: static;
        width: 100%;
        height: 250px;
        margin-bottom: 20px;
      }
    }

    .navbar-custom {
      background-color: brown;
    }

    .navbar-custom .navbar-brand {
      color: silver;
    }

    .navbar-custom .navbar-nav .nav-link {
      color: silver;
    }

    .navbar-custom .navbar-nav .nav-link:hover {
      color: goldenrod;
    }

    .navbar-custom .form-control {
      border-color: silver;
    }

    .navbar-custom .btn-outline-success {
      color: silver;
      border-color: silver;
    }

    .navbar-custom .btn-outline-success:hover {
      color: goldenrod;
      border-color: white;
    }

    /* Additional styles for creating space at the top */
    body {
      padding-top: 50px; /* Adjust the value based on your needs */
    }

    @media (max-width: 991.98px) {
      body {
        padding-top: 60px; /* Adjust the value based on your needs */
      }
    }

    /* Style for hover effect on GEiST text */
    .navbar-brand:hover {
      color: goldenrod;
    }
  </style>
</head>



</html>
