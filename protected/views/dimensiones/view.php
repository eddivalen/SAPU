<?php
/* @var $this DimensionesController */
/* @var $model Dimensiones */

$this->breadcrumbs=array(
	'Dimensiones'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Dimensiones', 'url'=>array('index')),
	array('label'=>'Create Dimensiones', 'url'=>array('create')),
	array('label'=>'Update Dimensiones', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Dimensiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dimensiones', 'url'=>array('admin')),
);
?>

<h1>View Dimensiones #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
	),
)); ?>
