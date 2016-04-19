<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'roe_id'); ?>
		<?php echo $form->textField($model,'roe_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'uso_id'); ?>
		<?php echo $form->textField($model,'uso_id'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
