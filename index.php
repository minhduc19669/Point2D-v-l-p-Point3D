<?php
include "Point2D.php";
include "Point3D.php";
$point2d=new Point2D(2,3);

$point2d->setXY(3,4);
echo "Tọa độ của point2D là :".$point2d->getXY();
echo "<br>";
$point3d=new Point3D(1,2,3);
$point3d->setXYZ(2,3,4);
echo "Tọa độ của point3D là: ".$point3d->getXYZ();
