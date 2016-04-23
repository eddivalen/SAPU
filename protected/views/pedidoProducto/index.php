<?php
/* @var $this PedidoProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedido Productos',
);

$this->menu=array(
	array('label'=>'Create PedidoProducto', 'url'=>array('create')),
	array('label'=>'Manage PedidoProducto', 'url'=>array('admin')),
);
?>

<h1>Pedido Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
