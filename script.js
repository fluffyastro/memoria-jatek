document.addEventListener("DOMContentLoaded", () => {
    const startButton = document.getElementById("start");
    const submitButton = document.getElementById("submit");
    const numberDisplay = document.getElementById("numberDisplay");
    const userInput = document.getElementById("userInput");
    const result = document.getElementById("result");
    const difficultySelect = document.getElementById("difficulty");
    let numbers = [];
    
    startButton.addEventListener("click", () => {
      const difficulty = parseInt(difficultySelect.value);
      numbers = generateRandomNumbers(difficulty);
      displayNumbers(numbers, 100); //a megadott idő mennyiségig jelennek meg a számok (100 ms-es időtartamig)
      userInput.value = "";
      result.textContent = "";
    });
  
    submitButton.addEventListener("click", () => {
      checkAnswer();
    });
  
    function generateRandomNumbers(amount) {
      const nums = [];
      while (nums.length < amount) {
        const randomNum = Math.floor(Math.random() * 10);
        if (!nums.includes(randomNum)) {
          nums.push(randomNum);
        }
      }
      return nums;
    }
  
    function displayNumbers(numbers, duration) {
      numberDisplay.textContent = numbers.join(" ");
      setTimeout(() => {
        numberDisplay.textContent = "";
      }, duration);
    }
  
    function checkAnswer() {
      const userAnswer = userInput.value.split("").map(Number);
      if (arraysEqual(userAnswer, numbers)) {
        result.textContent = "Helyes!";
        result.style.color = "green";
      } else {
        window.localStorage.setItem("score", numbers.length);
        window.location.replace("elbasztad.php");
      }
    }
  
    function arraysEqual(arr1, arr2) {
      return arr1.length === arr2.length && arr1.every((value, index) => value === arr2[index]);
    }
  });
  