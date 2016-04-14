<?php
$arr1 = array(1,2,3);
print_r($arr1);
echo "<hr>";

$arr2 = [1,2,3];
print_r($arr2);
echo "<hr>";

$arr3 = [ 'a' => 1, 'b' => 2, 'c' => 3];
print_r($arr3);
echo "<hr>";

echo $name;
echo "<hr>";

$link1 = Yii::$app->urlManager->createUrl(['site/index']);
$link2 = Yii::$app->urlManager->createUrl(['first/array1','fname'=>' Wirote ','lname'=>' Thudsaringkansakul ']);
$link3 = Yii::$app->urlManager->createUrl(['first/array1','fname'=>' Jame ','lname'=>' Ji ']);
?>
<a href="<?= $link1 ?>">หน้าแรก</a>
<hr />
<a href="<?= $link2 ?>">ทดสอบส่งค่า</a>
<hr />
<a href="<?= $link3 ?>">ทดสอบส่งค่า</a>
<hr />
