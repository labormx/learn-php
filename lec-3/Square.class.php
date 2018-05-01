<?php

class Square extends Figure
{
    public final function getArea(){
        return $this->width * $this->height;
    }
}