<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesModulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rolesModulosgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage RolesModulos</h1>

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
    'id'=>'rolesModulosgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
      array(
         'name'=> 'mol_id',
         'value'=> '$data->molId->descripcion',
          ),
        //'mol_id',
        array(
          'name' => 'roe_id',
          'value' => '$data->roeId->descripcion',    

            ),
        //'roe_id',
        
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolesModulos/view/", 
                                            array("mol_id"=>$data->mol_id, "roe_id"=>$data->roe_id
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolesModulos/update/", 
                                            array("mol_id"=>$data->mol_id, "roe_id"=>$data->roe_id
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolesModulos/delete/", 
                                            array("mol_id"=>$data->mol_id, "roe_id"=>$data->roe_id
											))',
                ),
            ),
        ),
    ),
)); ?>
