<?php
/* @var $this CargoController */
/* @var $model Cargo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCargo'); ?>
		<?php echo $form->textField($model,'idCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSetor'); ?>
		<?php echo $form->dropDownList($model, 'idSetor',
	                                       CHtml::listData(Setor::model()->findAll(), 'idSetor', 'nome'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCargoSuperior'); ?>
		<?php echo $form->dropDownList($model, 'idCargoSuperior',
	                                       CHtml::listData(Cargo::model()->findAll(), 'idCargo', 'nome'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->