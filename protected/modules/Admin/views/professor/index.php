<?php
/* @var $this ProfessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professors',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέου καθηγητή', 'url'=>array('create')),
	array('label'=>'Αναζήτηση καθηγητών', 'url'=>array('admin')),
);
?>

<h1>Καθηγητές</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
