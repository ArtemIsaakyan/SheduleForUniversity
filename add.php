<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
        integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Редактироване расписания</title>
</head>

<body>
    <header>
        <h1>Shedule<span>Manager</span></h1>
        <!-- <div class="month">
            <select name="" id="filter-month">
                <option value="">January</option>
                <option value="">February</option>
                <option value="">Mart</option>
                <option value="">April</option>
                <option value="">May</option>
                <option value="">June</option>
                <option value="">July</option>
                <option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
                <option value="">November</option>
                <option value="">December</option>
            </select>
        </div> -->
        <!-- <div class="year">
            <select name="" id="filter-year">
                <option value="">2021</option>
            </select>
        </div>
        <button class="refresh">Show</button> -->
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <td id="month-table" colspan="7">September</td>
                </tr>
                <tr>
                    <td id="style-week">№ Week</td>
                    <td>Monday</td>
                    <td>Tuesday</td>
                    <td>Wednesday</td>
                    <td>Thursday</td>
                    <td>Friday</td>
                    <td>Saturday</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <tr>
                    <td id="number-week">1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="day">1</div>
                        <div class="options-out"></div>
                        <button onclick="showInput()"><img src="images/plus.png"></button>
                        <div id="1">
                            <button onclick="showInputClose()">Закрыть окно</button>
                            <form action="function.php" method="POST">
                                <p>Выбрать преподавателя:</p>
                                <div class="show-teachers"></div>
                                <p>Выбрать предмет:</p>
                                <div class="show-lessons"></div>
                                <p>Выбрать тип предмета:</p>
                                <div class="show-types"></div>
                                <p>Выбрать форму проведения занятия:</p>
                                <div class="show-form-lessons"></div>
                                <p>Выбрать время занятия:</p>
                                <div class="time-lessons"></div>
                                <p>Выбрать группу:</p>
                                <div class="show-groups"></div>
                                <button type="submit" id="1" class="add-to-shedule">Сохранить</button>
                            </form>
                        </div>

                    </td>
                    <td>2</td>
                </tr>
                <tr>
                    <td id="number-week">2</td>
                    <td>
                        <div class="day">4</div>
                    </td>
                    <td>
                        <div class="day">5</div>
                    </td>
                    <td>
                        <div class="day">6</div>
                    </td>
                    <td>
                        <div class="day">7</div>
                    </td>
                    <td>
                        <div class="day">8</div>
                    </td>
                    <td>
                        <div class="day">9</div>
                    </td>
                </tr>
                <tr>
                    <td id="number-week">3</td>
                    <td>
                        <div class="day">11</div>
                    </td>
                    <td>
                        <div class="day">12</div>
                    </td>
                    <td>
                        <div class="day">13</div>
                    </td>
                    <td>
                        <div class="day">14</div>
                    </td>
                    <td>
                        <div class="day">15</div>
                    </td>
                    <td>
                        <div class="day">16</div>
                    </td>
                </tr>
                <tr>
                    <td id="number-week">4</td>
                    <td>
                        <div class="day">18</div>
                    </td>
                    <td>
                        <div class="day">19</div>
                    </td>
                    <td>
                        <div class="day">20</div>
                    </td>
                    <td>
                        <div class="day">21</div>
                    </td>
                    <td>
                        <div class="day">22</div>
                    </td>
                    <td>
                        <div class="day">23</div>
                    </td>
                </tr>
                <tr>
                    <td id="number-week">5</td>
                    <td>
                        <div class="day">25</div>
                    </td>
                    <td>
                        <div class="day">26</div>
                    </td>
                    <td>
                        <div class="day">27</div>
                    </td>
                    <td>
                        <div class="day">28</div>
                    </td>
                    <td>
                        <div class="day">29</div>
                    </td>
                    <td>
                        <div class="day">30</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>















<!-- <button id="remove"><img src="images/remove.png"></button>
                        <button id="new"><img src="images/plus.png"></button>
                        <button id="edit"><img src="images/pencil.png"></button>