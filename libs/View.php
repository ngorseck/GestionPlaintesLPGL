<?php
namespace libs;
class View
{
    public function __construct()
    {

    }

    public function load()
    {
        $num = func_num_args();
        $args = func_get_args();

        switch ($num) {
            case 1:
                $fileNane = "src/view/".$args[0].".php";
                if(file_exists($fileNane))
                {
                    require_once $fileNane;
                }else {
                    die($fileNane." n'existe pas");
                }
                break;
            case 2:
                $fileNane = "src/view/".$args[0].".php";
                if(file_exists($fileNane))
                {
                    $datas = $args[1];
                    require_once $fileNane;
                }else {
                    die($fileNane." n'existe pas");
                }
                break;
            
        }
    }
}
?>