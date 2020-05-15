<?php


namespace App\Factories;


use App\Controllers\MarkToDoAsCompletedController;
use Psr\Container\ContainerInterface;

class MarkToDoAsCompletedFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $toDoModel = $container->get('ToDoModel');
        $markToDoAsCompletedController = new MarkToDoAsCompletedController($toDoModel);

        return $markToDoAsCompletedController;
    }
}