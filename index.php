<!DOCTYPE html><html><body><h1>I'm the rapper DRAKE . . . Call my name  D  R  A  K  E</h1><?phpecho "Hello World!";?>     

$imagepath="phpimages/ocp.jpg";

$image=imagecreatefromjpeg( $imagepath);

header('Content-Type: image/jpeg');

imagejpeg($image);

</body></html>
