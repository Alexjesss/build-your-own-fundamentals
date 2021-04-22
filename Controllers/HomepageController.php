<?php

class HomepageController
{
    public function render(array $GET, array $POST): void
    {
        $title = 'Welcome to the homepage';
        $welcomeText = 'Welcome to the homepage';
        require 'View/homepage.php';

    }
}
