<?php
/* @var $this AdicionalesController */
/* @var $model Adicionales */

$this->breadcrumbs=array(
	'Adicionales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Adicionales', 'url'=>array('index')),
	array('label'=>'Manage Adicionales', 'url'=>array('admin')),
);
?>

<h1>Create Adicionales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>