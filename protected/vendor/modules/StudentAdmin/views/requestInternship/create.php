<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List RequestInternship', 'url'=>array('index')),
	//array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1>Επιβεβαίωση</h1>
<br>
<br>


<?php $this->renderPartial('_form', array('model'=>$model,'student'=>$student,)); ?>