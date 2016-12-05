<div class="panel panel-info">
    <div class="panel-heading">SQL запросы</div>
    <div class="panel-body">
        <h3>Вывести на экран сотрудников, получающих заработную плату большую чем у непосредственного руководителя</h3>

        <?php
        while($row = mysql_fetch_array($data['salary']))
        {
            echo $row['name'] . '<br/>';
        }
        ?>

        <h3>Вывести список сотрудников, получающих максимальную заработную плату в своем отделе</h3>
        <?php
        while($row = mysql_fetch_array($data['max_salary']))
        {
            echo $row['name'] . '<br/>';
        }
        ?>

        <h3>Вывести список ID отделов, количество сотрудников в которых не превышает 3 человек</h3>
        <?php

        if(mysql_num_rows($data['get_id']) == 0) {
            echo 'Не найдено';
        }
        else {
            while ($row = mysql_fetch_array($data['get_id'])) {
                echo $row['department_id'] . '<br/>';
            }
        }
        ?>

        <h3>Вывести список сотрудников, не имеющих назначенного руководителя, работающего в том-же отделе</h3>
        <?php
        while($row = mysql_fetch_array($data['no_head']))
        {
            echo $row['name'] . '<br/>';
        }
?>
    </div>
