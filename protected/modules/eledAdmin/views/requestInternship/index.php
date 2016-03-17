<?php
/* @var $this RequestInternshipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Request Internships',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέας αίτησης', 'url'=>array('create')),
	array('label'=>'Διαχείριση αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Αιτήσεις φοιτητών</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
