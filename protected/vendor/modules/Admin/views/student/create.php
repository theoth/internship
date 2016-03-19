<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Πίσω στους φοιτητές', 'url'=>array('index')),
	array('label'=>'Αναζήτηση φοιτητών', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία φοιτητή</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>