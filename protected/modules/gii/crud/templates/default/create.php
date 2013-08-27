<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	Yii::t('app','Create'),
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('app','List').' <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create').' '.$this->modelClass; ?></h1>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
