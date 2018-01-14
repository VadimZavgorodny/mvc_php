<?php
class Model_News
{
    public static function getNewsById($id) {
        $db = Db::getConnection();

        $result = $db->query(
                "SELECT *
                 FROM news
                 WHERE news_id = $id
                 ORDER BY news_date DESC
                 LIMIT 10"
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function getNewsList() {
        $db = Db::getConnection();

        $result = $db->query(
                "SELECT *
                 FROM news
                 ORDER BY news_date DESC
                 LIMIT 10"
        );

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}