<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 24.12.2017
 * Time: 11:16
 */

return [
    'news/([a-zA-Z]+)/([0-9]+)' => 'news/view/$1/$2',
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index/',
];