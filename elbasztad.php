<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Memória és Figyelem Javító</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "";

        $conn = new mysqli($server, $username, $password, $dbname);

        if($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }
        
        
        $name = $_POST['name'];
        $score = $_POST['score']; 
        
        
        $sql_create = "CREATE DATABASE IF NOT EXISTS game_data";
        $sql_xd = "USE game_data";
        $sql_table = "CREATE TABLE IF NOT EXISTS scores (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255),
            score INT
        )";

        $conn->query($sql_create);
        $conn->query($sql_xd);
        $conn->query($sql_table); 
    ?>
  <div class="container">
    <h1>Memória és Figyelem Javító Játék</h1>
    <div id="game">
      <p id="instructions">Vesztettél!</p>
      <form action="elbasztad.php" method="POST">
      Név: <input type="text" name="name" value="<?php echo $name; ?>"><br>
      Szám: <input type="text" name="score" value="<?php echo $score; ?>"><br>
      <button type="submit">Elmentés</button>
      </form>
      </div>
      <p id="result"></p>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
