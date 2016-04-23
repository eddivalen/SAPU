<?php
/* @var $this AdicionalesController */
/* @var $model Adicionales */

$this->breadcrumbs=array(
	'Adicionales'=>array('index'),
	$model->ige_codigo,
);

$this->menu=array(
	array('label'=>'List Adicionales', 'url'=>array('index')),
	array('label'=>'Create Adicionales', 'url'=>array('create')),
	array('label'=>'Update Adicionales', 'url'=>array('update', 'id'=>$model->ige_codigo)),
	array('label'=>'Delete Adicionales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ige_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Adicionales', 'url'=>array('admin')),
);
?>

<h1>View Adicionales #<?php echo $model->ige_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'precio_p',
		'precio_m',
		'precio_g',
		'ppo_codigo',
		'ige_codigo',
	),
)); ?>
