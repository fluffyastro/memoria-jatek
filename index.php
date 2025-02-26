<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Memória és Figyelem Javító</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Memória és Figyelem Javító Játék</h1>
    <div id="game">
      <p id="instructions">Válassz egy nehézségi szintet és nyomj a 'Start' gombra!</p>
      <label for="difficulty">Nehézség:</label>
      <select id="difficulty">
        <option value="3">3 számjegy</option>
        <option value="4">4 számjegy</option>
        <option value="5">5 számjegy</option>
      </select>
      <button id="start" value="0" name="start">Start</button>
      <div id="numberDisplay">
        </div>
      <div id="inputSection">
        <input type="number" id="userInput" placeholder="Írd be a számokat">
        <button id="submit">Ellenőrzés</button>
      </div>
      <p id="result"></p>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
