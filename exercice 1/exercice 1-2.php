<?php

class html {

    public function link($href, $rel){

        return '<link href="'.$ref.'" rel="'.$rel.'"/>';

    }

    public function stylesheet($href){

        return $this->link($href, 'stylesheet');
    }

    public function image($src, $alt=""){

        return '<img src="'.$src.'" alt="'.$alt.'">';
    }

    public function a($href, $value){

        return '<a href="'.$href.'" >'.$value.'</a>';
    }

    public function script($src){

        return '<script src="'.$src.'"></script>';
    }
}

?>
html