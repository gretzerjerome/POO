<?php 

class form {

    public function create($action)
    {
        return '<form action="'.$action.'">';
    }
    public function end()
    {
        return '</form>';
    }
    public function text ($name, $value){
        return '<input type="text" name="'.$name.'" value="'.$value.'" />';
    }

    public function textarea($text)
    {
        return '<textarea>'.$text.'</textarea>';
    }

    public function radio($name, $value){

        return '<input type="radio" name="'.$name.'" value="'.$value.'"/>';
    }

    public function submit ($message){
        return '<input type="submit" name="'.$message.'" value="'.$message.'"/>';

    }

}