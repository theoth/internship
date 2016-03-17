<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InternshipPosition', 'url'=>array('index')),
	array('label'=>'Create InternshipPosition', 'url'=>array('create')),
	array('label'=>'View InternshipPosition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InternshipPosition', 'url'=>array('admin')),
);
?>

<h1>Update InternshipPosition <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>