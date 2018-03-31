<?php


class receive{
    
    protected $num1,$num2,$num3;
    protected $func;

    public function __construct()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
            $this->num1 = (int)$_GET['num1'];
            $this->num2 = (int)$_GET['num2'];
            $this->num3 = (int)$_GET['num3'];
            $this->func =$_GET['func'];
            break;

            case 'POST':
            $this->num1 = (int)$_POST['num1'];
            $this->num2 = (int)$_POST['num2'];
            $this->num3 = (int)$_POST['num3'];
            $this->func =$_POST['func'];
            break;

            case 'PUT':
            parse_str(file_get_contents("php://input"),$new_array);//get stdin stream as string and parse
            $this->num1 = (int)$new_array['num1'];
            $this->num2 = (int)$new_array['num2'];
            $this->num3 = (int)$new_array['num3'];
            $this->func =$new_array['func'];
            break;
         
        }
    }
}