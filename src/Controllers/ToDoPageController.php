<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\Interfaces\ModelInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class ToDoPageController extends Controller
{
    private $toDoModel;
    private $renderer;

    /**
     * ToDoPageController constructor.
     * @param $toDoModel
     * @param $renderer
     */
    public function __construct(PhpRenderer $renderer, ModelInterface $toDoModel)
    {
        $this->toDoModel = $toDoModel;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $uncompleted_entries = $this->toDoModel->getUncompletedToDo();
        $completed_entries = $this->toDoModel->getCompletedToDo();
        $data = [
            "uncompleted" => $uncompleted_entries,
            "completed" => $completed_entries
        ];
        return $this->renderer->render($response, "ToDoView.php", $data);
    }
}