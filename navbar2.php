<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEiSt</title>
</head>
<body>
<div class="navbar">
      <div class="hamburger">
        <span></span>
        <span></span>
      </div>
      <ul>
        <li><a href="#">This Weeks</a></li>
        <li><a href="#">Vosotros</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>  
    
    <script>
      // JavaScript to handle the hamburger menu
      const hamburger = document.querySelector('.hamburger');
      const navbarList = document.querySelector('.navbar ul');

      hamburger.addEventListener('click', function() {
        navbarList.classList.toggle('show');
      });
    </script>
</body>
</html>


