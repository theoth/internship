<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */
/* @var $form CActiveForm */
?>

<script>
//var end = new Date('02/19/2017 10:1 AM');
    function countdown(end, num) {

        var end = new Date(end);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById('countdown' + num).innerHTML = days + ' ημέρες ';
            document.getElementById('countdown' + num).innerHTML += hours + ' ώρες ';
            document.getElementById('countdown' + num).innerHTML += minutes + ' λεπτά ';
            document.getElementById('countdown' + num).innerHTML += seconds + ' δευτερόλεπτα';
        }
        ;
//alert(end);
        timer = setInterval(showRemaining, 1000);
    }
</script>



<div class="form">

<?php 
$flag1=false;

$time = time();


    //$student=Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
    //var_dump($student);
    $in=InternshipPosition::model()->findByAttributes(array('questionnaire_company_id' => $model->id));
    //var_dump($in);die();
    $month = date('n', strtotime($in->date_start));
    //echo 'month of date start is ' . $month;

    $month_current = date('n');
    $year_current = date('y');
    $year = date('Y', strtotime($in->date_start));

    //echo 'year of date start is ' . $year;

    $date_current = date('Y-m-d');
    //echo 'date current is ' . $date_current;
    $deadline = date('Y-m-d', strtotime($in->date_end . '+ 10 days'));

    $month3_datetime = date('Y-m-d', strtotime($in->date_start . '+ 3 months'));

    $month3_datetime = strtotime($month3_datetime);

    $month3_datetime = date('m/d/Y h:i:s', $month3_datetime);
    // echo $month3_datetime;

    $flag_time = 0;
    
    
    
     if ($month_current >= $month + 3 && $year_current == $year) {
         $flag3=true;
     }
     else{
         $flag3=false;
     }
     
     $flag3=true;
     if ($flag3==true){


$form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'questionnaire-student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

?>
    
    <br>
    <br>
        <script>
            countdown('<?php echo $deadline; ?>', 4);

        </script>
        <span><b>Απομένουν </b></span><span id="countdown4"></span> <span><b> για να ολοκληρωθεί η πρακτική άσκηση. Πρέπει να υποβάλλετε το ερωτηματολόγιο</b>.</span>
    <?php 
    ?>
    <br/>
    <br/>
    <br>

	

	<?php echo $form->errorSummary($model); ?>

	


	<div class="row">
		<?php //echo $form->labelEx($model,'in1'); ?>
		<?php echo $form->radioButtonListGroup($model,'in1',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in1'); ?>
	</div>
        <br>
        
	<div class="row">
		<?php //echo $form->labelEx($model,'in2'); ?>
		<?php echo $form->radioButtonListGroup($model,'in2',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in2'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in3'); ?>
		<?php echo $form->radioButtonListGroup($model,'in3',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in3'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in4'); ?>
		<?php echo $form->radioButtonListGroup($model,'in4',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in4'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in5'); ?>
		<?php echo $form->radioButtonListGroup($model,'in5',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in5'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in6'); ?>
		<?php echo $form->radioButtonListGroup($model,'in6',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in6'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in7',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in8'); ?>
		<?php echo $form->radioButtonListGroup($model,'in8',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in8'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st1'); ?>
		<?php echo $form->radioButtonListGroup($model,'st1',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st1'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st2'); ?>
		<?php echo $form->radioButtonListGroup($model,'st2',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st2'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st3'); ?>
		<?php echo $form->radioButtonListGroup($model,'st3',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st3'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st4'); ?>
		<?php echo $form->radioButtonListGroup($model,'st4',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st4'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st5'); ?>
		<?php echo $form->radioButtonListGroup($model,'st5',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st5'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st6'); ?>
		<?php echo $form->radioButtonListGroup($model,'st6',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st6'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st7'); ?>
		<?php echo $form->radioButtonListGroup($model,'st7',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php ///echo $form->error($model,'st7'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st8'); ?>
		<?php echo $form->radioButtonListGroup($model,'st8',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st8'); ?>
	</div>
        <br>
	<div class="row">
		<?php //e/cho $form->labelEx($model,'st9'); ?>
		<?php echo $form->radioButtonListGroup($model,'st9',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st9'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st10'); ?>
		<?php echo $form->radioButtonListGroup($model,'st10',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'st10'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textAreaGroup($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'comments'); ?>
	</div>
        <br>
	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Υποβολή' : 'Υποβολή', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>
        
     <?php } 
     else {
         
         
     
     ?>
        
        <script>
        countdown('<?php echo $month3_datetime; ?>', 3);

    </script>
    <br>
    <br>
    <?php
    if ($flag_time == 0) {
        ?>
        <span><b>Απομένουν </b></span><span id="countdown3"></span> <span><b> για να ανοίξει η υποβολή του ερωτηματολογίου για την Πρακτική Άσκηση</b>.</span>
    <?php }
     }?>

</div><!-- form -->