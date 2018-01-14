<?php
include_once ROOT . '/models/Model_News.php';
include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
    public function actionIndex() {

        $result = Model_News::getNewsList();

        $this->view->news = $result;
        $this->view->some_data = 'Hello World';
        $this->view->time = time();
        $this->view->count = count($result);

        $this->view->generate('template_view.php', 'news/index.php');

        return true;
    }

    public function actionView( $id) {
        $result = Model_News::getNewsById($id);
       // require_once(ROOT . '/views/news/post.php');
        return true;
    }

}

