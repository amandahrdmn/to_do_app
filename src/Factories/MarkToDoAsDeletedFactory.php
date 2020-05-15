<?php


namespace App\Factories;


use App\Controllers\MarkToDoAsDeletedController;
use Psr\Container\ContainerInterface;

class MarkToDoAsDeletedFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        $markToDoAsDeletedController = new MarkToDoAsDeletedController($toDoModel);

        return $markToDoAsDeletedController;
    }
}