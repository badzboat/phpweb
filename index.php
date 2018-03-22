<html><body>
  <p> </p>
  Name: <input type="text" name="name" value="<?php echo $name;?>">E-mail: <input type="text" name="email" value="<?php echo $email;?>">Website: <input type="text" name="website" value="<?php echo $website;?>">Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>Gender:<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male">Male
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p> </p>
  <p><img src='ocp.jpg' style='position:fixed;top:0px;left:0px;width:80%;height:80%;z-index:-1;'></p>
  <p> </p>
</body>
</html>

