<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Habitat Guessing Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
        }

        input, button {
            padding: 10px;
            font-size: 16px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            font-weight: bold;
        }

        .message.error {
            color: #d9534f;
        }

        .message.success {
            color: #5bc0de;
        }

        .hint {
            margin-top: 10px;
            color: #888;
        }
    </style>
</head>
<body>

<?php
$animals = array(
    
    "panda" => "land",
    "fish" => "water"
);

$random_animal_key = array_rand($animals);
$random_animal = ucfirst($random_animal_key);
$habitat = $animals[$random_animal_key];

$guess = isset($_POST['guess']) ? strtolower(trim($_POST['guess'])) : null;
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($guess === null || !array_key_exists($guess, $animals)) {
        $message = 'Please enter a valid animal name from the list.';
    } elseif ($guess !== $random_animal_key) {
        $message = 'Sorry, that\'s not the correct answer. Try again!';
    } else {
        $message = 'Congratulations! You guessed it right: ' . $random_animal . ' (Habitat: ' . ucfirst($habitat) . ').';
    }
}
?>

<h1>Animal Habitat Guessing Game</h1>
<p>Guess an animal and its habitat:</p>

<form method="post">
    <input type="text" name="guess" placeholder="Enter an animal" required>
    <button type="submit">Submit Guess</button>
</form>

<p class="message <?php echo ($message === 'Congratulations! You guessed it right: ' . $random_animal . ' (Habitat: ' . ucfirst($habitat) . ').') ? 'success' : 'error'; ?>">
    <?php echo $message; ?>
</p>

<p class="hint">Hint: It lives in <?php echo ucfirst($habitat); ?>.</p>

</body>
</html>
