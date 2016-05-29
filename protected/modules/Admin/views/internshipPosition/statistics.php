<?php 
$ins=InternshipPosition::model()->findAllByAttributes(array('status'=>3));
$qu_stu=array();
$qu_pro=array();
$qu_co=array();
           
            foreach ($ins as $i){
                $temp=QuestionnaireStudent::model()->findAllByAttributes(array('id'=>$i->questionnaire_student_id));
                foreach($temp as $t){
                $qu_stu[]=$t;
                //var_dump($qu_stu);
                }
                $temp2=QuestionnaireProfessor::model()->findAllByAttributes(array('id'=>$i->questionnaire_student_id));
                foreach($temp2 as $t){
                $qu_pro[]=$t;
                }
                $temp3=QuestionnaireCompany::model()->findAllByAttributes(array('id'=>$i->questionnaire_student_id));
                foreach($temp3 as $t){
                $qu_co[]=$t;
                }
            }
//die();
 $texts = $qu_stu[0]->AttributeLabels();
 //var_dump($texts);
echo ("'".$texts['in1']."'".','."'".$texts['in2']."'");



$data1='[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]';?>

<script>
    
    $(function chartStudent () {
        
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Στατιστικά Ερωτηματολογίων Φοιτητών '
        },
        subtitle: {
            text: 'subtitle'
        },
        xAxis: {
            categories: [
               <?php echo ("'".$texts['in1']."'".','."'".$texts['in2']."'".','."'".$texts['in3']."'".','."'".$texts['in4']."'".','."'".$texts['in5']."'".','."'".$texts['in6']."'".','."'".$texts['in7']."'".','."'".$texts['in8']."'".','."'".$texts['in9']."'".','."'".$texts['in10']."'".','."'".$texts['in11']."'".','."'".$texts['in12']."'".','."'".$texts['in13']."'".','."'".$texts['in14']."'".','."'".$texts['in15']."'".','."'".$texts['in16']."'".','."'".$texts['in17']."'".','."'".$texts['in18']."'".','."'".$texts['in19']."'".','."'".$texts['in20']."'");?>
                    //'Jan','Feb'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Πλήθος φοιτητών'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
            data: <?php echo $data1;?>

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});
    </script>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    
    
    <div id="container" style="width: 1100px; height: 500px; margin: 0 auto"></div>
    
    <script>
    $(document).ready(function(){    
    chartStudent();
    });
    </script>
    
    