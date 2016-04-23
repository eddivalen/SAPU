<?php
/* @var $this AdicionalesController */
/* @var $model Adicionales */

$this->breadcrumbs=array(
	'Adicionales'=>array('index'),
	$model->ige_codigo=>array('view','id'=>$model->ige_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Adicionales', 'url'=>array('index')),
	array('label'=>'Create Adicionales', 'url'=>array('create')),
	array('label'=>'View Adicionales', 'url'=>array('view', 'id'=>$model->ige_codigo)),
	array('label'=>'Manage Adicionales', 'url'=>array('admin')),
);
?>

<h1>Update Adicionales <?php echo $model->ige_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>