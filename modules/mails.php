<?php
$email = "autobagaz@yandex.ru";

$zakaz = "
Заказан товар: ".$_SESSION['tovar'].";
Имя: ".$name.";
Телефон: ".$phone.";
Марка машины: ".$auto.";
Тип кузова: ".$kuzov.";
Год выпуска: ".$year.";
Текст сообщения: ".$text.";

Техническая информация
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$prokat = "
Заказан товар: ".$_SESSION['tovar'].";
Имя: ".$name.";
Телефон: ".$phone.";
Оборудование: ".$bagazhnik.", ".$autobox.", ".$velokreplenie_krysha.", ".$velokreplenie_farkop.", ".$lyzhnoe_kreplenie.", ".$braslets.";
Срок: ".$time.";
Дополнительная информация: ".$text.";

Техническая информация:
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$call = "
Страница с которой отправлено письмо: ".$_SESSION['url'].";
Имя: ".$name.";
Телефон: ".$phone.";

Техническая информация
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$help = "
Страница с которой отправлено письмо: ".$_SESSION['url'].";
Имя: ".$name.";
Телефон: ".$phone.";
Сообщение: ".$message.";

Техническая информация
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";

$rewiewmail = "
Имя отправителя: ".$name.";
Телефон: ".$phone.";
Текст отзыва: ".$rewiew.";

Техническая информация
ip-адрес: ".$_SERVER['REMOTE_ADDR']."
Ссылка на скрипт, который прислал письмо: ".$_SERVER['REQUEST_URI']."
";