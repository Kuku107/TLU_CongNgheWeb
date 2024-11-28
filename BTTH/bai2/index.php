<!DOCTYPE html5>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Quizz</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <form action="result.php" method="post">
                <?php
                    $filename = "questions.txt";
                    $questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    $current_question = [];
                    $number = 1;
                    foreach ($questions as $line) {
                        if (strpos($line, "Câu") === 0) {
                            if (!empty($current_question)) {
                                echo "<div class='card mb-4'>";
                                echo "<div class='card-header'><strong>{$current_question[0]}</strong></div>";
                                echo "<div class='card-body'>";
                                for ($i = 1; $i <= 4; $i++) {
                                    $answer = substr($current_question[$i], 0, 1); // A, B, C, D
                                    echo "<div class='form-check'>";
                                    echo "<input class='form-check-input' type='radio' name='question{$number}' value='{$answer}' id='question{$number}{$answer}'>";
                                    echo "<label class='form-check-label' for='question{$number}{$answer}'>{$current_question[$i]}</label>";
                                    echo "</div>";
                                }
                                echo "</div>";
                                echo "</div>";
                            }
                            $current_question = [];
                            $number++;
                        }
                        $current_question[] = $line;
                    }
                ?>
                <button type="submit" class="btn btn-primary">Nộp bài</button>
            </form>
        </div>
    </body>
</html>
