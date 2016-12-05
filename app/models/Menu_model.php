<?php

class Menu_model
{

    /**
     * Получаем массив каталогов
     *
     * @return array
     */
    public function get_cat()
    {
        new DB();

        $sql = "SELECT * FROM categories";
        $result = mysql_query($sql);
        if (!$result) {
            return NULL;
        }

        $arr_category = array();
        if (mysql_num_rows($result) != 0) {

            for ($i = 0; $i < mysql_num_rows($result); $i++) {
                $row = mysql_fetch_array($result, MYSQL_ASSOC);

                //Создаем массив, ключи которого являются ID на родительские категории
                if (empty($arr_category[$row['parent_id']])) {
                    $arr_category[$row['parent_id']] = array();
                }
                $arr_category[$row['parent_id']][] = $row;
            }

            return $arr_category;
        }
    }
}