<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Примеры HTML и PHP взаимодействия</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 20px; }
        .example { border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 5px; }
        h2 { color: #333; }
        input, button { padding: 8px; margin: 5px 0; }
.result { background-color: #f5f5f5; padding: 10px; margin-top: 10px; border-radius: 3px; }
    </style>
</head>
<body>
    <h1>Примеры взаимодействия HTML и PHP</h1>
    <!-- Пример 1: Простая форма с текстовыми полями -->
    <div class="example">
        <h2>1. Простая форма сложения двух чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_1">Число A:</label>
            <input type="number" id="num1_1" name="num1_1" required><br>            
            <label for="num2_1">Число B:</label>
            <input type="number" id="num2_1" name="num2_1" required><br>
            
            <button type="submit" name="calculate_1">Сложить</button>
        </form>        
        <?php
        if(isset($_POST['calculate_1'])) {
            $num1 = $_POST['num1_1'];
            $num2 = $_POST['num2_1'];
            $sum = $num1 + $num2;
            echo "<div class='result'>Результат: $num1 + $num2 = $sum</div>";
        }
        ?>    </div> 

    <!-- Пример 2: Форма с выбором операции (select) -->
    <div class="example">
        <h2>2. Форма с выбором математической операции</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_2">Число A:</label>
            <input type="number" id="num1_2" name="num1_2" required><br>
            
            <label for="operation">Операция:</label>
            <select id="operation" name="operation">
                <option value="add">Сложение (+)</option>
                <option value="subtract">Вычитание (-)</option>
                <option value="multiply">Умножение (*)</option>
                <option value="divide">Деление (/)</option>
            </select><br>
            
            <label for="num2_2">Число B:</label>
            <input type="number" id="num2_2" name="num2_2" required><br>
            
            <button type="submit" name="calculate_2">Вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_2'])) {
            $num1 = $_POST['num1_2'];
            $num2 = $_POST['num2_2'];
            $operation = $_POST['operation'];
            $result = 0;
            $symbol = '';
            
            switch($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    $symbol = '+';
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    $symbol = '-';
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    $symbol = '*';
                    break;
                case 'divide':
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                        $symbol = '/';
                    } else {
                        echo "<div class='result'>Ошибка: деление на ноль!</div>";
                        return;
                    }
                    break;
            }
            
            echo "<div class='result'>Результат: $num1 $symbol $num2 = $result</div>";
        }
        ?>
    </div>

    <!-- Пример 3: Использование радиокнопок -->
    <div class="example">
        <h2>3. Форма с радиокнопками для выбора операции</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_3">Число A:</label>
            <input type="number" id="num1_3" name="num1_3" required><br>            
            <div>
                <label>Операция:</label><br>
                <input type="radio" id="add" name="operation_3" value="add" checked>
                <label for="add">Сложение</label><br>                
                <input type="radio" id="subtract" name="operation_3" value="subtract">
                <label for="subtract">Вычитание</label><br>                
                <input type="radio" id="multiply" name="operation_3" value="multiply">
                <label for="multiply">Умножение</label><br>                
                <input type="radio" id="divide" name="operation_3" value="divide">
                <label for="divide">Деление</label>
            </div><br>
            
            <label for="num2_3">Число B:</label>
            <input type="number" id="num2_3" name="num2_3" required><br>
            
            <button type="submit" name="calculate_3">Вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_3'])) {
            $num1 = $_POST['num1_3'];
            $num2 = $_POST['num2_3'];
            $operation = $_POST['operation_3'];
            $result = 0;
            $symbol = '';
            
            switch($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    $symbol = '+';
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    $symbol = '-';
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    $symbol = '*';
                    break;
                case 'divide':
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                        $symbol = '/';
                    } else {
                        echo "<div class='result'>Ошибка: деление на ноль!</div>";
                        return;
                    }
                    break;
            }            
            echo "<div class='result'>Результат: $num1 $symbol $num2 = $result</div>";
        }
        ?>
    </div>

    <!-- Пример 4: Использование чекбоксов -->
    <div class="example">
        <h2>4. Форма с выбором нескольких операций через чекбоксы</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_4">Число A:</label>
            <input type="number" id="num1_4" name="num1_4" required><br>
            
            <label for="num2_4">Число B:</label>
            <input type="number" id="num2_4" name="num2_4" required><br>            
            <div>
                <label>Выберите операции:</label><br>
                <input type="checkbox" id="add_4" name="operations[]" value="add">
                <label for="add_4">Сложение</label><br>
                
                <input type="checkbox" id="subtract_4" name="operations[]" value="subtract">
                <label for="subtract_4">Вычитание</label><br>
                
                <input type="checkbox" id="multiply_4" name="operations[]" value="multiply">
                <label for="multiply_4">Умножение</label><br>
                
                <input type="checkbox" id="divide_4" name="operations[]" value="divide">
                <label for="divide_4">Деление</label>
            </div><br>
            
            <button type="submit" name="calculate_4">Вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_4']) && isset($_POST['operations'])) {
            $num1 = $_POST['num1_4'];
            $num2 = $_POST['num2_4'];
            $operations = $_POST['operations'];
            
            echo "<div class='result'>";
            
            foreach($operations as $operation) {
                switch($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        echo "Сложение: $num1 + $num2 = $result<br>";
                        break;
                    case 'subtract':
                        $result = $num1 - $num2;
                        echo "Вычитание: $num1 - $num2 = $result<br>";
                        break;
                    case 'multiply':
                        $result = $num1 * $num2;
                        echo "Умножение: $num1 * $num2 = $result<br>";
                        break;
                    case 'divide':
                        if($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Деление: $num1 / $num2 = $result<br>";
                        } else {
                            echo "Деление: Ошибка: деление на ноль!<br>";
                        }
                        break;
                }
            }
            
            echo "</div>";
        } elseif(isset($_POST['calculate_4'])) {
            echo "<div class='result'>Пожалуйста, выберите хотя бы одну операцию!</div>";
        }
        ?>
    </div>

    <!-- Пример 5: Диапазон значений (range) -->
    <div class="example">
        <h2>5. Форма с ползунками для ввода чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_5">Число A (1-100):</label>
 <input type="range" id="num1_5" name="num1_5" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
            <output>50</output><br>
            
            <label for="num2_5">Число B (1-100):</label>
   <input type="range" id="num2_5" name="num2_5" min="1" max="100" value="50" oninput="this.nextElementSibling.value = this.value">
            <output>50</output><br>
            
            <button type="submit" name="calculate_5">Сложить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_5'])) {
            $num1 = $_POST['num1_5'];
            $num2 = $_POST['num2_5'];
            $sum = $num1 + $num2;
            echo "<div class='result'>Результат: $num1 + $num2 = $sum</div>";
        }
        ?>
    </div>

    <!-- Пример 6: Использование числовых инпутов с шагом -->
    <div class="example">
        <h2>6. Форма с шаговыми числовыми инпутами</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_6">Число A:</label>
            <input type="number" id="num1_6" name="num1_6" min="0" max="100" step="0.5" required><br>            
            <label for="num2_6">Число B:</label>
            <input type="number" id="num2_6" name="num2_6" min="0" max="100" step="0.5" required><br>            
            <button type="submit" name="calculate_6">Умножить</button>
        </form>        
        <?php
        if(isset($_POST['calculate_6'])) {
            $num1 = $_POST['num1_6'];
            $num2 = $_POST['num2_6'];
            $product = $num1 * $num2;
            echo "<div class='result'>Результат: $num1 × $num2 = $product</div>";
        }
        ?>
    </div>
    <!-- Пример 7: Скрытые поля -->
    <div class="example">
        <h2>7. Форма с использованием скрытых полей</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_7">Число A:</label>
            <input type="number" id="num1_7" name="num1_7" required><br>            
            <label for="num2_7">Число B:</label>
            <input type="number" id="num2_7" name="num2_7" required><br>            
            <input type="hidden" name="operation_type" value="power">            
            <button type="submit" name="calculate_7">Возвести A в степень B</button>
        </form>        
        <?php
       


      if(isset($_POST['calculate_7'])) {
            $num1 = $_POST['num1_7'];
            $num2 = $_POST['num2_7'];
            $operation = $_POST['operation_type'];            
            if($operation == 'power') {
                $result = pow($num1, $num2);
                echo "<div class='result'>$num1 в степени $num2 = $result</div>";
            }
        }
        ?>
    </div>

    <!-- Пример 8: Textarea и обработка текста -->
    <div class="example">
        <h2>8. Форма с текстовой областью для уравнения</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="equation">Введите выражение (например, 5 + 3):</label><br>
            <textarea id="equation" name="equation" rows="2" cols="30" required></textarea><br>            
            <button type="submit" name="calculate_8">Вычислить</button>
        </form>        
        <?php
        if(isset($_POST['calculate_8'])) {
            $equation = trim($_POST['equation']);            
            // Простой анализ выражения (небезопасно в реальном приложении)
            if(preg_match('/^(\d+)\s*([+\-*\/])\s*(\d+)$/', $equation, $matches)) {
                $num1 = $matches[1];
                $operator = $matches[2];
                $num2 = $matches[3];                
                switch($operator) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        if($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "<div class='result'>Ошибка: деление на ноль!</div>";
                            return;
                        }
                        break;
                }                
                echo "<div class='result'>Результат: $equation = $result</div>";
            } else {
                echo "<div class='result'>Неверный формат выражения. Используйте формат: число оператор число</div>";
            }
        }
        ?>
    </div>
    <!-- Пример 9: Использование датчика цвета для представления чисел -->
    <div class="example">
        <h2>9. Форма с цветовым представлением чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="color1">Число A (как цвет):</label>
            <input type="color" id="color1" name="color1" value="#ff0000"><br>            
            <label for="color2">Число B (как цвет):</label>
            <input type="color" id="color2" name="color2" value="#0000ff"><br>            
            <button type="submit" name="calculate_9">Смешать цвета</button>
        </form>        
        <?php
        if(isset($_POST['calculate_9'])) {
            $color1 = $_POST['color1'];
            $color2 = $_POST['color2'];
            

            // Получаем RGB компоненты из HEX
            $r1 = hexdec(substr($color1, 1, 2));
            $g1 = hexdec(substr($color1, 3, 2));
            $b1 = hexdec(substr($color1, 5, 2));
            
            $r2 = hexdec(substr($color2, 1, 2));
            $g2 = hexdec(substr($color2, 3, 2));
            $b2 = hexdec(substr($color2, 5, 2));
            
            // Смешиваем цвета (средние значения)
            $r = intval(($r1 + $r2) / 2);
            $g = intval(($g1 + $g2) / 2);
            $b = intval(($b1 + $b2) / 2);
            
            // Конвертируем обратно в HEX
            $mixed_color = sprintf("#%02x%02x%02x", $r, $g, $b);
            
            echo "<div class='result'>
                Цвет A: <span style='display:inline-block; width:20px; height:20px; background-color:$color1'></span> $color1<br>
                Цвет B: <span style='display:inline-block; width:20px; height:20px; background-color:$color2'></span> $color2<br>
         Смешанный: <span style='display:inline-block; width:20px; height:20px; background-color:$mixed_color'></span> $mixed_color
            </div>";
        }
        ?>
    </div>

    <!-- Пример 10: Использование файлового инпута -->
    <div class="example">
        <h2>10. Форма для загрузки файла с числами</h2>
        <p>Создайте текстовый файл с двумя числами, разделенными пробелом.</p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <label for="number_file">Выберите файл с числами:</label>
            <input type="file" id="number_file" name="number_file"><br>
            
            <button type="submit" name="calculate_10">Загрузить и вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_10']) && isset($_FILES['number_file'])) {
            if($_FILES['number_file']['error'] == 0) {
                $file_content = file_get_contents($_FILES['number_file']['tmp_name']);
                $numbers = explode(' ', trim($file_content));
                
                if(count($numbers) >= 2 && is_numeric($numbers[0]) && is_numeric($numbers[1])) {
                    $num1 = $numbers[0];
                    $num2 = $numbers[1];
                    $sum = $num1 + $num2;
                    $diff = $num1 - $num2;
                    $product = $num1 * $num2;
                    $quotient = ($num2 != 0) ? $num1 / $num2 : "Ошибка: деление на ноль!";
                    
                    echo "<div class='result'>
                        Число A: $num1<br>
                        Число B: $num2<br>
                        Сумма: $sum<br>
                        Разность: $diff<br>
                        Произведение: $product<br>
                        Частное: $quotient
                    </div>";
                } else {
                    echo "<div class='result'>Файл должен содержать два числа, разделенных пробелом.</div>";
                }
            } else {
                echo "<div class='result'>Ошибка при загрузке файла.</div>";
            }
        }
        ?>
    </div>


    <!-- Пример 11: Использование fieldset и legend -->
    <div class="example">
        <h2>11. Форма с группировкой полей</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>Ввод чисел</legend>
                <label for="num1_11">Число A:</label>
                <input type="number" id="num1_11" name="num1_11" required><br>
                
                <label for="num2_11">Число B:</label>
                <input type="number" id="num2_11" name="num2_11" required>
            </fieldset>
            
            <fieldset>
                <legend>Выбор операций</legend>
                <select id="operation_11" name="operation_11">
                    <option value="sum">Сумма</option>
                    <option value="difference">Разность</option>
                    <option value="product">Произведение</option>
                    <option value="quotient">Частное</option>
                    <option value="all">Все операции</option>
                </select>
            </fieldset>
            
            <button type="submit" name="calculate_11">Вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_11'])) {
            $num1 = $_POST['num1_11'];
            $num2 = $_POST['num2_11'];
            $operation = $_POST['operation_11'];
            
            echo "<div class='result'>";
            
            switch($operation) {
                case 'sum':
                    $result = $num1 + $num2;
                    echo "Сумма: $num1 + $num2 = $result";
                    break;
                case 'difference':
                    $result = $num1 - $num2;
                    echo "Разность: $num1 - $num2 = $result";
                    break;
                case 'product':
                    $result = $num1 * $num2;
                    echo "Произведение: $num1 * $num2 = $result";
                    break;
                case 'quotient':
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Частное: $num1 / $num2 = $result";
                    } else {
                        echo "Частное: Ошибка: деление на ноль!";
                    }
                    break;
                case 'all':
                    $sum = $num1 + $num2;
                    $diff = $num1 - $num2;
                    $product = $num1 * $num2;
                    $quotient = ($num2 != 0) ? $num1 / $num2 : "Ошибка: деление на ноль!";                    
                    echo "Сумма: $num1 + $num2 = $sum<br>";
                    echo "Разность: $num1 - $num2 = $diff<br>";
                    echo "Произведение: $num1 * $num2 = $product<br>";
                    echo "Частное: $num1 / $num2 = $quotient";
                    break;
            }            
            echo "</div>";
        }
        ?>    </div>
    <!-- Пример 12: Использование датчика даты для вычисления дней между датами -->
    <div class="example">
        <h2>12. Вычисление дней между датами</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="date1">Дата A:</label>
            <input type="date" id="date1" name="date1" required><br>
            
            <label for="date2">Дата B:</label>
            <input type="date" id="date2" name="date2" required><br>
            
            <button type="submit" name="calculate_12">Вычислить разницу</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_12'])) {
            $date1 = new DateTime($_POST['date1']);
            $date2 = new DateTime($_POST['date2']);
            
            $interval = $date1->diff($date2);
            $days = $interval->days;
            
            echo "<div class='result'>
                Дата A: " . $date1->format('d.m.Y') . "<br>
                Дата B: " . $date2->format('d.m.Y') . "<br>
                Разница: $days дней
            </div>";
        }
        ?>
    </div>






    <!-- Пример 13: Использование datalist для предложения значений -->
    <div class="example">
        <h2>13. Форма с предложением значений</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_13">Число A:</label>
            <input type="number" id="num1_13" name="num1_13" list="common_numbers" required><br>
            
            <datalist id="common_numbers">
                <option value="10">
                <option value="25">
                <option value="50">
                <option value="100">
                <option value="1000">
            </datalist>
            
            <label for="num2_13">Число B:</label>
            <input type="number" id="num2_13" name="num2_13" list="common_numbers" required><br>
            
            <button type="submit" name="calculate_13">Вычислить квадратный корень суммы</button>
        </form>        
        <?php
        if(isset($_POST['calculate_13'])) {
            $num1 = $_POST['num1_13'];
            $num2 = $_POST['num2_13'];
            $sum = $num1 + $num2;
            $sqrt = sqrt($sum);            
            echo "<div class='result'>
                Число A: $num1<br>
                Число B: $num2<br>
                Сумма: $sum<br>
                Квадратный корень суммы: " . number_format($sqrt, 4) . "
            </div>";
        }
        ?>
    </div>
    <!-- Пример 14: Ajax взаимодействие с использованием vanilla JavaScript -->
    <div class="example">
        <h2>14. AJAX вычисление без перезагрузки страницы</h2>
        <form id="ajaxForm" onsubmit="return false;">
            <label for="num1_14">Число A:</label>
            <input type="number" id="num1_14" name="num1_14" required><br>            
            <label for="num2_14">Число B:</label>
            <input type="number" id="num2_14" name="num2_14" required><br>            
            <button type="button" onclick="calculateAjax()">Вычислить</button>
        </form>        
        <div id="ajaxResult" class="result" style="display:none;"></div>        
        <script>
            function calculateAjax() {
                var num1 = document.getElementById('num1_14').value;
                var num2 = document.getElementById('num2_14').value;                
                if(!num1 || !num2) {
                    alert('Пожалуйста, введите оба числа!');
                    return;
                }                
                // В реальном приложении здесь был бы AJAX запрос к PHP скрипту
                // Для примера просто вычислим результат на стороне клиента
                var sum = parseFloat(num1) + parseFloat(num2);
                var diff = parseFloat(num1) - parseFloat(num2);
                var product = parseFloat(num1) * parseFloat(num2);
                var quotient = parseFloat(num2) != 0 ? parseFloat(num1) / parseFloat(num2) : "Ошибка: деление на ноль!";
                var result = `
                    Число A: ${num1}<br>
                    Число B: ${num2}<br>
                    Сумма: ${sum}<br>
                    Разность: ${diff}<br>
                    Произведение: ${product}<br>
                    Частное: ${quotient}                `;                
                document.getElementById('ajaxResult').innerHTML = result;
                document.getElementById('ajaxResult').style.display = 'block';
            }
        </script>
    </div>

    <!-- Пример 15: Использование output для вывода результата -->
     <div class="example">
        <h2>15. Форма с выводом результата в output элемент</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_15">Число A:</label>
            <input type="number" id="num1_15" name="num1_15" required><br>            
            <label for="num2_15">Число B:</label>
            <input type="number" id="num2_15" name="num2_15" required><br>            
            <button type="submit" name="calculate_15">Вычислить</button><br>            
            <label for="result_15">Результат:</label>
            <output id="result_15" name="result">
            if(isset($_POST['calculate_15'])) {
                    $num1 = $_POST['num1_15'];
                    $num2 = $_POST['num2_15'];
                    $sum = $num1 + $num2;
                    echo "$sum";
                }
                ?>
            </output>
        </form>
    </div>
    <!-- Пример 16: Использование шагов для последовательного ввода -->
    <div class="example">
        <h2>16. Форма с шагами ввода</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php
            $step = isset($_POST['step']) ? $_POST['step'] : 1;
            
            if($step == 1) {
                echo '
                <div id="step1">
                    <h3>Шаг 1: Введите первое число</h3>
                    <label for="num1_16">Число A:</label>
                    <input type="number" id="num1_16" name="num1_16" required><br>                    
                    <input type="hidden" name="step" value="2">
                    <button type="submit" name="next_step">Следующий шаг</button>
                </div>';
            } elseif($step == 2) {
                $num1 = $_POST['num1_16'];
                echo '
                <div id="step2">
                    <h3>Шаг 2: Введите второе число</h3>
                    <p>Первое число: ' . $num1 . '</p>
                    <label for="num2_16">Число B:</label>
                    <input type="number" id="num2_16" name="num2_16" required><br>                    
                    <input type="hidden" name="num1_16" value="' . $num1 . '">
                    <input type="hidden" name="step" value="3">
                    <button type="submit" name="calculate_16">Вычислить</button>
                </div>';
            } elseif($step == 3 && isset($_POST['calculate_16'])) {
                $num1 = $_POST['num1_16'];
                $num2 = $_POST['num2_16'];
                $sum = $num1 + $num2;
                $diff = $num1 - $num2;                
                echo '
                <div id="step3">
                    <h3>Результаты вычислений</h3>
                    <p>Число A: ' . $num1 . '</p>
                    <p>Число B: ' . $num2 . '</p>
                    <p>Сумма: ' . $sum . '</p>
                    <p>Разность: ' . $diff . '</p>
                    
                    <input type="hidden" name="step" value="1">
                    <button type="submit">Начать заново</button>
                </div>';
            }
            ?>
        </form>
    </div>
    <!-- Пример 17: Использование таблицы для ввода нескольких пар чисел -->
    <div class="example">
        <h2>17. Форма с таблицей для ввода нескольких пар чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <thead>
                    <tr>
                        <th>Пара</th>
                        <th>Число A</th>
                        <th>Число B</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($i = 1; $i <= 3; $i++) {
                        echo '
                        <tr>
                            <td>Пара ' . $i . '</td>
                            <td><input type="number" name="num_a[]" required></td>
                            <td><input type="number" name="num_b[]" required></td>
                        </tr>';
                    }?>
                </tbody>
            </table>            
            <button type="submit" name="calculate_17">Вычислить суммы</button>
        </form>        
        <?php
        if(isset($_POST['calculate_17'])) {
            if(isset($_POST['num_a']) && isset($_POST['num_b']) && 
               count($_POST['num_a']) == count($_POST['num_b'])) {
                echo "<div class='result'>";
                echo "<table style='width:100%'>";
                echo "<tr><th>Пара</th><th>Число A</th><th>Число B</th><th>Сумма</th></tr>";                
                $total_sum = 0;                
                for($i = 0; $i < count($_POST['num_a']); $i++) {
                    $a = $_POST['num_a'][$i];
                    $b = $_POST['num_b'][$i];
                    $sum = $a + $b;
                    $total_sum += $sum;
                    
                    echo "<tr><td>Пара " . ($i+1) . "</td><td>$a</td><td>$b</td><td>$sum</td></tr>";
                }                
                echo "<tr><td colspan='3'><strong>Общая сумма всех пар:</strong></td><td><strong>$total_sum</strong></td></tr>";
                echo "</table>";
                echo "</div>";
            }
        }
        ?>
    </div>
    <!-- Пример 18: Использование meter для визуализации отношения чисел -->
    <div class="example">
        <h2>18. Форма с визуализацией отношения чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_18">Число A:</label>
            <input type="number" id="num1_18" name="num1_18" min="0" max="100" required><br>            
            <label for="num2_18">Число B:</label>
            <input type="number" id="num2_18" name="num2_18" min="0" max="100" required><br>            
            <button type="submit" name="calculate_18">Показать отношение</button>
        </form>        
        <?php
        if(isset($_POST['calculate_18'])) {
            $num1 = $_POST['num1_18'];
            $num2 = $_POST['num2_18'];
            $sum = $num1 + $num2;
            $ratio1 = ($sum > 0) ? ($num1 / $sum) : 0;
            $ratio2 = ($sum > 0) ? ($num2 / $sum) : 0;            
            echo "<div class='result'>
                Число A ($num1): 
                <meter value='$num1' min='0' max='100' low='25' high='75' optimum='50'></meter><br>                
                Число B ($num2): 
                <meter value='$num2' min='0' max='100' low='25' high='75' optimum='50'></meter><br>                
                Соотношение A/Сумма: " . number_format($ratio1 * 100, 1) . "%
                <meter value='$ratio1' min='0' max='1'></meter><br>                
                Соотношение B/Сумма: " . number_format($ratio2 * 100, 1) . "%
                <meter value='$ratio2' min='0' max='1'></meter><br>
            </div>";
        }
        ?>
    </div>

    <!-- Пример 19: Использование canvas для визуализации чисел -->
    <div class="example">
        <h2>19. Форма с графическим представлением чисел</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_19">Число A (1-100):</label>
            <input type="number" id="num1_19" name="num1_19" min="1" max="100" required><br>            
            <label for="num2_19">Число B (1-100):</label>
            <input type="number" id="num2_19" name="num2_19" min="1" max="100" required><br>            
            <button type="submit" name="calculate_19">Нарисовать</button>
        </form>        
        <?php
        if(isset($_POST['calculate_19'])) {
            $num1 = min(100, max(1, intval($_POST['num1_19'])));
            $num2 = min(100, max(1, intval($_POST['num2_19'])));            
            echo "<div class='result'>
                <p>Графическое представление чисел:</p>
                <canvas id='numberCanvas' width='400' height='200' style='border:1px solid #d3d3d3;'></canvas>                
                <script>
                    var canvas = document.getElementById('numberCanvas');
                    var ctx = canvas.getContext('2d');                    
                    // Очищаем холст
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    
                    // Рисуем первое число (красный круг)
                    var radius1 = $num1 * 0.75;
                    ctx.beginPath();
                    ctx.arc(100, 100, radius1, 0, 2 * Math.PI);
                    ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
                    ctx.fill();
                    ctx.stroke();
                    
                    // Рисуем второе число (синий круг)
                    var radius2 = $num2 * 0.75;
                    ctx.beginPath();
                    ctx.arc(300, 100, radius2, 0, 2 * Math.PI);
                    ctx.fillStyle = 'rgba(0, 0, 255, 0.5)';
                    ctx.fill();
                    ctx.stroke();
                    
                    // Добавляем текст
                    ctx.font = '14px Arial';
                    ctx.fillStyle = 'black';
                    ctx.textAlign = 'center';
                    ctx.fillText('A = $num1', 100, 180);
                    ctx.fillText('B = $num2', 300, 180);
                </script>
            </div>";
        }
        ?>
    </div>








    <!-- Пример 20: Использование progress для визуализации вычислений -->
    <div class="example">
        <h2>20. Форма с индикатором процесса вычисления</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1_20">Число A:</label>
            <input type="number" id="num1_20" name="num1_20" required><br>
            
            <label for="num2_20">Число B:</label>
            <input type="number" id="num2_20" name="num2_20" required><br>
            
            <button type="submit" name="calculate_20">Вычислить</button>
        </form>
        
        <?php
        if(isset($_POST['calculate_20'])) {
            $num1 = $_POST['num1_20'];
            $num2 = $_POST['num2_20'];
            $sum = $num1 + $num2;
            $diff = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = ($num2 != 0) ? $num1 / $num2 : "Ошибка: деление на ноль!";
            
            // Нормализация для прогресс-бара (0-100)
            $max_value = max(abs($sum), abs($diff), abs($product), is_numeric($quotient) ? abs($quotient) : 0, 1);
            $norm_sum = min(100, abs($sum) / $max_value * 100);
            $norm_diff = min(100, abs($diff) / $max_value * 100);
            $norm_product = min(100, abs($product) / $max_value * 100);
            $norm_quotient = is_numeric($quotient) ? min(100, abs($quotient) / $max_value * 100) : 0;            
            echo "<div class='result'>
                <p>Число A: $num1</p>
                <p>Число B: $num2</p>                
                <div>
                    <label>Сумма ($sum):</label>
                    <progress value='$norm_sum' max='100'></progress>
                </div>
                
                <div>
                    <label>Разность ($diff):</label>
                    <progress value='$norm_diff' max='100'></progress>
                </div>                
                <div>
                    <label>Произведение ($product):</label>
                    <progress value='$norm_product' max='100'></progress>
                </div>                
                <div>
                    <label>Частное (" . $quotient . "):</label>
                    <progress value='$norm_quotient' max='100'></progress>
                </div>
            </div>";
        }
        ?>
    </div>
</body>
</html>


