<?php

class News_model
{
    public function __construct()
    {
        new DB();
    }

    /**
     * Запрос на получение всех новостей
     *
     * @return resource
     */
    public function getAllNews()
    {
        $sql = 'SELECT * FROM `news`';
        $result = mysql_query($sql);

        if($result)
        {
            return $result;
        }
    }

    /**
     * Пагинация
     *
     * @return resource
     */
    public function paginate()
    {
        $rows_max = mysql_num_rows($this->getAllNews()); // Общее количество новостей в базе
        $view_pages = 5; // Выводимых новостей

        if (isset($_GET['page'])) {
            $this_page = filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT); // Номер текущей страницы
            $offset = (($view_pages * $this_page) - $view_pages);
        }
        else
        {
            $this_page = 1;
            $offset = 0;
        }

        // Делаем панель навигации
        if ($rows_max > $view_pages)
        {
            $r = 1;
            echo '<div class="pagination-my">';
            while ($r <= ceil($rows_max/$view_pages))
            {
                echo '<ul class=""><li><a href="?page=' . $r . '">' . $r . '</a></li></ul>';
                $r++;
            }
            echo '</div>';
        }

        $sql_pag = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT $offset, $view_pages";
        $result = mysql_query($sql_pag);

        return $result;
    }
}
?>