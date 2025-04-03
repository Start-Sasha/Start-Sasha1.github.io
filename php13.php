<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №13</title>
    <!-- Подключаем Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .task-block {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
        }
        .task-block h3 {
            margin-bottom: 20px;
            color: #0d6efd;
        }
        .output-block {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Лабораторная работа №13</h1>

        <!-- Задание 1: Базовый вывод информации -->
        <div class="task-block">
            <h3>1. Базовый вывод информации</h3>
            <form id="task1">
                <input type="hidden" name="task_id" value="task1">
                <label>Имя: <input type="text" name="name"></label><br>
                <label>Возраст: <input type="number" name="age"></label><br>
                <label>Хобби: <input type="text" name="hobby"></label><br>
                <button type="submit">Отправить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 2: Переменные и типы данных -->
        <div class="task-block">
            <h3>2. Переменные и типы данных</h3>
            <form id="task2">
                <input type="hidden" name="task_id" value="task2">
                <label>Целое число: <input type="number" name="integer"></label><br>
                <label>Строка: <input type="text" name="string"></label><br>
                <label>Массив (в формате JSON): <input type="text" name="array"></label><br>
                <label>Булево значение: <input type="text" name="boolean"></label><br>
                <label>Null: <input type="text" name="null"></label><br>
                <button type="submit">Отправить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 3: Арифметические операции -->
        <div class="task-block">
            <h3>3. Арифметические операции</h3>
            <form id="task3">
                <input type="hidden" name="task_id" value="task3">
                <label>Число A: <input type="number" name="a"></label><br>
                <label>Число B: <input type="number" name="b"></label><br>
                <button type="submit">Отправить</button>
            </form>
            <div class="output-block"></div>
        </div>

       <!-- Задание 4: Логические операторы -->
        <div class="task-block">
            <h3>4. Логические операторы</h3>
            <form id="task4">
                <input type="hidden" name="task_id" value="task4">
                <label>Год: <input type="number" name="year"></label><br>
                <button type="submit">Проверить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 5: Условные конструкции -->
        <div class="task-block">
            <h3>5. Условные конструкции</h3>
            <form id="task5">
                <input type="hidden" name="task_id" value="task5">
                <label>Возраст: <input type="number" name="age"></label><br>
                <button type="submit">Определить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 6: Тернарный оператор -->
        <div class="task-block">
            <h3>6. Тернарный оператор</h3>
            <form id="task6">
                <input type="hidden" name="task_id" value="task6">
                <label>Число: <input type="number" name="number"></label><br>
                <button type="submit">Проверить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 7: Оператор switch -->
        <div class="task-block">
            <h3>7. Оператор switch</h3>
            <form id="task7">
                <input type="hidden" name="task_id" value="task7">
                <label>Номер месяца: <input type="number" name="month" min="1" max="12"></label><br>
                <button type="submit">Показать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 8: Цикл while -->
        <div class="task-block">
            <h3>8. Цикл while</h3>
            <form id="task8">
                <input type="hidden" name="task_id" value="task8">
                <label>Введите число: <input type="number" name="limit"></label><br>
                <button type="submit">Показать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 9: Цикл do-while -->
        <div class="task-block">
            <h3>9. Цикл do-while</h3>
            <form id="task9">
                <input type="hidden" name="task_id" value="task9">
                <label>Введите число: <input type="number" name="number"></label><br>
                <button type="submit">Показать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 10: Цикл for -->
        <div class="task-block">
            <h3>10. Цикл for</h3>
            <form id="task10">
                <input type="hidden" name="task_id" value="task10">
                <label>Введите число: <input type="number" name="number"></label><br>
                <button type="submit">Показать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 11: Работа с циклами и условиями -->
        <div class="task-block">
            <h3>11. Работа с циклами и условиями</h3>
            <form id="task11">
                <input type="hidden" name="task_id" value="task11">
                <label>Введите число: <input type="number" name="limit"></label><br>
                <button type="submit">Показать простые числа</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 12: Цикл foreach -->
        <div class="task-block">
            <h3>12. Цикл foreach</h3>
            <form id="task12">
                <input type="hidden" name="task_id" value="task12">
                <label>Товар 1: <input type="text" name="products[]"></label>
                <label>Цена: <input type="number" name="prices[]"></label><br>
                <label>Товар 2: <input type="text" name="products[]"></label>
                <label>Цена: <input type="number" name="prices[]"></label><br>
                <label>Товар 3: <input type="text" name="products[]"></label>
                <label>Цена: <input type="number" name="prices[]"></label><br>
                <button type="submit">Показать скидку</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 13: Ассоциативные массивы -->
        <div class="task-block">
            <h3>13. Ассоциативные массивы</h3>
            <form id="task13">
                <input type="hidden" name="task_id" value="task13">
                <label>Имя: <input type="text" name="name"></label><br>
                <label>Возраст: <input type="number" name="age"></label><br>
                <label>Факультет: <input type="text" name="faculty"></label><br>
                <label>Средний балл: <input type="number" step="0.1" name="average_grade"></label><br>
                <button type="submit">Проверить стипендию</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 14: Многомерные массивы -->
        <div class="task-block">
            <h3>14. Многомерные массивы</h3>
            <form id="task14">
                <input type="hidden" name="task_id" value="task14">
                <label>День: <input type="text" name="day"></label>
                <label>Предметы (через запятую): <input type="text" name="subjects"></label><br>
                <button type="submit">Добавить в расписание</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 15: Функции для работы с массивами -->
        <div class="task-block">
            <h3>15. Функции для работы с массивами</h3>
            <form id="task15">
                <input type="hidden" name="task_id" value="task15">
                <label>Числа (через запятую): <input type="text" name="numbers"></label><br>
                <button type="submit">Показать результат</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 16: Функции с параметрами -->
        <div class="task-block">
            <h3>16. Функции с параметрами</h3>
            <form id="task16">
                <input type="hidden" name="task_id" value="task16">
                <label>Числа (через запятую): <input type="text" name="numbers"></label><br>
                <button type="submit">Показать сумму</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 17: Функции с возвращаемым значением -->
        <div class="task-block">
            <h3>17. Функции с возвращаемым значением</h3>
            <form id="task17">
                <input type="hidden" name="task_id" value="task17">
                <label>Число: <input type="number" name="number"></label><br>
                <button type="submit">Вычислить факториал</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 18: Область видимости переменных -->
        <div class="task-block">
            <h3>18. Область видимости переменных</h3>
            <form id="task18">
                <input type="hidden" name="task_id" value="task18">
                <label>Глобальная переменная: <input type="text" name="global_var"></label><br>
                <button type="submit">Проверить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 19: Анонимные функции -->
        <div class="task-block">
            <h3>19. Анонимные функции</h3>
            <form id="task19">
                <input type="hidden" name="task_id" value="task19">
                <label>Числа (через запятую): <input type="text" name="numbers"></label><br>
                <button type="submit">Показать четные числа</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 20: Строковые функции -->
        <div class="task-block">
            <h3>20. Строковые функции</h3>
            <form id="task20">
                <input type="hidden" name="task_id" value="task20">
                <label>Строка: <input type="text" name="string"></label><br>
                <label>Старое слово: <input type="text" name="old_word"></label><br>
                <label>Новое слово: <input type="text" name="new_word"></label><br>
                <button type="submit">Очистить строку</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 21: Работа с датой и временем -->
        <div class="task-block">
            <h3>21. Работа с датой и временем</h3>
            <form id="task21">
                <input type="hidden" name="task_id" value="task21">
                <label>Дата 1: <input type="date" name="date1"></label><br>
                <label>Дата 2: <input type="date" name="date2"></label><br>
                <button type="submit">Вычислить разницу</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 22: Работа с файлами - запись -->
        <div class="task-block">
            <h3>22. Работа с файлами - запись</h3>
            <form id="task22">
                <input type="hidden" name="task_id" value="task22">
                <label>Имя файла: <input type="text" name="filename"></label><br>
                <label>Содержимое: <textarea name="content"></textarea></label><br>
                <button type="submit">Записать в файл</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 23: Работа с файлами - чтение -->
        <div class="task-block">
            <h3>23. Работа с файлами - чтение</h3>
            <form id="task23">
                <input type="hidden" name="task_id" value="task23">
                <label>Имя файла: <input type="text" name="filename"></label><br>
                <button type="submit">Прочитать файл</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 24: ООП - создание класса -->
        <div class="task-block">
            <h3>24. ООП - создание класса</h3>
            <form id="task24">
                <input type="hidden" name="task_id" value="task24">
                <label>Ширина: <input type="number" name="width"></label><br>
                <label>Высота: <input type="number" name="height"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 25: ООП - наследование -->
        <div class="task-block">
            <h3>25. ООП - наследование</h3>
            <form id="task25">
                <input type="hidden" name="task_id" value="task25">
                <label>Радиус круга: <input type="number" name="radius"></label><br>
                <label>Сторона квадрата: <input type="number" name="side"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 26: ООП - полиморфизм -->
        <div class="task-block">
            <h3>26. ООП - полиморфизм</h3>
            <form id="task26">
                <input type="hidden" name="task_id" value="task26">
                <label>Сторона A: <input type="number" name="a"></label><br>
                <label>Сторона B: <input type="number" name="b"></label><br>
                <label>Сторона C: <input type="number" name="c"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 27: Файловый менеджер -->
        <div class="task-block">
            <h3>27. Файловый менеджер</h3>
            <form id="task27">
                <input type="hidden" name="task_id" value="task27">
                <label>Имя файла: <input type="text" name="filename"></label><br>
                <button type="submit" name="action" value="view">Просмотреть</button>
                <button type="submit" name="action" value="delete">Удалить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 28: Валидация формы -->
        <div class="task-block">
            <h3>28. Валидация формы</h3>
            <form id="task28">
                <input type="hidden" name="task_id" value="task28">
                <label>Email: <input type="email" name="email"></label><br>
                <label>Пароль: <input type="password" name="password"></label><br>
                <label>Телефон: <input type="text" name="phone"></label><br>
                <button type="submit">Проверить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 29: Работа с JSON -->
        <div class="task-block">
            <h3>29. Работа с JSON</h3>
            <form id="task29">
                <input type="hidden" name="task_id" value="task29">
                <label>Имя: <input type="text" name="name"></label><br>
                <label>Возраст: <input type="number" name="age"></label><br>
                <label>Город: <input type="text" name="city"></label><br>
                <button type="submit">Сохранить в JSON</button>
            </form>
            <div class="output-block"></div>
        </div>

        <!-- Задание 30: Чтение JSON -->
        <div class="task-block">
            <h3>30. Чтение JSON</h3>
            <form id="task30">
                <input type="hidden" name="task_id" value="task30">
                <label>Имя файла: <input type="text" name="filename"></label><br>
                <button type="submit">Прочитать JSON</button>
            </form>
            <div class="output-block"></div>
        </div>
    </div>

    <!-- Подключаем Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Подключаем jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Обработчик для всех форм
            $('form').on('submit', function(event) {
                event.preventDefault(); // Отменяем стандартную отправку формы

                const form = $(this);
                const taskId = form.attr('id'); // ID формы
                const outputBlock = form.next('.output-block'); // Блок для вывода результата

                // Отправляем данные на сервер
                $.ajax({
                    url: 'process.php', // Файл для обработки данных
                    type: 'POST',
                    data: form.serialize(), // Сериализуем данные формы
                    success: function(response) {
                        outputBlock.html(response); // Выводим результат
                    },
                    error: function() {
                        outputBlock.html('Ошибка при отправке данных.');
                    }
                });
            });
        });
    </script>
</body>
</html>