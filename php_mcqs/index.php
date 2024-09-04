<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MCQ Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">PHP MCQ Test</h1>
        <form action="result.php" method="post">
            <?php
            require 'config.php'; // Include the database configuration file

            $stmt = $pdo->query('SELECT * FROM questions LIMIT 50');
            $i = 1;
            while ($row = $stmt->fetch()) {
                echo '<div class="mb-3">';
                echo '<h5>' . $i . '. ' . $row['question'] . '</h5>';
                echo '<div class="form-check">';
                echo '<input class="form-check-input" type="radio" name="answer' . $row['id'] . '" value="A" required>';
                echo '<label class="form-check-label">' . $row['option_a'] . '</label>';
                echo '</div>';
                echo '<div class="form-check">';
                echo '<input class="form-check-input" type="radio" name="answer' . $row['id'] . '" value="B">';
                echo '<label class="form-check-label">' . $row['option_b'] . '</label>';
                echo '</div>';
                echo '<div class="form-check">';
                echo '<input class="form-check-input" type="radio" name="answer' . $row['id'] . '" value="C">';
                echo '<label class="form-check-label">' . $row['option_c'] . '</label>';
                echo '</div>';
                echo '<div class="form-check">';
                echo '<input class="form-check-input" type="radio" name="answer' . $row['id'] . '" value="D">';
                echo '<label class="form-check-label">' . $row['option_d'] . '</label>';
                echo '</div>';
                echo '</div>';
                $i++;
            }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
