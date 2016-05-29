<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('index')),
	//array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>