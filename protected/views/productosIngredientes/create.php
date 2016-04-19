<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */

$this->breadcrumbs=array(
	'Productos Ingredientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductosIngredientes', 'url'=>array('index')),
	array('label'=>'Manage ProductosIngredientes', 'url'=>array('admin')),
);
?>

<h1>Create ProductosIngredientes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>