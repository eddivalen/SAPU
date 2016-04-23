<?php
/* @var $this PedidoProductoController */
/* @var $model PedidoProducto */

$this->breadcrumbs=array(
	'Pedido Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PedidoProducto', 'url'=>array('index')),
	array('label'=>'Manage PedidoProducto', 'url'=>array('admin')),
);
?>

<h1>Create PedidoProducto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>