<?php
return [
    'product/([0-9]+)' => 'product/view/$1', 

    'catalog' => 'catalog/index',  

    'category/([0-9]+)' => 'catalog/category/$1', 

    'category/([0-9]+)/([0-9]+)' => 'catalog/category/$1/$2',

    'user/register' => 'user/register',
    'cabinet' => 'cabinet/index',

    '' => 'site/index', 
];