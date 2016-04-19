<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */

$this->breadcrumbs=array(
	'Productos Ingredientes'=>array('index'),
	$model->ige_codigo=>array('view','id'=>$model->ige_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductosIngredientes', 'url'=>array('index')),
	array('label'=>'Create ProductosIngredientes', 'url'=>array('create')),
	array('label'=>'View ProductosIngredientes', 'url'=>array('view', 'id'=>$model->ige_codigo)),
	array('label'=>'Manage ProductosIngredientes', 'url'=>array('admin')),
);
?>

<h1>Update ProductosIngredientes <?php echo $model->ige_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>