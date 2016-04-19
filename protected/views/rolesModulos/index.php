<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesModulos',
);

$this->menu=array(
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>Roles Modulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
