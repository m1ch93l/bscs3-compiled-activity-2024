<?php
session_start();

function startGame() {
    // List of words and corresponding questions for the game
    $wordData = array(
        "apple" => "Which fruit is red or green, and commonly used in pies?",
        "banana" => "Which fruit is yellow and often associated with monkeys?",
        "cherry" => "Which small, round fruit is typically red or black?",
        "orange" => "Which citrus fruit is known for its bright color and high vitamin C content?",
        "grape" => "Which fruit can be red, green, or purple, and is often used to make wine?",
        "lemon" => "Which yellow citrus fruit is sour and commonly used in cooking?",
        "melon" => "Which fruit family includes watermelon, cantaloupe, and honeydew?",
        "peach" => "Which fruit has a fuzzy skin and a large, hard pit in the center?",
        "pear" => "Which fruit is typically green or yellow and has a sweet taste?",
        "strawberry" => "Which small, red fruit is often used in desserts and is associated with summer?"
    );

    // Select a random word and its associated question
    $selectedWord = array_rand($wordData);
    $_SESSION['target_word'] = $selectedWord;
    $_SESSION['question'] = $wordData[$selectedWord];

    // Save the word data in the session
    $_SESSION['wordData'] = $wordData;

    // Initialize the number of attempts only if it's not set
    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 0;
    }
}

function checkGuess($userGuess) {
    $targetWord = $_SESSION['target_word'];

    if ($userGuess !== $targetWord) {
        $_SESSION['attempts']++;
        return "Incorrect! Try again. Question: " . $_SESSION['question'];
    } else {
        // Guessed correctly, start a new game
        startGame();
        return "Congratulations! You guessed the word '{$targetWord}' in {$_SESSION['attempts']} attempts. Try a new word!";
    }
}

if (!isset($_SESSION['target_word'])) {
    startGame();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["user-guess"])) {
        $userGuess = strtolower($_POST["user-guess"]);
        $feedback = checkGuess($userGuess);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Guessing Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Word Guessing Game</h1>
    <p>Try to guess the word based on the question.</p>

    <?php if (isset($feedback)): ?>
        <p><?php echo $feedback; ?></p>
    <?php endif; ?>

    <form id="guessForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="word-questions">
            <p><?php echo $_SESSION['question']; ?></p>
        </div>
        <div class="word-boxes">
            <?php
            // Ensure that the wordData is set before using it
            if (isset($_SESSION['wordData'])) {
                foreach ($_SESSION['wordData'] as $word => $question) {
                    echo '<label class="box">';
                    echo '<input type="radio" name="user-guess" value="' . $word . '" id="box-' . $word . '">';
                    echo $word;
                    echo '</label>';
                }
            }
            ?>
        </div>
        <button type="button" onclick="restartGame()">Restart Game</button>
        <button type="submit">Submit Guess</button>
    </form>
</div>

<script>
    function restartGame() {
        window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>";
    }

    document.addEventListener('DOMContentLoaded', function () {
        var boxes = document.querySelectorAll('.box');

        boxes.forEach(function (box) {
            box.addEventListener('click', function () {
                // Remove the 'box-selected' class from all boxes
                boxes.forEach(function (otherBox) {
                    otherBox.classList.remove('box-selected');
                });

                // Add the 'box-selected' class to the clicked box
                box.classList.add('box-selected');
            });
        });
    });
</script>

</body>
</html>
