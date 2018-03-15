<?php


class Form
{

    function input($Imass)
    {
        $Istr = "<input ";
        $Istr .= $this->MassToStr($Imass);
        $Istr .= ">";
        return $Istr;

    }
    function submit($Smass)
    {
        $Sstr = "<input type=\"submit\" ";
        $Sstr .= $this->MassToStr($Smass);
        $Sstr .= ">";
        return $Sstr;
    }

    function password($Pmass)
    {
        $Pstr = "<input type=\"password\" ";
        $Pstr .= $this->MassToStr($Pmass);
        $Pstr .= ">";
        return $Pstr;
    }

    function textarea($Tmass)
    {
        $Tstr = "<textarea ";
        $Tstr .= $this->MassToStr($Tmass);
        $Tstr .= "</textarea>";
        return $Tstr;
    }

    function open($Omass)
    {
        $Ostr = "<form ";
        $Ostr .= $this->MassToStr($Omass);
        $Ostr .= ">";
        return $Ostr;
    }

    function close()
    {
        return "</form>";
    }

    private function MassToStr($Mass)
    {
        $str = '';

        if (key($Mass) == 'placeholder')
        {
            foreach ($Mass as $key => $value) {
                if ($key <> 'value'){
                $str .= "$key=\"$value\" ";}
                else {
                    $str .= ">$value";
                }
            }
        }else {
            foreach ($Mass as $key => $value) {
                $str .= "$key=\"$value\" ";
            }
        }
        return $str;

    }
}

class SmartForm
{
    public $input;
    public $password;
    public $textarea;

    public function __construct(){
        $this->input = $_POST['name'];
        $this->password = $_POST['pass'];
        $this->textarea = $_POST['123'];
    }



}

class Cookie
{

    public function set($Cname,$Cval){
        setcookie($Cname,$Cval);
    }

    public function get($Cname){
        return $_COOKIE[$Cname];
    }

    public function del($Cname){
        unset($_COOKIE[$Cname]);
    }

}

class Session
{
    public function __construct()
    {
        session_start();
    }

    static function set($Sname,$Sval){
        $_SESSION[$Sname] = $Sval;
    }

    static function get($Sname){
        return $_SESSION[$Sname];
    }

    static function del($Sname){
        unset($_SESSION[$Sname]);
    }

    static function prov($Sname){
        if (isset($_SESSION[$Sname])){
            return true;
        } else return false;
    }

}

class Flash
{
    public function setMessage($Cname,$Cval)
    {
        Session::set($Cname,$Cval);
    }
    public function getMessage($Cname)
    {
       return Session::get($Cname);
    }

}

class Db
{

    public function getD(){}

    public  function delD(){}

    public function editD(){}

    public function conD(){}

    public function clrT(){}

    public function clrTs(){}

}

$form = new Form();

echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();
$form2 = new SmartForm();


