<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form booster.widgets.TbActiveForm */
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
            if (distance < 0) {

                clearInterval(timer);
                if (num == 1) {
                    document.getElementById('countdown').innerHTML = 'άνοιξε ο 1ος μήνας!';
                }
                if (num == 2) {
                    document.getElementById('countdown').innerHTML = 'άνοιξε ο 2ος μήνας!';
                }
                if (num == 3) {
                    document.getElementById('countdown').innerHTML = 'άνοιξε ο 3ος μήνας!';
                }
                else {
                    document.getElementById('countdown').innerHTML = 'ολοκληρώθηκε η πρακτική άσκηση!';
                }
                return;
            }
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
    //$form=$this->beginWidget('booster.widgets.TbActiveForm', array(
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'internship-position-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of booster.widgets.TbActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
//$student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
    ?>

    <br/>
    <br/>
    <br/>

    <?php //echo $form->errorSummary($model);  ?>



    <?php
    $time = time();

    $month = date('n', strtotime($model->date_start));
    //echo 'month of date start is ' . $month;

    $month_current = date('n');
    $year_current = date('y');
    $year = date('Y', strtotime($model->date_start));

    //echo 'year of date start is ' . $year;

    $date_current = date('Y-m-d');
    //echo 'date current is ' . $date_current;
    //$deadline = date('Y-m-d', strtotime($model->date_end . '+ 10 days'));


    $month1_datetime = date('Y-m-d', strtotime($model->date_start . '+ 1 months'));
    $month2_datetime = date('Y-m-d', strtotime($model->date_start . '+ 2 months'));
    $month3_datetime = date('Y-m-d', strtotime($model->date_start . '+ 3 months'));


    $month1_datetime = strtotime($month1_datetime);

    $month1_datetime = date('m/d/Y h:i:s', $month1_datetime);
    // echo $month1_datetime;

    $month2_datetime = strtotime($month2_datetime);

    $month2_datetime = date('m/d/Y h:i:s', $month2_datetime);
    // echo $month2_datetime;

    $month3_datetime = strtotime($month3_datetime);

    $month3_datetime = date('m/d/Y h:i:s', $month3_datetime);
    // echo $month3_datetime;

    $flag_time = 0;
    ?>

    <script>
        countdown('<?php echo $month1_datetime; ?>', 1);

    </script>
    <?php
    if ($flag_time == 0) {
        ?>

        <span><b>Απομένουν </b></span><span id="countdown1"></span> <span><b> για να ανοίξει ο 1ος μήνας</b>.</span>
    <?php } else {
        ?>
        <script>
            countdown('<?php echo $model->deadline; ?>', 4);

        </script>
        <span><b>Απομένουν </b></span><span id="countdown4"></span> <span><b> για να ολοκληρωθεί η πρακτική άσκηση</b>.</span>
    <?php }
    ?>
    <br/>
    <br/>
    <?php
    $flag1 = true;
    $flag2 = true;
    $flag3 = true;

    if ($year_current == $year + 1) {
        $month_current = $month_current + 12;
    }

    if ($month_current >= $month + 1 && $year_current == $year) {
        $flag1 = false;
        
    }
    if ($month_current >= $month + 2 && $year_current == $year) {
        $flag2 = false;
       
    }
    if ($month_current >= $month + 3 && $year_current == $year) {
        $flag3 = false;
        
    }

    if ($date_current > $model->deadline) {
        $flag1 = true;
        $flag2 = true;
        $flag3 = true;
        $this->end_model($model->id);
    }
    ?>






    <div class="row">
<?php //echo $form->labelEx($model,'co_absence1');  ?>
<?php echo $form->textFieldGroup($model, 'co_absence1', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
        <?php //echo $form->error($model,'co_absence1');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_text1');  ?>
<?php echo $form->textAreaGroup($model, 'co_text1', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
        <?php //echo $form->error($model,'co_text1');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_notes1');  ?>
<?php echo $form->textAreaGroup($model, 'co_notes1', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
        <?php //echo $form->error($model,'co_notes1');  ?>
    </div>


    <script>
        countdown('<?php echo $month2_datetime; ?>', 2);

    </script>
    <br/>
    <br/>    
<?php
if ($flag_time == 0) {
    ?>
        <span><b>Απομένουν </b></span><span id="countdown2"></span> <span><b> για να ανοίξει ο 2ος μήνας</b>.</span>
    <?php } ?>
    <br/>
    <br/>

    <div class="row">
<?php //echo $form->labelEx($model,'co_absence2');  ?>
<?php echo $form->textFieldGroup($model, 'co_absence2', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
        <?php //echo $form->error($model,'co_absence2');  ?>
    </div>


    <div class="row">
<?php //echo $form->labelEx($model,'co_text2');  ?>
<?php echo $form->textAreaGroup($model, 'co_text2', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
        <?php //echo $form->error($model,'co_text2');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_notes2');  ?>
<?php echo $form->textAreaGroup($model, 'co_notes2', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
        <?php //echo $form->error($model,'co_notes2');  ?>
    </div>

    <script>
        countdown('<?php echo $month3_datetime; ?>', 3);

    </script>

    <br/>
    <br/>  
<?php
if ($flag_time == 0) {
    ?>
        <span><b>Απομένουν </b></span><span id="countdown3"></span> <span><b> για να ανοίξει ο 3ος μήνας και η τελική έκθεση</b>.</span>
    <?php } ?>
    <br/>
    <br/>

    <div class="row">
<?php //echo $form->labelEx($model,'co_absence3');  ?>
<?php echo $form->textFieldGroup($model, 'co_absence3', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
        <?php //echo $form->error($model,'co_absence3');  ?>
    </div>




    <div class="row">
<?php //echo $form->labelEx($model,'co_text3');  ?>
<?php echo $form->textAreaGroup($model, 'co_text3', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
        <?php //echo $form->error($model,'co_text3');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_notes3');  ?>
<?php echo $form->textAreaGroup($model, 'co_notes3', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
        <?php //echo $form->error($model,'co_notes3');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_final_text');  ?>
<?php echo $form->textAreaGroup($model, 'co_final_text', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
        <?php //echo $form->error($model,'co_final_text');  ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model,'co_final_notes');  ?>
<?php echo $form->textAreaGroup($model, 'co_final_notes', array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
        <?php //echo $form->error($model,'co_final_notes');  ?>
    </div>


    <div class="row buttons">
<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Υποβολή', 'context' => 'primary')); ?>
    </div>

        <?php $this->endWidget(); ?>

</div><!-- form -->