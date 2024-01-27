<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Guessing Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            color: #fff;
        }
        .card {
            background-color: #001f3f;
            transition: background-color 0.3s ease;
        }
        .card:hover {
            background-color: #4682B4; /* Blue color on hover */
            color: #fff; /* Gray text color on hover */
        }
        .btn-success {
            background-color: #FFD700;
            transition: background-color 0.3s ease;
            color: #fff;
        }
        .btn-success:hover {
            background-color: #000000; /* Black color on hover */
        }
        .separator-row {
            height: 10px;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h1 class="card-title mb-4">Guessing Game</h1>
                        <div id="question" class="font-weight-bold h4 mb-4"></div>
                        <div id="feedback-message" class="mb-4"></div>
                        <input type="text" id="answer-input" class="form-control mb-3" placeholder="Your Answer">
                        <div id="level" class="mb-3"></div>
                        <button id="submit-button" class="btn btn-success btn-block" onclick="submitAnswer()">Submit Answer</button>
                        <div id="score" class="mt-3"></div>
                        <div id="timer" class="mt-3"></div>
                        <div id="answers" class="text-left mt-4">
                            <!-- Tables will go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


  <script>
    const questions = [
     // Easy Level
        { question: "What is the capital of Brazil?", level: "Easy", answer: "Brasilia", score: 5, userAnswer: "" },
        { question: "How many continents are there on Earth?", level: "Easy", answer: "7", score: 5, userAnswer: "" },
        { question: "What is the symbol for the element helium?", level: "Easy", answer: "He", score: 5, userAnswer: "" },
        { question: "Which country is known as the Land of the Rising Sun?", level: "Easy", answer: "Japan", score: 5, userAnswer: "" },
        { question: "What is the chemical symbol for water?", level: "Easy", answer: "H2O", score: 5, userAnswer: "" },

        // Medium Level
        { question: "Who developed the theory of relativity?", level: "Medium", answer: "Albert Einstein", score: 10, userAnswer: "" },
        { question: "What is the capital of Australia?", level: "Medium", answer: "Canberra", score: 10, userAnswer: "" },
        { question: "What is the square root of 144?", level: "Medium", answer: "12", score: 10, userAnswer: "" },
        { question: "Who is the author of 'Pride and Prejudice'?", level: "Medium", answer: "Jane Austen", score: 10, userAnswer: "" },
        { question: "What is the main component of Earth's atmosphere?", level: "Medium", answer: "Nitrogen", score: 10, userAnswer: "" },

        // Difficult Level
        { question: "What is the speed of sound in air?", level: "Difficult", answer: "343 meters per second", score: 15, userAnswer: "" },
        { question: "Who formulated the laws of motion?", level: "Difficult", answer: "Isaac Newton", score: 15, userAnswer: "" },
        { question: "What is the value of pi (π) to two decimal places?", level: "Difficult", answer: "3.14", score: 15, userAnswer: "" },
        { question: "What is the chemical formula for photosynthesis?", level: "Difficult", answer: "C6H12O6", score: 15, userAnswer: "" },
        { question: "Solve for x: 2x + 5 = 15", level: "Difficult", answer: "x = 5", score: 15, userAnswer: "" },
        ];


    let currentQuestionIndex = 0;
    let totalScore = 0;
    let timer;
    let timeRemaining = 120; 

    function startTimer() {
      timer = setInterval(function () {
        document.getElementById('timer').innerText = `Time Remaining: ${timeRemaining}s`;
        timeRemaining--;

        if (timeRemaining < 0) {
          clearInterval(timer);
          endGame();
        }
      }, 1000);
    }

    function displayQuestion() {
      const questionElement = document.getElementById('question');
      const levelElement = document.getElementById('level');

      questionElement.innerText = `Question ${currentQuestionIndex + 1}: ${questions[currentQuestionIndex].question}`;
      levelElement.innerText = `Level: ${questions[currentQuestionIndex].level}`;
      questionElement.classList.remove('correct-answer', 'incorrect-answer'); // Reset color class
    }

    function submitAnswer() {
      clearInterval(timer); // Reset the timer on each submit
      startTimer(); // Restart the timer

      const questionElement = document.getElementById('question');
      const userAnswer = document.getElementById('answer-input').value.trim().toLowerCase();
      const correctAnswer = questions[currentQuestionIndex].answer.toLowerCase();
      questions[currentQuestionIndex].userAnswer = userAnswer;

      if (userAnswer === correctAnswer) {
        totalScore += questions[currentQuestionIndex].score;
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
          displayQuestion();
          document.getElementById('answer-input').value = '';
          document.getElementById('feedback-message').innerText = 'Correct! Well done!';
          document.getElementById('score').innerText = `Current Score: ${totalScore}`;
        } else {
          endGame();
        }
      } else {
        const proceed = confirm(
          `Your answer was incorrect. Proceed to the next question?`
        );
        if (proceed) {
          currentQuestionIndex++;
          if (currentQuestionIndex < questions.length) {
            displayQuestion();
            document.getElementById('answer-input').value = '';
            document.getElementById('feedback-message').innerText = 'Try again!';
          } else {
            endGame();
          }
        } else {
          document.getElementById('answer-input').value = '';
        }
      }
    }

    function endGame() {
    const answersElement = document.getElementById('answers');
    answersElement.style.display = 'block';

    let allAnswersHTML = '';

    questions.forEach((q, index) => {
        const userAnswer = q.userAnswer !== undefined ? q.userAnswer : 'Not answered';
        const answerStatus = q.answer.toLowerCase() === userAnswer.toLowerCase() ? 'correct-answer' : 'incorrect-answer';

        const answerHTML = `
            <tr class="${answerStatus}">
                <td>Question ${index + 1}: ${q.question}</td>
                <td>You answered: "${userAnswer}".</td>
                <td>Correct answer: "${q.answer}".</td>
            </tr>
            <tr class="separator-row">
                <td colspan="3"></td>
            </tr>
        `;

        allAnswersHTML += answerHTML;
    });

    const tableHTML = `
        <table class="answer-table">
            ${allAnswersHTML}
        </table>
    `;

    answersElement.innerHTML = tableHTML + `<h2>Total Score: ${totalScore}</h2>`;

    // Reset the timer display
    document.getElementById('timer').innerText = '';
}






    // Initial display of the first question and start the timer
    displayQuestion();
    startTimer();
  </script>

</body>
</html>
