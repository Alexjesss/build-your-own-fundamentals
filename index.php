<?php
require 'Models/ArticleLoader.php';
require 'Models/Database.php';
require 'Models/ProductLoader.php';

require 'Controllers/ArticleController.php';
require 'Controllers/HomepageController.php';
require 'Controllers/ProductController.php';

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'products') {
        $controller = new ProductController();
        $controller->render($_GET, $_POST);
    } else if ($_GET['page'] === 'articles') {
        $controller = new ArticleController();
        $controller->render($_GET, $_POST);
    }
} else {
    $controller = new HomepageController();
}
$controller->render($_GET, $_POST);


