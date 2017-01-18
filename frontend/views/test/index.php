<?php
use yii\helpers\Html;

?>
<h3>ทดสอบ action index</h3>

<?php

echo date('Y-m-d H:i:s');

?>
<hr>
<?php
echo Html::a('Link ไป test1', ['test/test1']);
echo "<br>";
echo Html::a('Link ไป test2', ['test/test2','param'=>'มาจาก index','param2'=>'test param2']);
?>
<br>
<a href="index.php?r=test/test1">Link ไป test1</a>