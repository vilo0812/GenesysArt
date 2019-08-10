<?php
    class DefectController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->viewDefect("welcome");
        }
    }
    $controller = new DefectController();
    $controller->$action();
