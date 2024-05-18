<form method="post">
    <textarea name="text" rows="5" cols="40"></textarea><br>
    <input type="submit" name="submit" value="Подсчитать">
</form>

<?php
    if(isset($_POST['submit'])){
        $text = $_POST['text'];

        if(!empty($text)){

            $text = trim($text);
            $text = preg_replace('/\s+/', ' ', $text);

            $words = preg_split('/\s+/', $text);
            $word_count = count($words);

            $char_count = mb_strlen($text);

            echo "Количество слов: $word_count<br>";
            echo "Количество символов: $char_count";
        } else {
            echo "Введите текст для подсчета слов и символов.";
        }
    }
?>
