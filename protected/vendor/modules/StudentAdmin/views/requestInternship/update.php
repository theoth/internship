<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RequestInternship', 'url'=>array('index')),
	array('label'=>'Create RequestInternship', 'url'=>array('create')),
	array('label'=>'View RequestInternship', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1>Update RequestInternship <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'student'=>$student,)); ?>