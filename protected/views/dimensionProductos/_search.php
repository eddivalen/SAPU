<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'dmo_codigo'); ?>
		<?php echo $form->textField($model,'dmo_codigo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'pro_codigo'); ?>
		<?php echo $form->textField($model,'pro_codigo'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
