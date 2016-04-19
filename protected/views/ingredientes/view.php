<?php
/* @var $this IngredientesController */
/* @var $model Ingredientes */

$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Ingredientes', 'url'=>array('index')),
	array('label'=>'Create Ingredientes', 'url'=>array('create')),
	array('label'=>'Update Ingredientes', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Ingredientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingredientes', 'url'=>array('admin')),
);
?>

<h1>View Ingredientes #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
		'cantidad',
		'tipo',
		'und_codigo',
	),
)); ?>
