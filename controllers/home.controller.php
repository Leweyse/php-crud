<?php
declare(strict_types = 1);


class homeController
{
    public function render(array $GET, array $POST)
    {
        require "views/home.php";
    }
}