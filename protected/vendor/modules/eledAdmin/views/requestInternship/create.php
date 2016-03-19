<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Αιτήσεις φοιτητών', 'url'=>array('index')),
	array('label'=>'Διαχείριση αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία νέας αίτησης</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>