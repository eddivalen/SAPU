<?php
/* @var $this ModulosController */
/* @var $model Modulos */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Modulos', 'url'=>array('index')),
	array('label'=>'Manage Modulos', 'url'=>array('admin')),
);
?>

<h1>Create Modulos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>