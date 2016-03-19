<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('index')),
	array('label'=>'Αναζήτηση των θέσεων μου', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία νέας θεσης</h1>

<?php $this->renderPartial('_form', array('model'=>$model,)); ?>