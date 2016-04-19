<?php
/* @var $this IngredientesController */
/* @var $model Ingredientes */

$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingredientes', 'url'=>array('index')),
	array('label'=>'Create Ingredientes', 'url'=>array('create')),
	array('label'=>'View Ingredientes', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Ingredientes', 'url'=>array('admin')),
);
?>

<h1>Update Ingredientes <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>