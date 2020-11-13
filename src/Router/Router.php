<?php 

namespace NeueFische\Router;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Router {
    private $urlControllerMapping = [];
    private $templateRenderer;

    public function __construct(array $urlControllerMapping) {
        $this->urlControllerMapping = $urlControllerMapping;

        $loader = new FilesystemLoader(__dir__ . '/../templates');
        $this->templateRenderer = new Environment($loader);
    }

    public function route(string $url) {
        /* Example $url = '/'
        $mapping = [
            "/" => HomeController::class,
            "/scoreboard" => ScoreboardController::class,
        ]

        $urlControllerClass = $mapping["/"]
        $urlControllerClass = HomeController::class;

        $controller = new HomeController();
        */

        // find controller for request
        $urlControllerClass = $this->urlControllerMapping[$url];
        $controller = new $urlControllerClass();
        
        // execute controller
        $response = $controller->get();
        
        // render template with result from controller
        echo $this->templateRenderer->render(
            $response->templatePath, // "header.html"
            $response->templateVars // ["headline" => "Home", ...]
        );
    }
}