<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'DimensionProductoss'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DimensionProductoss', 'url'=>array('index')),
    array('label'=>'Manage DimensionProductos', 'url'=>array('admin')),
);
?>

<h1>Create DimensionProductos</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
