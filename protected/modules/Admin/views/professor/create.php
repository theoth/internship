<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Πίσω στους καθηγητές', 'url'=>array('index')),
	array('label'=>'Αναζήτηση καθηγητών', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία καθηγητή</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>