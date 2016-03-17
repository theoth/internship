<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InternshipPosition', 'url'=>array('index')),
	array('label'=>'Manage InternshipPosition', 'url'=>array('admin')),
);
?>

<h1>Create InternshipPosition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>