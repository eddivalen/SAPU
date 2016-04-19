<?php
/* @var $this DimensionesController */
/* @var $model Dimensiones */

$this->breadcrumbs=array(
	'Dimensiones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dimensiones', 'url'=>array('index')),
	array('label'=>'Manage Dimensiones', 'url'=>array('admin')),
);
?>

<h1>Create Dimensiones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>