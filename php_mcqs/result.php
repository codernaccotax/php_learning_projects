<?php
require 'config.php';

$totalQuestions = 50;
$score = 0;

foreach ($_POST as $questionId => $selectedOption) {
    $questionId = str_replace('answer', '', $questionId);
    $stmt = $pdo->prepare('SELECT correct_option FROM questions WHERE id = ?');
    $stmt->execute([$questionId]);
    $correctOption = $stmt->fetchColumn();

    if ($correctOption === $selectedOption) {
        $score++;
    }
}

$percentage = ($score / $totalQuestions) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MCQ Test Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">PHP MCQ Test Result</h1>
        <p>Total Questions: <?php echo $totalQuestions; ?></p>
        <p>Correct Answers: <?php echo $score; ?></p>
        <p>Score: <?php echo $percentage; ?>%</p>
        <a href="index.php" class="btn btn-primary">Take Test Again</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
