<?php
/* @var $this DepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Departments',
);
$user = Users::model()->findByPk(Yii::app()->user->id);
$department = Department::model()->findByAttributes(array('type_admin' => $user->type));
if($department==NULL){
$this->menu = array(
    array('label' => 'Δημιουργία τμήματος', 'url' => array('create')),
        //array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>
<h1>Τμήματα</h1>
<?php
}
else{
?>
<h1>Το τμήμα μου</h1>
<?php
}
?>


<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
