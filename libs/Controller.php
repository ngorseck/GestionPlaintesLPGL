<?php
namespace libs;
class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
?>