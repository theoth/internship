
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1> <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<?php
$this->widget('zii.widgets.CListView', array(
    'ajaxUpdate' => false,
    'dataProvider' => $dataProvider,
    'itemView' => '_viewInternshipPosition',
    'template' => "{items}\n{pager}",
));
?>