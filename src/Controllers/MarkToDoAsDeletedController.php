<?php


namespace App\Controllers;

use App\Abstracts\Controller;
use App\Interfaces\ModelInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MarkToDoAsDeletedController extends Controller
{
    private $toDoModel;

    /**
     * MarkToDoAsDeletedController constructor.
     * @param $toDoModel
     */
    public function __construct(ModelInterface $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $this->toDoModel->markToDoAsDeleted($data);

        return $response->withHeader('Location', '/to_do');
    }
}