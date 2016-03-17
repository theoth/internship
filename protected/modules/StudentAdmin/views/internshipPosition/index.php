<?php
/* @var $this InternshipPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Internship Positions',
);

$this->menu = array(
    //array('label' => 'Create InternshipPosition', 'url' => array('create')),
    //array('label' => 'Manage InternshipPosition', 'url' => array('admin')),
);
?>

<h1>Διαθέσιμες Θέσεις Πρακτικής Άσκησης</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'viewData' => array('student' => $student),
    'itemView' => '_view',
));
?>
