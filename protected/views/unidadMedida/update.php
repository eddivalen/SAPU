<?php
/* @var $this UnidadMedidaController */
/* @var $model UnidadMedida */

$this->breadcrumbs=array(
	'Unidad Medidas'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadMedida', 'url'=>array('index')),
	array('label'=>'Create UnidadMedida', 'url'=>array('create')),
	array('label'=>'View UnidadMedida', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage UnidadMedida', 'url'=>array('admin')),
);
?>

<h1>Update UnidadMedida <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>