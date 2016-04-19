<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesModulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
    array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>Create RolesModulos</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
