<?php
/* @var $this AdicionalesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adicionales',
);

$this->menu=array(
	array('label'=>'Create Adicionales', 'url'=>array('create')),
	array('label'=>'Manage Adicionales', 'url'=>array('admin')),
);
?>

<h1>Adicionales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
