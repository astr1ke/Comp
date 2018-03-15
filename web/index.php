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


$form = new Form();

echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo "<br/>";

echo $form->input(['type'=>'text', 'value'=>'!!!']);
//Код выше выведет <input type="text" value="!!!">
echo "<br/>";

echo $form->password(['value'=>'!!!']);
//Код выше выведет <input type="password" value="!!!">
echo "<br/>";

echo $form->textarea(['placeholder'=>'123', 'value'=>'!!!']);
//Код выше выведет <textarea placeholder="123">!!!</textarea>
echo "<br/>";

echo $form->submit(['value'=>'go']);
//Код выше выведет <input type="submit" value="go">
echo "<br/>";

echo $form->close();
//Код выше выведет </form>

