<?php echo "<title>Новость удалена!</title>";
include ($_SERVER["DOCUMENT_ROOT"]."/admin/headtags.html"); ?>

<div class="admin__container">
    <?php
    $dbname = "9082410193_news";

    include ($_SERVER["DOCUMENT_ROOT"]."/modules/connectdb.php");

    $id=$_REQUEST['news'];
    $delete_sql = "DELETE FROM news WHERE news_id=$id";
    mysqli_query($connect, $delete_sql) or die("<p class='page__text'>При удалении новости произошла ошибка</p>". mysqli_error());
    echo "<h3 class='page__title-h3'>Новость успешно удалена!</h3>"; ?>
    <div class="admin__link-down clearfix">
        <a class="admin__link" href="/admin/news/newsdelete.php">Вернуться к выбору новостей</a>
        <a class="admin__link" href="/admin/index.php">Вернуться на главную админки</a>
    </div>
</div>