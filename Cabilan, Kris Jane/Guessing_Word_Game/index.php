<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='24' height='24' fill='%233498db'%3E%3Ccircle cx='12' cy='12' r='10' stroke='none' /%3E%3Ctext x='50%' y='50%' font-size='16' font-weight='bold' text-anchor='middle' dy='.3em' fill='%23ffffff'%3E?%3C/text%3E%3C/svg%3E" type="image/svg+xml">
    <title>Semantic Guessing Game</title>
</head>

<body style="background-color: cyan;">

<div class="container mt-3 p-5">
    <div class="jumbotron text-center bg-success text-white">
        <h1 class="display-4">GuessWhat?</h1>
        <p class="lead">Test your knowledge with these fun questions!</p>
    </div>

    <?php
    // Array of questions and corresponding answers
    $questions = array(
        "What is the capital of Philippines?" => "Manila",
        "What is the process of finding and fixing errors in a program?" => "Debug",
        "What type of loop repeats a block of code while a specified condition is true?" => "While",
        "In programming, what is a collection of related data items called?" => "Array",
        "What is the result of 2 + 2 in most programming languages?" => "4",
        "What is the biggest star?" => "Sun",
        "What is the largest planet in our solar system?" => "Jupiter",
        "What is the primary purpose of a 'for' loop in programming?" => "Iteration",
        "In web development, what does CSS stand for?" => "Cascading Style Sheet",
        "What data type is used for whole numbers in many programming languages?" => "Integer",
        "Which programming language is often used for server-side web development?" => "Node.js",
        "What is the default file extension for a Python script?" => ".py",
        "What is the result of dividing any number by zero in mathematics?" => "Undefined",
        "In web development, what language is used to style the presentation of a webpage?" => "CSS",
        "IDE stands for" => "Integrated Development Environment",
        "What is the process of converting source code into machine code?" => "Compilation",
        "What is the name of the version control system widely used in software development?" => "Git"
    );

    // Display a random question when the page loads
    $randomQuestion = array_rand($questions);
    echo '<h2 class="text-center">' . $randomQuestion . '</h2>';
    echo '<form action="index.php" method="post">
                <input type="hidden" name="randomQuestion" value="' . htmlspecialchars($randomQuestion) . '">';

    // Display the input field to collect the user's answer
    echo '<div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="answer" placeholder="Enter your answer" name="answer" required autocomplete="off" readonly onfocus="this.removeAttribute(\'readonly\');" title="">
                <label for="answer">Your Answer</label>
              </div>';

    // Display the "Submit Answer" button
    echo '<div class="form-group d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary" id="submitBtn">Submit Answer</button>
              </div>
              <input type="hidden" name="newQuestion" value="1"> <!-- Hidden field to indicate a new question request -->
            </form>';
    ?>

    <?php
    // If a new question is requested, display the modal content
    if (isset($_POST['newQuestion'])) {
        $userAnswer = isset($_POST['answer']) ? trim($_POST['answer']) : '';
        $randomQuestion = isset($_POST['randomQuestion']) && array_key_exists($_POST['randomQuestion'], $questions) ? $_POST['randomQuestion'] : '';
        $correctAnswer = $randomQuestion ? $questions[$randomQuestion] : '';

        // Display result in modal
        echo '<div class="modal fade" tabindex="-1" id="resultModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Result</h2>
                        </div>
                        <div class="modal-body">';

        if (strcasecmp($userAnswer, $correctAnswer) === 0) {
            echo '<div class="alert alert-success" role="alert">
                            Congratulations! Your answer is correct.
                          </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                            Incorrect. The correct answer is: ' . $correctAnswer . '
                          </div>';
        }

        echo '</div>
                        <div class="modal-footer">
                            <a href="index.php" class="btn btn-primary">Play Again</a>
                        </div>
                    </div>
                </div>
            </div>';
    }
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Move the modal display script outside the PHP block
    $(document).ready(function () {
        $('#resultModal').modal('show');
    });
</script>

</body>

</html>
