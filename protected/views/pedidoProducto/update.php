<?php
/* @var $this PedidoProductoController */
/* @var $model PedidoProducto */

$this->breadcrumbs=array(
	'Pedido Productos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List PedidoProducto', 'url'=>array('index')),
	array('label'=>'Create PedidoProducto', 'url'=>array('create')),
	array('label'=>'View PedidoProducto', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage PedidoProducto', 'url'=>array('admin')),
);
?>

<h1>Update PedidoProducto <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>