<?php
use libs\Controller;
class Lieu extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "index";
    }
    public function liste()
    {
        $lieux = array("dakar", "thies");
        $this->view->load("lieu/liste", $lieux);
    }
    public function get($id)
    {
        echo $id;
    }
}
?>