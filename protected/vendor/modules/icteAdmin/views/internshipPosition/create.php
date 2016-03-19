<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Θέσεις πρακτικής άσκησης', 'url'=>array('index')),
	array('label'=>'Διαχείριση θέσεων', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία νέας θέσης</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>