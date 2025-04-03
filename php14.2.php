<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №14.2</title>
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
        <h1 class="text-center mb-4">Лабораторная работа №14.2</h1>

        <div class="task-block">
            <h3>1. Сумма двух чисел</h3>
            <form id="task1">
                <input type="hidden" name="task_id" value="task1">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Вычислить сумму</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>2. Выбор операции</h3>
            <form id="task2">
                <input type="hidden" name="task_id" value="task2">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <label>Операция:
                    <select name="operation">
                        <option value="add">Сложение</option>
                        <option value="subtract">Вычитание</option>
                        <option value="multiply">Умножение</option>
                        <option value="divide">Деление</option>
                    </select>
                </label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>3. Обработка деления на ноль</h3>
            <form id="task3">
                <input type="hidden" name="task_id" value="task3">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <label>Операция:
                    <select name="operation">
                        <option value="add">Сложение</option>
                        <option value="subtract">Вычитание</option>
                        <option value="multiply">Умножение</option>
                        <option value="divide">Деление</option>
                    </select>
                </label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>4. Радиокнопки для выбора операции</h3>
            <form id="task4">
                <input type="hidden" name="task_id" value="task4">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <label><input type="radio" name="operation" value="add"> Сложение</label><br>
                <label><input type="radio" name="operation" value="subtract"> Вычитание</label><br>
                <label><input type="radio" name="operation" value="multiply"> Умножение</label><br>
                <label><input type="radio" name="operation" value="divide"> Деление</label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>5. Чекбоксы для выбора нескольких операций</h3>
            <form id="task5">
                <input type="hidden" name="task_id" value="task5">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <label><input type="checkbox" name="operations[]" value="add"> Сложение</label><br>
                <label><input type="checkbox" name="operations[]" value="subtract"> Вычитание</label><br>
                <label><input type="checkbox" name="operations[]" value="multiply"> Умножение</label><br>
                <label><input type="checkbox" name="operations[]" value="divide"> Деление</label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>6. Ползунки для ввода чисел</h3>
            <form id="task6">
                <input type="hidden" name="task_id" value="task6">
                <label>Число 1: <input type="range" name="num1" min="0" max="100"></label><br>
                <label>Число 2: <input type="range" name="num2" min="0" max="100"></label><br>
                <button type="submit">Сложить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>7. Шаговые числовые поля</h3>
            <form id="task7">
                <input type="hidden" name="task_id" value="task7">
                <label>Число 1: <input type="number" name="num1" step="0.1"></label><br>
                <label>Число 2: <input type="number" name="num2" step="0.1"></label><br>
                <button type="submit">Сложить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>8. Скрытое поле для операции</h3>
            <form id="task8">
                <input type="hidden" name="task_id" value="task8">
                <input type="hidden" name="operation" value="power">
                <label>Число: <input type="number" name="num1"></label><br>
                <label>Степень: <input type="number" name="num2"></label><br>
                <button type="submit">Возвести в степень</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>9. Текстовая область для математического выражения</h3>
            <form id="task9">
                <input type="hidden" name="task_id" value="task9">
                <label>Введите выражение: <textarea name="expression"></textarea></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>10. Смешивание цветов</h3>
            <form id="task10">
                <input type="hidden" name="task_id" value="task10">
                <label>Цвет 1: <input type="color" name="color1"></label><br>
                <label>Цвет 2: <input type="color" name="color2"></label><br>
                <button type="submit">Смешать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>11. Загрузка текстового файла с числами</h3>
            <form id="task11" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="task11">
                <label>Загрузите файл: <input type="file" name="file"></label><br>
                <button type="submit">Обработать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>12. Проверка содержимого файла</h3>
            <form id="task12" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="task12">
                <label>Загрузите файл: <input type="file" name="file"></label><br>
                <button type="submit">Обработать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>13. Загрузка файла с несколькими парами чисел</h3>
            <form id="task13" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="task13">
                <label>Загрузите файл: <input type="file" name="file"></label><br>
                <button type="submit">Обработать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>14. Загрузка файла с математическим выражением</h3>
            <form id="task14" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="task14">
                <label>Загрузите файл: <input type="file" name="file"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>15. Визуализация числовых данных</h3>
            <form id="task15" enctype="multipart/form-data">
                <input type="hidden" name="task_id" value="task15">
                <label>Загрузите файл: <input type="file" name="file"></label><br>
                <button type="submit">Визуализировать</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>16. Группировка полей</h3>
            <form id="task16">
                <input type="hidden" name="task_id" value="task16">
                <fieldset>
                    <legend>Числа</legend>
                    <label>Число 1: <input type="number" name="num1"></label><br>
                    <label>Число 2: <input type="number" name="num2"></label><br>
                </fieldset>
                <fieldset>
                    <legend>Операция</legend>
                    <label><input type="radio" name="operation" value="add"> Сложение</label><br>
                    <label><input type="radio" name="operation" value="subtract"> Вычитание</label><br>
                </fieldset>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>17. Табличный ввод чисел</h3>
            <form id="task17">
                <input type="hidden" name="task_id" value="task17">
                <table>
                    <tr><th>Число 1</th><th>Число 2</th></tr>
                    <tr><td><input type="number" name="num1[]"></td><td><input type="number" name="num2[]"></td></tr>
                    <tr><td><input type="number" name="num1[]"></td><td><input type="number" name="num2[]"></td></tr>
                </table>
                <button type="submit">Сложить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>18. Вложенные группы операций</h3>
            <form id="task18">
                <input type="hidden" name="task_id" value="task18">
                <fieldset>
                    <legend>Основная операция</legend>
                    <label><input type="radio" name="main_operation" value="add"> Сложение</label><br>
                    <label><input type="radio" name="main_operation" value="subtract"> Вычитание</label><br>
                    <fieldset>
                        <legend>Дополнительная операция</legend>
                        <label><input type="checkbox" name="extra_operation[]" value="multiply"> Умножение</label><br>
                        <label><input type="checkbox" name="extra_operation[]" value="divide"> Деление</label><br>
                    </fieldset>
                </fieldset>
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>19. Выбор основной и дополнительной операции</h3>
            <form id="task19">
                <input type="hidden" name="task_id" value="task19">
                <label>Основная операция:
                    <select name="main_operation">
                        <option value="add">Сложение</option>
                        <option value="subtract">Вычитание</option>
                    </select>
                </label><br>
                <label>Дополнительная операция:
                    <select name="extra_operation">
                        <option value="multiply">Умножение</option>
                        <option value="divide">Деление</option>
                    </select>
                </label><br>
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>20. Динамическое добавление полей</h3>
            <form id="task20">
                <input type="hidden" name="task_id" value="task20">
                <div id="inputs">
                    <label>Число 1: <input type="number" name="numbers[]"></label><br>
                </div>
                <button type="button" id="addField">Добавить поле</button>
                <button type="submit">Вычислить сумму</button>
            </form>
            <div class="output-block"></div>
        </div>

        <script>
            document.getElementById('addField').addEventListener('click', function() {
                const inputs = document.getElementById('inputs');
                const newInput = document.createElement('label');
                newInput.innerHTML = `Число ${inputs.children.length + 1}: <input type="number" name="numbers[]"><br>`;
                inputs.appendChild(newInput);
            });
        </script>

        <div class="task-block">
            <h3>21. Визуализация с помощью &lt;meter&gt;</h3>
            <form id="task21">
                <input type="hidden" name="task_id" value="task21">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Показать отношение</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>22. Графическое отображение с помощью &lt;canvas&gt;</h3>
            <form id="task22">
                <input type="hidden" name="task_id" value="task22">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Нарисовать график</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>23. Визуализация с помощью &lt;progress&gt;</h3>
            <form id="task23">
                <input type="hidden" name="task_id" value="task23">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <button type="submit">Показать прогресс</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>24. Обработка формы с помощью AJAX</h3>
            <form id="task24">
                <input type="hidden" name="task_id" value="task24">
                <label>Имя: <input type="text" name="name"></label><br>
                <label>Возраст: <input type="number" name="age"></label><br>
                <label>Хобби: <input type="text" name="hobby"></label><br>
                <button type="submit">Отправить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>25. Динамическое обновление результата</h3>
            <form id="task25">
                <input type="hidden" name="task_id" value="task25">
                <label>Число 1: <input type="number" name="num1" oninput="calculateSum()"></label><br>
                <label>Число 2: <input type="number" name="num2" oninput="calculateSum()"></label><br>
            </form>
            <div class="output-block" id="result25"></div>
        </div>

        <script>
            function calculateSum() {
                const num1 = document.querySelector('input[name="num1"]').value;
                const num2 = document.querySelector('input[name="num2"]').value;
                const result = parseFloat(num1) + parseFloat(num2);
                document.getElementById('result25').innerText = "Сумма: " + result;
            }
        </script>

        <div class="task-block">
            <h3>26. Многошаговая форма</h3>
            <form id="task26">
                <input type="hidden" name="task_id" value="task26">
                <div id="step1">
                    <label>Число 1: <input type="number" name="num1"></label><br>
                    <button type="button" onclick="nextStep()">Далее</button>
                </div>
                <div id="step2" style="display: none;">
                    <label>Число 2: <input type="number" name="num2"></label><br>
                    <button type="submit">Вычислить</button>
                </div>
            </form>
            <div class="output-block"></div>
        </div>

        <script>
            function nextStep() {
                document.getElementById('step1').style.display = 'none';
                document.getElementById('step2').style.display = 'block';
            }
        </script>

        <div class="task-block">
            <h3>27. Сохранение промежуточных результатов</h3>
            <form id="task27">
                <input type="hidden" name="task_id" value="task27">
                <div id="step1">
                    <label>Число 1: <input type="number" name="num1"></label><br>
                    <button type="button" onclick="saveStep1()">Далее</button>
                </div>
                <div id="step2" style="display: none;">
                    <label>Число 2: <input type="number" name="num2"></label><br>
                    <button type="submit">Вычислить</button>
                </div>
            </form>
            <div class="output-block"></div>
        </div>

        <script>
            function saveStep1() {
                const num1 = document.querySelector('input[name="num1"]').value;
                localStorage.setItem('num1', num1); // Сохраняем число 1
                document.getElementById('step1').style.display = 'none';
                document.getElementById('step2').style.display = 'block';
            }

            // Восстановление данных при загрузке страницы
            window.onload = function() {
                const savedNum1 = localStorage.getItem('num1');
                if (savedNum1) {
                    document.querySelector('input[name="num1"]').value = savedNum1;
                }
            };
        </script>

        <div class="task-block">
            <h3>28. Вычисление дней между датами</h3>
            <form id="task28">
                <input type="hidden" name="task_id" value="task28">
                <label>Дата 1: <input type="date" name="date1"></label><br>
                <label>Дата 2: <input type="date" name="date2"></label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <div class="task-block">
            <h3>29. Зависимые поля ввода</h3>
            <form id="task29">
                <input type="hidden" name="task_id" value="task29">
                <label>Выберите операцию:
                    <select name="operation" onchange="toggleFields()">
                        <option value="add">Сложение</option>
                        <option value="multiply">Умножение</option>
                        <option value="power">Возведение в степень</option>
                    </select>
                </label><br>
                <div id="numFields">
                    <label>Число 1: <input type="number" name="num1"></label><br>
                    <label>Число 2: <input type="number" name="num2"></label><br>
                </div>
                <div id="powerField" style="display: none;">
                    <label>Степень: <input type="number" name="power"></label><br>
                </div>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
        </div>

        <script>
            function toggleFields() {
                const operation = document.querySelector('select[name="operation"]').value;
                if (operation === 'power') {
                    document.getElementById('numFields').style.display = 'none';
                    document.getElementById('powerField').style.display = 'block';
                } else {
                    document.getElementById('numFields').style.display = 'block';
                    document.getElementById('powerField').style.display = 'none';
                }
            }
        </script>

        <div class="task-block">
            <h3>30. Калькулятор с историей операций</h3>
            <form id="task30">
                <input type="hidden" name="task_id" value="task30">
                <label>Число 1: <input type="number" name="num1"></label><br>
                <label>Число 2: <input type="number" name="num2"></label><br>
                <label>Операция:
                    <select name="operation">
                        <option value="add">Сложение</option>
                        <option value="subtract">Вычитание</option>
                        <option value="multiply">Умножение</option>
                        <option value="divide">Деление</option>
                    </select>
                </label><br>
                <button type="submit">Вычислить</button>
            </form>
            <div class="output-block"></div>
            <div id="history"></div>
        </div>

        <script>
            let history = [];

            $(document).ready(function() {
                $('form').on('submit', function(event) {
                    event.preventDefault();
                    const form = $(this);
                    const taskId = form.attr('id');
                    const outputBlock = form.next('.output-block');
                    const historyBlock = $('#history');

                    $.ajax({
                        url: 'process2.php',
                        type: 'POST',
                        data: form.serialize(),
                        success: function(response) {
                            outputBlock.html(response);
                            history.push(response); // Добавляем результат в историю
                            historyBlock.html("<h4>История операций:</h4><ul>");
                            history.forEach((item, index) => {
                                historyBlock.append(`<li>${index + 1}. ${item}</li>`);
                            });
                            historyBlock.append("</ul>");
                        },
                        error: function() {
                            outputBlock.html('Ошибка при отправке данных.');
                        }
                    });
                });
            });
        </script>
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
                    url: 'process2.php', // Файл для обработки данных
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