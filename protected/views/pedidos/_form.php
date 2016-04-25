<?php
/* @var $this PedidosController */
/* @var $model Pedidos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pna_id_persona'); ?>
		<?php
		 echo $form->hiddenField($model,'pna_id_persona',array()); // Campo oculto para guardar el ID de la persona seleccionada
		 $this->widget('zii.widgets.jui.CJuiAutoComplete',
		   array(
		    'name'=>'cedula', // Nombre para el campo de autocompletar
		    'model'=>$model,
		    'value'=>$model->isNewRecord ? '' : $model->personas->cedula,
		    'source'=>$this->createUrl('usuarios/autocomplete'), // URL que genera el conjunto de datos
		    'options'=> array(
		      'showAnim'=>'fold',
		      'size'=>'30',
		      'minLength'=>'1', // Minimo de caracteres que hay que digitar antes de relizar la busqueda
		      'select'=>"js:function(event, ui) { 
		       $('#Pedidos_pna_id_persona').val(ui.item.id); // HTML-Id del campo
		       }"
		      ),
		    'htmlOptions'=> array(
		     'size'=>60,
		     'placeholder'=>'Buscar persona por cedula...',
		     'title'=>'Indique la persona por su cedula.'
		     ),
		   ));  
		 ?>
 <?php echo $form->error($model,'pna_id_persona'); ?>
	</div>
	<div class="row">

	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php
		  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		   'model'=>$model,
		   'attribute'=>'fecha',
		   'value'=>$model->fecha,
		   'language' => 'es',
		   'htmlOptions' => array('readonly'=>"readonly"),
		   'options'=>array(
		    'autoSize'=>true,
		    'defaultDate'=>$model->fecha,
		    'dateFormat'=>'yy-mm-dd',
		    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
		    'buttonImageOnly'=>true,
		    'buttonText'=>'Fecha',
		    'selectOtherMonths'=>true,
		    'showAnim'=>'slide',
		    'showButtonPanel'=>true,
		    'showOn'=>'button', 
		    'showOtherMonths'=>true, 
		    'changeMonth' => 'true', 
		    'changeYear' => 'true', 
		    'minDate'=>'date("Y-m-d")', 
		    'maxDate'=> "+20Y",
		    ),
		  )); 
		 ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->