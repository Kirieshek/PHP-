<h2>Выберите дату</h2>
<form method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <select name="month">
        <?php 
            $months = array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");
            foreach ($months as $key => $month) { ?>
                <option value="<?php echo $key + 1; ?>"><?php echo $month; ?></option>
        <?php } ?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>
    <button type="submit" name="submit">Показать день недели</button>
</form>

<?php
    if (isset($_POST['submit'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        $dateString = $year . "-" . $month . "-" . $day;
        $dayOfWeek = date('l', strtotime($dateString));

        echo "<h3>Выбранная дата: $day.$month.$year</h3>";
        echo "<h3>День недели: $dayOfWeek</h3>";
    }
?>
