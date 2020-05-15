<?php


namespace App\Factories;


use App\Models\ToDoModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('DBUtility')::getConnection();
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $toDoModel = new ToDoModel($db);

        return $toDoModel;
    }
}