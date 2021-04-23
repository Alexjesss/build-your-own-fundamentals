<?php

class HomepageController
{
    public function render(): void
    {
        $title = 'Welcome to the homepage';
        $welcomeText = 'Welcome to the homepage';
        require 'View/homepage.php';
    }
}
