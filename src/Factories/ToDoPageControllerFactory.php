<?php


namespace App\Factories;


use App\Controllers\ToDoPageController;
use Psr\Container\ContainerInterface;

class ToDoPageControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        $toDoPageController = new ToDoPageController($renderer, $toDoModel);

        return $toDoPageController;
    }
}