<?php
/* @var $this FilialController */
/* @var $model Filial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFilial'); ?>
		<?php echo $form->textField($model,'idFilial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEndereco'); ?>
		<?php echo $form->dropDownList($model, 'idEndereco',
	                                       CHtml::listData(Endereco::model()->findAll(), 'idEndereco', 'idEndereco'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inscEstadual'); ?>
		<?php echo $form->textField($model,'inscEstadual',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idContato'); ?>
		<?php echo $form->dropDownList($model, 'idContato',
	                                       CHtml::listData(Contato::model()->findAll(), 'idContato', 'idContato'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->