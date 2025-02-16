<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    $to = "yaroslav_bykov_06@mail.ru"; // Замените на ваш email
    $subject = "Новая заявка от $name";
    $message = "ФИО: $name\nТелефон: $phone\nEmail: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>
