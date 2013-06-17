<?php
$this->breadcrumbs += array(
	$model->name,
);

$this->menu = array(
	array('label' => \Yii::t('admin', 'LIST'), 'url' => array('index')),
	array('label' => \Yii::t('admin', 'CREATE'), 'url' => array('create')),
	array('label' => \Yii::t('admin', 'EDIT'), 'url' => array('update', 'id' => $model->idobj_type)),
	array('label' => \Yii::t('admin', 'DELETE'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idobj_type), 'confirm' => \Yii::t('admin', 'CONFIRM_DELETE'))),
);
?>

<h1><?php echo \Yii::t('admin', 'OBJECTS_TYPES_ID', array('{id}' => $model->idobj_type)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'htmlOptions' => array('class' => 'admin table table-striped'),
	'attributes' => array(
		'idobj_type',
		'name',
	),
)); ?>