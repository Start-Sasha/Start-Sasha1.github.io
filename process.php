<?php
// process.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id']; // ID задания

    // Обработка данных в зависимости от задания
    switch ($taskId) {
        case 'task1':
            $name = $_POST['name'];
            $age = $_POST['age'];
            $hobby = $_POST['hobby'];
            echo "<ul>
                    <li>Имя: $name</li>
                    <li>Возраст: $age</li>
                    <li>Хобби: $hobby</li>
                  </ul>";
            break;

        case 'task2':
            $integer = $_POST['integer'];
            $string = $_POST['string'];
            $array = json_decode($_POST['array']);
            $boolean = $_POST['boolean'];
            $null = $_POST['null'];
            echo "Тип \$integer: " . gettype($integer) . "<br>";
            echo "Тип \$string: " . gettype($string) . "<br>";
            echo "Тип \$array: " . gettype($array) . "<br>";
            echo "Тип \$boolean: " . gettype($boolean) . "<br>";
            echo "Тип \$null: " . gettype($null) . "<br>";
            break;

        case 'task3':
            $a = $_POST['a'];
            $b = $_POST['b'];
            echo "$a + $b = " . ($a + $b) . "<br>";
            echo "$a - $b = " . ($a - $b) . "<br>";
            echo "$a * $b = " . ($a * $b) . "<br>";
            echo "$a / $b = " . ($a / $b) . "<br>";
            break;

        case 'task4':
            $year = $_POST['year'];
            $isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
            echo $isLeap ? "$year год високосный." : "$year год не високосный.";
            break;

        case 'task5':
            $age = $_POST['age'];
            if ($age < 12) {
                echo "Ребенок";
            } elseif ($age >= 13 && $age <= 17) {
                echo "Подросток";
            } elseif ($age >= 18 && $age <= 64) {
                echo "Взрослый";
            } else {
                echo "Пожилой";
            }
            break;

        case 'task6':
            $number = $_POST['number'];
            echo ($number % 2 == 0) ? "Четное" : "Нечетное";
            break;

        case 'task7':
            $month = $_POST['month'];
            switch ($month) {
                case 1: echo "Январь"; break;
                case 2: echo "Февраль"; break;
                case 3: echo "Март"; break;
                case 4: echo "Апрель"; break;
                case 5: echo "Май"; break;
                case 6: echo "Июнь"; break;
                case 7: echo "Июль"; break;
                case 8: echo "Август"; break;
                case 9: echo "Сентябрь"; break;
                case 10: echo "Октябрь"; break;
                case 11: echo "Ноябрь"; break;
                case 12: echo "Декабрь"; break;
                default: echo "Некорректный месяц";
            }
            break;

        case 'task8':
            $limit = $_POST['limit'];
            $i = 1;
            while ($i <= $limit) {
                if ($i % 3 == 0) {
                    echo "$i ";
                }
                $i++;
            }
            break;

        case 'task9':
            $number = $_POST['number'];
            do {
                echo "$number ";
                $number--;
            } while ($number >= 1);
            break;

        case 'task10':
            $number = $_POST['number'];
            for ($i = 1; $i <= 10; $i++) {
                echo "$number * $i = " . ($number * $i) . "<br>";
            }
            break;

        case 'task11':
            $limit = $_POST['limit'];
            for ($i = 1; $i <= $limit; $i++) {
                $isPrime = true;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime && $i > 1) {
                    echo "$i ";
                }
            }
            break;

        case 'task12':
            $products = $_POST['products'];
            $prices = $_POST['prices'];
            echo "<table border='1'>";
            echo "<tr><th>Товар</th><th>Цена</th><th>Цена со скидкой</th></tr>";
            foreach ($products as $index => $product) {
                $price = $prices[$index];
                $discountedPrice = $price * 0.9;
                echo "<tr><td>$product</td><td>$price</td><td>$discountedPrice</td></tr>";
            }
            echo "</table>";
            break;

        case 'task13':
            $student = [
                "имя" => $_POST['name'],
                "возраст" => $_POST['age'],
                "факультет" => $_POST['faculty'],
                "средний_балл" => $_POST['average_grade']
            ];
            function hasScholarship($student) {
                return $student["средний_балл"] >= 4.5;
            }
            echo hasScholarship($student) ? "Стипендия положена" : "Стипендия не положена";
            break;

        case 'task14':
            $day = $_POST['day'];
            $subjects = explode(",", $_POST['subjects']);
            $schedule[$day] = $subjects;
            echo "<table border='1'>";
            echo "<tr><th>День</th><th>Предметы</th></tr>";
            foreach ($schedule as $day => $subjects) {
                echo "<tr><td>$day</td><td>" . implode(", ", $subjects) . "</td></tr>";
            }
            echo "</table>";
            break;

        case 'task15':
            $numbers = array_map('intval', explode(",", $_POST['numbers']));
            echo "Минимальное значение: " . min($numbers) . "<br>";
            echo "Максимальное значение: " . max($numbers) . "<br>";
            echo "Среднее значение: " . array_sum($numbers) / count($numbers) . "<br>";
            sort($numbers);
            echo "Отсортированный массив: " . implode(", ", $numbers);
            break;

        case 'task16':
            $numbers = array_map('intval', explode(",", $_POST['numbers']));
            function sumNumbers(...$numbers) {
                return array_sum($numbers);
            }
            echo "Сумма чисел: " . sumNumbers(...$numbers);
            break;

        case 'task17':
            $number = $_POST['number'];
            function factorial($n) {
                if ($n <= 1) return 1;
                return $n * factorial($n - 1);
            }
            echo "Факториал $number: " . factorial($number);
            break;

        case 'task18':
            $globalVar = $_POST['global_var'];
            function testScope() {
                global $globalVar;
                static $counter = 0;
                $localVar = "Локальная переменная";
                $counter++;
                echo "Глобальная: $globalVar, Локальная: $localVar, Счетчик: $counter<br>";
            }
            testScope();
            testScope();
            break;

        case 'task19':
            $numbers = array_map('intval', explode(",", $_POST['numbers']));
            $evenNumbers = array_filter($numbers, function($n) {
                return $n % 2 == 0;
            });
            echo "Четные числа: " . implode(", ", $evenNumbers);
            break;

        case 'task20':
            $str = $_POST['string'];
            $oldWord = $_POST['old_word'];
            $newWord = $_POST['new_word'];
            function cleanString($str, $oldWord, $newWord) {
                $str = trim(strtolower($str));
                $str = str_replace($oldWord, $newWord, $str);
                return $str;
            }
            echo cleanString($str, $oldWord, $newWord);
            break;

        case 'task21':
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            function daysBetweenDates($date1, $date2) {
                $diff = strtotime($date2) - strtotime($date1);
                return floor($diff / (60 * 60 * 24));
            }
            echo "Дней между $date1 и $date2: " . daysBetweenDates($date1, $date2);
            break;

        case 'task22':
            $filename = $_POST['filename'];
            $content = $_POST['content'];
            file_put_contents($filename, $content);
            echo "Файл $filename записан успешно.";
            break;

        case 'task23':
            $filename = $_POST['filename'];
            if (file_exists($filename)) {
                $lines = file($filename);
                foreach ($lines as $lineNumber => $line) {
                    echo "Строка #" . ($lineNumber + 1) . ": " . htmlspecialchars($line) . "<br>";
                }
            } else {
                echo "Файл не существует.";
            }
            break;

        case 'task24':
            $width = $_POST['width'];
            $height = $_POST['height'];
            class Rectangle {
                private $width;
                private $height;
        
                public function __construct($width, $height) {
                    $this->width = $width;
                    $this->height = $height;
                }
        
                public function getArea() {
                    return $this->width * $this->height;
                }
        
                public function getPerimeter() {
                    return 2 * ($this->width + $this->height);
                }
            }
            $rectangle = new Rectangle($width, $height);
            echo "Площадь: " . $rectangle->getArea() . "<br>";
            echo "Периметр: " . $rectangle->getPerimeter();
            break;

        case 'task25':
            $radius = $_POST['radius'];
            $side = $_POST['side'];
            class Shape {
                public function getArea() {
                    return 0;
                }
        
                public function getPerimeter() {
                    return 0;
                }
            }
        
            class Circle extends Shape {
                private $radius;
        
                public function __construct($radius) {
                    $this->radius = $radius;
                }
        
                public function getArea() {
                    return pi() * $this->radius * $this->radius;
                }
        
                public function getPerimeter() {
                    return 2 * pi() * $this->radius;
                }
            }
        
            class Square extends Shape {
                private $side;
        
                public function __construct($side) {
                    $this->side = $side;
                }
        
                public function getArea() {
                    return $this->side * $this->side;
                }
        
                public function getPerimeter() {
                    return 4 * $this->side;
                }
            }
        
            $circle = new Circle($radius);
            $square = new Square($side);
            echo "Площадь круга: " . $circle->getArea() . "<br>";
            echo "Периметр квадрата: " . $square->getPerimeter();
            break;

        case 'task26':
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            class Triangle extends Shape {
                private $a, $b, $c;
        
                public function __construct($a, $b, $c) {
                    $this->a = $a;
                    $this->b = $b;
                    $this->c = $c;
                }
        
                public function getArea() {
                    $s = ($this->a + $this->b + $this->c) / 2;
                    return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
                }
        
                public function getPerimeter() {
                    return $this->a + $this->b + $this->c;
                }
            }
        
            function printShapeInfo(Shape $shape) {
                echo "Площадь: " . $shape->getArea() . ", Периметр: " . $shape->getPerimeter() . "<br>";
            }
        
            $triangle = new Triangle($a, $b, $c);
            printShapeInfo($triangle);
            break;

        case 'task27':
            $filename = $_POST['filename'];
            $action = $_POST['action'];
            if (file_exists($filename)) {
                if ($action == 'view') {
                    echo "<pre>" . file_get_contents($filename) . "</pre>";
                } elseif ($action == 'delete') {
                    unlink($filename);
                    echo "Файл $filename удален.";
                }
            } else {
                echo "Файл не существует.";
            }
            break;

        case 'task28':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
        
            function validateForm($email, $password, $phone) {
                $errors = [];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Некорректный email.";
                }
                if (strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/\d/", $password)) {
                    $errors[] = "Пароль должен содержать минимум 8 символов, буквы и цифры.";
                }
                if (!preg_match("/^\+\d{10,}$/", $phone)) {
                    $errors[] = "Некорректный номер телефона.";
                }
                return $errors;
            }
        
            $errors = validateForm($email, $password, $phone);
            if (empty($errors)) {
                echo "Форма валидна.";
            } else {
                echo "Ошибки: " . implode(" ", $errors);
            }
            break;

        case 'task29':
            $data = [
                "имя" => $_POST['name'],
                "возраст" => $_POST['age'],
                "город" => $_POST['city']
            ];
            $json = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents("data.json", $json);
            echo "Данные сохранены в файл data.json.";
            break;

        case 'task30':
            $filename = $_POST['filename'];
            if (file_exists($filename)) {
                $jsonFromFile = file_get_contents($filename);
                $decodedData = json_decode($jsonFromFile, true);
                echo "Декодированные данные: ";
                print_r($decodedData);
            } else {
                echo "Файл не существует.";
            }
            break;
    }
}