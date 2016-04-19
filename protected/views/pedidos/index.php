<?php
/* @var $this PedidosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidos',
);

$this->menu=array(
	array('label'=>'Create Pedidos', 'url'=>array('create')),
	array('label'=>'Manage Pedidos', 'url'=>array('admin')),
);
?>

<h1>Pedidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
