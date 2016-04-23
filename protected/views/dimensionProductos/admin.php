<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'DimensionProductoss'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DimensionProductoss', 'url'=>array('index')),
	array('label'=>'Create DimensionProductos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dimensionProductosgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage DimensionProductoss</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'dimensionProductosgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'precio',
         array(
         'name'=> 'dmo_codigo',
         'value'=> '$data->dmoCodigo->descripcion',
          ),
        //'mol_id',
        array(
          'name' => 'pro_codigo',
          'value' => '$data->proCodigo->descripcion',    

            ),
      
        
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("dimensionProductos/view/", 
                                            array("precio"=>$data->precio,"dmo_codigo"=>$data->dmo_codigo, "pro_codigo"=>$data->pro_codigo
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("dimensionProductos/update/", 
                                            array("precio"=>$data->precio,"dmo_codigo"=>$data->dmo_codigo, "pro_codigo"=>$data->pro_codigo
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("dimensionProductos/delete/", 
                                            array("precio"=>$data->precio,"dmo_codigo"=>$data->dmo_codigo, "pro_codigo"=>$data->pro_codigo
											))',
                ),
            ),
        ),
    ),
)); ?>
