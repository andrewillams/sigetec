<?php
/* @var $this CargoController */
/* @var $model Cargo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSetor'); ?>
		<?php echo $form->dropDownList($model, 'idSetor',
	                                       CHtml::listData(Setor::model()->findAll(), 'idSetor', 'nome'),
	                                       array('prompt'=>''));; ?>
		<?php echo $form->error($model,'idSetor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCargoSuperior'); ?>
		<?php echo $form->dropDownList($model, 'idCargoSuperior',
	                                       CHtml::listData(Cargo::model()->findAll(), 'idCargo', 'nome'),
	                                       array('prompt'=>''));; ?>
		<?php echo $form->error($model,'idCargoSuperior'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->