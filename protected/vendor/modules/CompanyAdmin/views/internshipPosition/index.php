<?php
/* @var $this InternshipPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Internship Positions',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέας θέσης ', 'url'=>array('create')),
	array('label'=>'Αναζήτηση των θέσεων μου', 'url'=>array('admin')),
);
?>

<h1>Οι θέσεις μου πρακτικής άσκησης </h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
