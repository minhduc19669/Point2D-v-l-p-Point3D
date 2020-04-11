<?php

class Point3D extends Point2D
{
    private $z;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function setZ($z){
        $this->z=$z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ($x,$y,$z){
        parent::setXY($x,$y);
        $this->z=$z;
    }
    public function getXYZ(){
        $array[]=$this->getX();
        $array[]=$this->getY();
        $array[]=$this->getZ();
        return json_encode($array);
    }
    public function __toString()
    {
        return parent::__toString().$this->getXYZ();
    }
}