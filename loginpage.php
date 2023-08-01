<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>GEiST</title>
   
    <style>
      html {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: brown;
        background-image: url('kantvshegel2.png');
     
      }

      .container {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        background-color: bisque;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        max-width: 400px; /* Adjusted max-width */
      }

      .container h1 {
        color: brown; /* Updated color */
        font-family: 'Times New Roman', Times, serif, sans-serif;
        font-size: 60px;
        margin-top: 2px;
        margin-bottom: 2px;

      }

      .container input {
        margin-bottom: 15px; /* Adjusted margin */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        background-color: blanchedalmond;
        max-width: 300px;
      }

      .container button {
        padding: 10px 20px;
        border: outset;
        border-color: gray;
        border-radius: 5px;
        background-color: black;
        color: white;
        cursor: pointer;
      }
    </style>
  </head>
  
  <body>
    <div class="container">
      <h1>GE<u>i</u>ST</h1> <!-- Updated heading -->
      
      <form>
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <button type="submit">Register for Newsletter</button> <!-- Updated button text -->
      </form>
    </div>
  </body>
</html>
