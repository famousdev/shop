<?php

class Category {

    public static function getCategoriesList() {

        $db = Db::getConnection();
        $categoryList = array();
        $result = $db->query('SELECT id, name FROM category ORDER BY sort_order ASC');
        
        $categoryList = $result->fetch();
        return $categoryList;
    } 
}