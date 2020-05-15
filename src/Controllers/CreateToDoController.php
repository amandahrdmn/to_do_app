<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\Interfaces\ModelInterface;
use App\Interfaces\ValidatorInterface;
use App\Validators\ToDoLengthValidator;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CreateToDoController extends Controller
{
    private $toDoModel;

    /**
     * CreateToDoController constructor.
     * @param $toDoModel
     */
    public function __construct(ModelInterface $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $valid_entry = ToDoLengthValidator::validateToDoLength($data['text']);

        if ($valid_entry) {
            $this->toDoModel->createToDo($data);
        }

        return $response->withHeader('Location', '/to_do');
    }
}