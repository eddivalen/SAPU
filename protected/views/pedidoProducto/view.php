<?php
/* @var $this PedidoProductoController */
/* @var $model PedidoProducto */

$this->breadcrumbs=array(
	'Pedido Productos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List PedidoProducto', 'url'=>array('index')),
	array('label'=>'Create PedidoProducto', 'url'=>array('create')),
	array('label'=>'Update PedidoProducto', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete PedidoProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PedidoProducto', 'url'=>array('admin')),
);
?>

<h1>View PedidoProducto #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'cantidad',
		'detalles',
		'impuesto',
		'pdo_codigo',
		'dmp_pro_codigo',
		'dmp_dmo_codigo',
	),
)); ?>
