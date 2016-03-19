<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Companies',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέας εταιρείας', 'url'=>array('create')),
	array('label'=>'Διαχείριση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Εταιρείες</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
