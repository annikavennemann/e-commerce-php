<?php 

namespace NeueFische\Router;

class ControllerResponse {
    public $templatePath;
    public $templateVars;

    public function __construct(string $templatePath, array $templateVars) {
        $this->templatePath = $templatePath;
        $this->templateVars = $templateVars;
    }
}