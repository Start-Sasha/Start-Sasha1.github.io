<?php
// process.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id']; // ID задания

    // Обработка данных в зависимости от задания
    switch ($taskId) {
        case 'task1':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Сумма: " . ($num1 + $num2);
            break;

        case 'task2':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'add': echo "Результат: " . ($num1 + $num2); break;
                case 'subtract': echo "Результат: " . ($num1 - $num2); break;
                case 'multiply': echo "Результат: " . ($num1 * $num2); break;
                case 'divide': echo "Результат: " . ($num1 / $num2); break;
            }
            break;

        case 'task3':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'add': echo "Результат: " . ($num1 + $num2); break;
                case 'subtract': echo "Результат: " . ($num1 - $num2); break;
                case 'multiply': echo "Результат: " . ($num1 * $num2); break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "Ошибка: деление на ноль.";
                    } else {
                        echo "Результат: " . ($num1 / $num2);
                    }
                    break;
            }
            break;

        case 'task4':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'add': echo "Результат: " . ($num1 + $num2); break;
                case 'subtract': echo "Результат: " . ($num1 - $num2); break;
                case 'multiply': echo "Результат: " . ($num1 * $num2); break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "Ошибка: деление на ноль.";
                    } else {
                        echo "Результат: " . ($num1 / $num2);
                    }
                    break;
            }
            break;

        case 'task5':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operations = $_POST['operations'];
            foreach ($operations as $operation) {
                switch ($operation) {
                    case 'add': echo "Сложение: " . ($num1 + $num2) . "<br>"; break;
                    case 'subtract': echo "Вычитание: " . ($num1 - $num2) . "<br>"; break;
                    case 'multiply': echo "Умножение: " . ($num1 * $num2) . "<br>"; break;
                    case 'divide':
                        if ($num2 == 0) {
                            echo "Ошибка: деление на ноль.<br>";
                        } else {
                            echo "Деление: " . ($num1 / $num2) . "<br>";
                        }
                        break;
                }
            }
            break;

        case 'task6':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Сумма: " . ($num1 + $num2);
            break;

        case 'task7':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Сумма: " . ($num1 + $num2);
            break;

        case 'task8':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Результат: " . pow($num1, $num2);
            break;

        case 'task9':
            $expression = $_POST['expression'];
            // Используем eval для вычисления выражения (осторожно!)
            try {
                eval('$result = ' . $expression . ';');
                echo "Результат: " . $result;
            } catch (Exception $e) {
                echo "Ошибка: некорректное выражение.";
            }
            break;

        case 'task10':
            $color1 = $_POST['color1'];
            $color2 = $_POST['color2'];
            function mixColors($color1, $color2) {
                $r1 = hexdec(substr($color1, 1, 2));
                $g1 = hexdec(substr($color1, 3, 2));
                $b1 = hexdec(substr($color1, 5, 2));
                $r2 = hexdec(substr($color2, 1, 2));
                $g2 = hexdec(substr($color2, 3, 2));
                $b2 = hexdec(substr($color2, 5, 2));
                $r = dechex(($r1 + $r2) / 2);
                $g = dechex(($g1 + $g2) / 2);
                $b = dechex(($b1 + $b2) / 2);
                return "#$r$g$b";
            }
            $mixedColor = mixColors($color1, $color2);
            echo "<div style='width: 100px; height: 100px; background-color: $mixedColor;'></div>";
            break;

        case 'task11':
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $content = file_get_contents($file['tmp_name']);
                    $numbers = array_map('intval', explode(" ", $content));
                    echo "Сумма: " . array_sum($numbers);
                } else {
                    echo "Ошибка при загрузке файла.";
                }
            }
            break;

        case 'task12':
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $content = file_get_contents($file['tmp_name']);
                    $numbers = array_map('intval', explode(" ", $content));
                    if (count($numbers) == 2) {
                        echo "Сумма: " . array_sum($numbers);
                    } else {
                        echo "Ошибка: файл должен содержать ровно два числа.";
                    }
                } else {
                    echo "Ошибка при загрузке файла.";
                }
            }
            break;

        case 'task13':
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $content = file_get_contents($file['tmp_name']);
                    $lines = explode("\n", $content);
                    foreach ($lines as $line) {
                        $numbers = array_map('intval', explode(" ", $line));
                        if (count($numbers) == 2) {
                            echo "Сумма пары: " . array_sum($numbers) . "<br>";
                        }
                    }
                } else {
                    echo "Ошибка при загрузке файла.";
                }
            }
            break;

        case 'task14':
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $expression = file_get_contents($file['tmp_name']);
                    try {
                        eval('$result = ' . $expression . ';');
                        echo "Результат: " . $result;
                    } catch (Exception $e) {
                        echo "Ошибка: некорректное выражение.";
                    }
                } else {
                    echo "Ошибка при загрузке файла.";
                }
            }
            break;

        case 'task15':
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $content = file_get_contents($file['tmp_name']);
                    $numbers = array_map('intval', explode(" ", $content));
                    echo "<div style='display: flex; align-items: flex-end; height: 200px;'>";
                    foreach ($numbers as $number) {
                        echo "<div style='width: 20px; height: " . ($number * 2) . "px; background-color: blue; margin: 2px;'></div>";
                    }
                    echo "</div>";
                } else {
                    echo "Ошибка при загрузке файла.";
                }
            }
            break;

        case 'task16':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'add': echo "Результат: " . ($num1 + $num2); break;
                case 'subtract': echo "Результат: " . ($num1 - $num2); break;
                case 'multiply': echo "Результат: " . ($num1 * $num2); break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "Ошибка: деление на ноль.";
                    } else {
                        echo "Результат: " . ($num1 / $num2);
                    }
                    break;
            }
            break;

        case 'task17':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            for ($i = 0; $i < count($num1); $i++) {
                echo "Сумма пары: " . ($num1[$i] + $num2[$i]) . "<br>";
            }
            break;

        case 'task18':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $mainOperation = $_POST['main_operation'];
            $extraOperations = $_POST['extra_operation'] ?? [];
        
            // Основная операция
            switch ($mainOperation) {
                case 'add': echo "Сложение: " . ($num1 + $num2) . "<br>"; break;
                case 'subtract': echo "Вычитание: " . ($num1 - $num2) . "<br>"; break;
            }
        
            // Дополнительные операции
            foreach ($extraOperations as $operation) {
                switch ($operation) {
                    case 'multiply': echo "Умножение: " . ($num1 * $num2) . "<br>"; break;
                    case 'divide':
                        if ($num2 == 0) {
                            echo "Ошибка: деление на ноль.<br>";
                        } else {
                            echo "Деление: " . ($num1 / $num2) . "<br>";
                        }
                        break;
                }
            }
            break;

        case 'task19':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $mainOperation = $_POST['main_operation'];
            $extraOperation = $_POST['extra_operation'];
        
            // Основная операция
            switch ($mainOperation) {
                case 'add': echo "Сложение: " . ($num1 + $num2) . "<br>"; break;
                case 'subtract': echo "Вычитание: " . ($num1 - $num2) . "<br>"; break;
            }
        
            // Дополнительная операция
            switch ($extraOperation) {
                case 'multiply': echo "Умножение: " . ($num1 * $num2) . "<br>"; break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "Ошибка: деление на ноль.<br>";
                    } else {
                        echo "Деление: " . ($num1 / $num2) . "<br>";
                    }
                    break;
            }
            break;

        case 'task20':
            $numbers = $_POST['numbers'];
            echo "Сумма: " . array_sum($numbers);
            break;

        case 'task21':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $ratio = $num1 / ($num1 + $num2);
            echo "<meter value='$ratio' min='0' max='1'></meter>";
            break;

        case 'task22':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "<canvas id='chart' width='200' height='200'></canvas>
                    <script>
                        const canvas = document.getElementById('chart');
                        const ctx = canvas.getContext('2d');
                        ctx.fillStyle = 'blue';
                        ctx.fillRect(10, 10, $num1, 20);
                        ctx.fillStyle = 'red';
                        ctx.fillRect(10, 40, $num2, 20);
                    </script>";
            break;

        case 'task23':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $progress = ($num1 / $num2) * 100;
            echo "<progress value='$progress' max='100'></progress>";
            break;

        case 'task24':
            $name = $_POST['name'];
            $age = $_POST['age'];
            $hobby = $_POST['hobby'];
            echo "<ul>
                    <li>Имя: $name</li>
                    <li>Возраст: $age</li>
                    <li>Хобби: $hobby</li>
                    </ul>";
            break;

        case 'task26':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Сумма: " . ($num1 + $num2);
            break;

        case 'task27':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "Сумма: " . ($num1 + $num2);
            break;

        case 'task28':
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $diff = strtotime($date2) - strtotime($date1);
            $days = floor($diff / (60 * 60 * 24));
            echo "Дней между датами: " . $days;
            break;

        case 'task29':
            $operation = $_POST['operation'];
            if ($operation === 'power') {
                $num1 = $_POST['num1'];
                $power = $_POST['power'];
                echo "Результат: " . pow($num1, $power);
            } else {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                switch ($operation) {
                    case 'add': echo "Сумма: " . ($num1 + $num2); break;
                    case 'multiply': echo "Произведение: " . ($num1 * $num2); break;
                }
            }
            break;

        case 'task30':
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'add': echo "Сумма: " . ($num1 + $num2); break;
                case 'subtract': echo "Разность: " . ($num1 - $num2); break;
                case 'multiply': echo "Произведение: " . ($num1 * $num2); break;
                case 'divide':
                    if ($num2 == 0) {
                        echo "Ошибка: деление на ноль.";
                    } else {
                        echo "Частное: " . ($num1 / $num2);
                    }
                    break;
            }
            break;
    }
}