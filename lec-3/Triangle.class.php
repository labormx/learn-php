<?php
class Triangle extends Figure{
    public final function getArea(){
        return $this->width * $this->height / 2;
    }
}