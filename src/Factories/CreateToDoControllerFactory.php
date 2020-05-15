<?php


namespace App\Factories;


use App\Controllers\CreateToDoController;
use Psr\Container\ContainerInterface;

class CreateToDoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        $createToDoController = new CreateToDoController($toDoModel);

        return $createToDoController;
    }
}