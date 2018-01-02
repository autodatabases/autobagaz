<?php
include ($_SERVER["DOCUMENT_ROOT"]."/modules/keywords.php");
include ($_SERVER["DOCUMENT_ROOT"]."/modules/headtags.php");
echo "<title> $titleconst"; echo $keywords[38][title]; echo "</title>";
echo "<meta name='description' content='"; echo $keywords[38][description]; echo "'/>";
echo "<meta name='keywords' content='"; echo $keywords[38][keywords]; echo "'/>"; ?>

<div class="wrapper">
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/header/header.php"); ?>
    <div class="wrapper-content">
        <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/left-nav/left-nav.html"); ?>
        <div class="content">
            <div class="page__header">
                <div class="page__header-tab special__tab-sale page__header-tab--active">Товары со скидкой</div>
                <div class="page__header-tab special__tab-komm">Комиссионные товары</div>
            </div>
            <div class="special__tab special__sale special__tab--active">
                Sale
            </div>

            <div class="special__tab special__komm">
                <?php include ($_SERVER["DOCUMENT_ROOT"]."/arrays/komissionka.php");

                echo "<h1 class='page__title-h1'>Комиссионка</h1>";
                echo "<p class='page__text'>В этом разделе мы продаем б/у багажники, автобоксы и аксессуары в рабочем состоянии. Часть багажников - использовались в прокате, часть - были оставлены на реализацию нашими клиентами. В течении 2-х недель вы можете вернуть багажник, если он вам не подойдет или окажется неисправен.</p>";
                echo "<p class='page__text'>Если у вас есть ненужный багажник - мы его купим.</p>";
                echo "<h2 class='page__title-h2'>Автомобильные багажники</h2>";

                // Соединение с БД MySQL
                $sql = mysql_connect('localhost', '9082410193', 'GfhjkmDatabase');
                mysql_select_db('9082410193_komm', $sql);

                mysql_query ("set_client='utf8'");//Следующие 2 строки решают проблему с кодировкой.
                mysql_query ("SET NAMES utf8");

                // Количество записей на странице
                $on_page = 10;

                // Получаем количество записей таблицы
                $query = "SELECT COUNT(*) FROM `bagazhniki`";
                $res = mysql_query($query);
                $count_records = mysql_fetch_row($res);
                $count_records = $count_records[0];

                // Получаем количество страниц
                // Делим количество всех записей на количество записей на странице
                // и округляем в большую сторону
                $num_pages = ceil($count_records / $on_page);

                // Текущая страница из GET-параметра page
                // Если параметр не определен, то текущая страница равна 1
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                // Если текущая страница меньше единицы, то страница равна 1
                if ($current_page < 1)
                {
                    $current_page = 1;
                }
                // Если текущая страница больше общего количества страница, то
                // текущая страница равна количеству страниц
                elseif ($current_page > $num_pages)
                {
                    $current_page = $num_pages;
                }

                // Начать получение данных от числа (текущая страница - 1) * количество записей на странице
                $start_from = ($current_page - 1) * $on_page;

                // Формат оператора LIMIT <ЗАПИСЬ ОТ>, <КОЛИЧЕСТВО ЗАПИСЕЙ>
                $query = "SELECT `bg_id`, `bg_name`, `bg_img1`, `bg_img2`, `bg_img3`, `bg_img4`, `bg_img5`, `bg_price` FROM `bagazhniki` ORDER BY `bg_id` ASC LIMIT $start_from, $on_page";
                $res = mysql_query($query);

                // Вывод результатов
                while ($row = mysql_fetch_assoc($res))
                {
                    echo '<div class="good">';
                        echo '<h2 class="good__name">'.$row['bg_name'].'</h2>';
                            echo '<div class="good__description">';
                                echo '<div class="img_div">';
                                    echo $row['bg_img1']; echo $row['bg_img2']; echo $row['bg_img3']; echo $row['bg_img4']; echo $row['bg_img5'];
                                echo '</div>';
                            echo '</div>';
                    echo '<p class="page__text">Цена '.$row['bg_price'].' рублей.</p>';
                    echo '</div>';
                }



                ?>


            </div>
        </div>
    </div>
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/modules/footer/footer.html");
    include ($_SERVER["DOCUMENT_ROOT"]."/modules/counters.html"); ?>
</div>