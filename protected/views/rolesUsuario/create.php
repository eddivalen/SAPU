<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesUsuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolesUsuarios', 'url'=>array('index')),
    array('label'=>'Manage RolesUsuario', 'url'=>array('admin')),
);
?>

<h1>Create RolesUsuario</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
