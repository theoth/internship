<?php
/* @var $this StudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Students',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέου φοιτητή', 'url'=>array('create')),
	array('label'=>'Αναζήτηση φοιτητών', 'url'=>array('admin')),
);
?>

<h1>Φοιτητές</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
