<?php
/* @var $this InternshipPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Internship Positions',
);

$this->menu = array(
    array('label' => 'Πίσω', 'url' => array('site/index')),
    
);
?>

<h1>Θέσεις πρακτικής άσκησης</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_viewNewPositions',
));
?>
