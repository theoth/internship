<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('index')),
	//array('label'=>'Create Department', 'url'=>array('create')),
	//array('label'=>'View Department', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>Ενημέρωση</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>