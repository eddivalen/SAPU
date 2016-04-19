<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pna_id_persona'); ?>
		<?php
		 echo $form->hiddenField($model,'pna_id_persona',array()); // Campo oculto para guardar el ID de la persona seleccionada
		 $this->widget('zii.widgets.jui.CJuiAutoComplete',
		   array(
		    'name'=>'nombre', // Nombre para el campo de autocompletar
		    'model'=>$model,
		    'value'=>$model->isNewRecord ? '' : $model->personas->nombre,
		    'source'=>$this->createUrl('usuarios/autocomplete'), // URL que genera el conjunto de datos
		    'options'=> array(
		      'showAnim'=>'fold',
		      'size'=>'30',
		      'minLength'=>'3', // Minimo de caracteres que hay que digitar antes de relizar la busqueda
		      'select'=>"js:function(event, ui) { 
		       $('#Usuarios_pna_id_persona').val(ui.item.id); // HTML-Id del campo
		       }"
		      ),
		    'htmlOptions'=> array(
		     'size'=>60,
		     'placeholder'=>'Buscar persona...',
		     'title'=>'Indique la persona.'
		     ),
		   ));  
		 ?>
 <?php echo $form->error($model,'pna_id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tpo_id'); ?>
		<?php echo $form->textField($model,'tpo_id'); ?>
		<?php echo $form->error($model,'tpo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->