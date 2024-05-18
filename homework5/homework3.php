<?php
$horoscopes = array(
    'Стрелец' => array(
        '18.05.2024' => 'Сегодня будет удачный день для начала новых проектов. Постарайтесь проявить инициативу и решительность.',
        '19.05.2024' => 'Завтра вы можете столкнуться с небольшими препятствиями, но не паникуйте. Продолжайте двигаться вперед.',
    ),
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST['birthdate'];
    
    $sign = zodiac($birthdate);
    
    $currentDate = date('d.m.Y');
    
    echo "Гороскоп для знака зодиака \"$sign\" на $currentDate: <br>";
    echo $horoscopes[$sign][$currentDate];
}

function zodiac($birthdate) {
    list($day, $month) = explode(".", $birthdate);

    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return 'Овен';
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return 'Телец';
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return 'Близнецы';
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return 'Рак';
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return 'Лев';
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return 'Дева';
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return 'Весы';
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return 'Скорпион';
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return 'Стрелец';
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return 'Козерог';
    } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return 'Водолей';
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return 'Рыбы';
    }
}

?>

<h2>Введите вашу дату рождения</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Дата рождения: </label>
        <input type="text" name="birthdate" placeholder="дд.мм.гггг" required>
        <input type="submit" value="Получить гороскоп">
</form>