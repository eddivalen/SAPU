<?php
/* @var $this UnidadMedidaController */
/* @var $model UnidadMedida */

$this->breadcrumbs=array(
	'Unidad Medidas'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List UnidadMedida', 'url'=>array('index')),
	array('label'=>'Create UnidadMedida', 'url'=>array('create')),
	array('label'=>'Update UnidadMedida', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete UnidadMedida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>View UnidadMedida #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
	),
)); ?>
