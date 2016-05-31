


<?php
$this->menu = array(
    array('label' => 'Πίσω', 'url' => array('statisticsForm')),
);
?>
<br>
<br>
<br>
<br>
<br>
<?php
//$ins = InternshipPosition::model()->findAllByAttributes(array('status' => 2));
$ins = InternshipPosition::model()->findAll(array(
    'condition' => 'status=:status AND date_end >= :from AND date_end <= :to',
    'params' => array(':status' => 2, ':from' => $from, ':to' => $to),
        ));

//var_dump($ins);die();
if ($ins != NULL) {
    $qu_stu = array();
    $qu_pro = array();
    $qu_co = array();
    $data1 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data3 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data4 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data5 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data6 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data7 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    
    $data11 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data22= array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data33 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data44 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data55 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data66 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data77 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

    foreach ($ins as $i) {
        $temp = QuestionnaireStudent::model()->findAllByAttributes(array('id' => $i->questionnaire_student_id));
        //var_dump($temp);
        
        foreach ($temp as $t) {
            $qu_stu[] = $t;
            //var_dump($qu_stu);
        }
        $temp2 = QuestionnaireProfessor::model()->findAllByAttributes(array('id' => $i->questionnaire_professor_id));
        //var_dump($temp2);
        foreach ($temp2 as $t) {
            $qu_pro[] = $t;
        }
        $temp3 = QuestionnaireCompany::model()->findAllByAttributes(array('id' => $i->questionnaire_company_id));
        //var_dump($temp3);
        foreach ($temp3 as $t) {
            $qu_co[] = $t;
        }
    }
    $c = 0;
//----------------------------------- Students -----------------------------------------
    foreach ($qu_stu as $q) {

        //$in = ('in'.$c);

        for ($c = 1; $c <= 20; $c++) {
            $in = ('in' . $c);
            if ($q->$in == 1) {

                $data1[$c - 1] = $data1[$c - 1] + 1;
            } else if ($q->$in == 2) {
                $data2[$c - 1] = $data2[$c - 1] + 1;
            } else if ($q->$in == 3) {
                $data3[$c - 1] = $data3[$c - 1] + 1;
            } else if ($q->$in == 4) {
                $data4[$c - 1] = $data4[$c - 1] + 1;
            } else if ($q->$in == 5) {
                $data5[$c - 1] = $data5[$c - 1] + 1;
            } else if ($q->$in == 6) {
                $data6[$c - 1] = $data6[$c - 1] + 1;
            } else if ($q->$in == 7) {
                $data7[$c - 1] = $data7[$c - 1] + 1;
            }
        }
    }

    $data1s = '[';
    $data2s = '[';
    $data3s = '[';
    $data4s = '[';
    $data5s = '[';
    $data6s = '[';
    $data7s = '[';


    for ($i = 0; $i <= 19; $i++) {
        $data1s = $data1s . $data1[$i];
        $data2s = $data2s . $data2[$i];
        $data3s = $data3s . $data3[$i];
        $data4s = $data4s . $data4[$i];
        $data5s = $data5s . $data5[$i];
        $data6s = $data6s . $data6[$i];
        $data7s = $data7s . $data7[$i];
        if ($i != 19) {
            $data1s = $data1s . ',';
            $data2s = $data2s . ',';
            $data3s = $data3s . ',';
            $data4s = $data4s . ',';
            $data5s = $data5s . ',';
            $data6s = $data6s . ',';
            $data7s = $data7s . ',';
        }
    }
    $data1s = $data1s . ']';
    $data2s = $data2s . ']';
    $data3s = $data3s . ']';
    $data4s = $data4s . ']';
    $data5s = $data5s . ']';
    $data6s = $data6s . ']';
    $data7s = $data7s . ']';

    $subtitle = "'" . 'για θέσεις οι οποίες ολοκληρώθηκαν στο διάστημα ' . 'από ' . $from . ' έως ' . $to . "'";




//die();
    $texts = $qu_stu[0]->AttributeLabels();
    $textS = "";
    for ($i = 1; $i <= 20; $i++) {
        $in = 'in' . $i;
        $textS = $textS ."'".$texts[$in]."'";

        if ($i != 20) {
            $textS = $textS . ',';
        }
    }
    //$textS = $textS . "'";
    //'Jan','Feb'
    
    $texts = $qu_pro[0]->AttributeLabels();
    $textPin = "";
    for ($i = 1; $i <= 11; $i++) {
        $in = 'in' . $i;
        $textPin = $textPin ."'".$texts[$in]."'";

        if ($i != 11) {
            $textPin = $textPin . ',';
        }
    }
   // $textPin = $textPin . ']';
    
    $texts = $qu_pro[0]->AttributeLabels();
    $textPst = "";
    for ($i = 1; $i <= 7; $i++) {
        $in = 'st' . $i;
        $textPst = $textPst ."'".$texts[$in]."'";

        if ($i != 7) {
            $textPst = $textPst . ',';
        }
    }
    //$textPst = $textPst . ']';
    
    $texts = $qu_co[0]->AttributeLabels();
    $textCin = "";
    for ($i = 1; $i <= 8; $i++) {
        $in = 'in' . $i;
        $textCin = $textCin ."'".$texts[$in]."'";

        if ($i != 8) {
            $textCin = $textCin . ',';
        }
    }
   // $textCin = $textCin . ']';
    
    $texts = $qu_co[0]->AttributeLabels();
    $textCst = "";
    for ($i = 1; $i <= 10; $i++) {
        $in = 'st' . $i;
        $textCst = $textCst ."'".$texts[$in]."'";

        if ($i != 10) {
            $textCst = $textCst . ',';
        }
    }
    //$textCst = $textCst . ']';
    
    
//var_dump($texts);
//echo ("'" . $texts['in1'] . "'" . ',' . "'" . $texts['in2'] . "'");
$data1 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data3 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data4 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data5 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data6 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data7 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    
    $data11 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data22= array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data33 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data44 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data55 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data66 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data77 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    
//----------------------------------- Professors -----------------------------------------
    foreach ($qu_pro as $q) {

        //$in = ('in'.$c);

        for ($c = 1; $c <= 11; $c++) {
            $in = ('in' . $c);
            $st = ('st' . $c);
            
            if ($q->$in == 1) {
                $data1[$c - 1] = $data1[$c - 1] + 1;
                //var_dump($data1);
            } else if ($q->$in == 2) {
                $data2[$c - 1] = $data2[$c - 1] + 1;
            } else if ($q->$in == 3) {
                $data3[$c - 1] = $data3[$c - 1] + 1;
            } else if ($q->$in == 4) {
                $data4[$c - 1] = $data4[$c - 1] + 1;
            } else if ($q->$in == 5) {
                $data5[$c - 1] = $data5[$c - 1] + 1;
            } else if ($q->$in == 6) {
                $data6[$c - 1] = $data6[$c - 1] + 1;
            } else if ($q->$in == 7) {
                $data7[$c - 1] = $data7[$c - 1] + 1;
            }
            if ($c <= 5) {
                if ($q->$st == 1) {
                    $data11[$c - 1] = $data11[$c - 1] + 1;
                } else if ($q->$st == 2) {
                    $data22[$c - 1] = $data22[$c - 1] + 1;
                } else if ($q->$st == 3) {
                    $data33[$c - 1] = $data33[$c - 1] + 1;
                } else if ($q->$st == 4) {
                    $data44[$c - 1] = $data44[$c - 1] + 1;
                } else if ($q->$st == 5) {
                    $data55[$c - 1] = $data55[$c - 1] + 1;
                } else if ($q->$st == 6) {
                    $data66[$c - 1] = $data66[$c - 1] + 1;
                } else if ($q->$st == 7) {
                    $data77[$c - 1] = $data77[$c - 1] + 1;
                }
            }
        }
    }

    $data1p = '[';
    $data2p = '[';
    $data3p = '[';
    $data4p = '[';
    $data5p = '[';
    $data6p = '[';
    $data7p = '[';

    $data11p = '[';
    $data22p = '[';
    $data33p = '[';
    $data44p = '[';
    $data55p = '[';
    $data66p = '[';
    $data77p = '[';


    for ($i = 0; $i <= 10; $i++) {
        $data1p = $data1p . $data1[$i];
        $data2p = $data2p . $data2[$i];
        $data3p = $data3p . $data3[$i];
        $data4p = $data4p . $data4[$i];
        $data5p = $data5p . $data5[$i];
        $data6p = $data6p . $data6[$i];
        $data7p = $data7p . $data7[$i];

        if ($i <= 4) {
            $data11p = $data11p . $data11[$i];
            $data22p = $data22p . $data22[$i];
            $data33p = $data33p . $data33[$i];
            $data44p = $data44p . $data44[$i];
            $data55p = $data55p . $data55[$i];
            $data66p = $data66p . $data66[$i];
            $data77p = $data77p . $data77[$i];
        }
        if ($i != 4) {
            $data11p = $data11p . ',';
            $data22p = $data22p . ',';
            $data33p = $data33p . ',';
            $data44p = $data44p . ',';
            $data55p = $data55p . ',';
            $data66p = $data66p . ',';
            $data77p = $data77p . ',';
        }

        if ($i != 10) {
            $data1p = $data1p . ',';
            $data2p = $data2p . ',';
            $data3p = $data3p . ',';
            $data4p = $data4p . ',';
            $data5p = $data5p . ',';
            $data6p = $data6p . ',';
            $data7p = $data7p . ',';
        }
    }
    $data1p = $data1p . ']';
    $data2p = $data2p . ']';
    $data3p = $data3p . ']';
    $data4p = $data4p . ']';
    $data5p = $data5p . ']';
    $data6p = $data6p . ']';
    $data7p = $data7p . ']';

    $data11p = $data11p . ']';
    $data22p = $data22p . ']';
    $data33p = $data33p . ']';
    $data44p = $data44p . ']';
    $data55p = $data55p . ']';
    $data66p = $data66p . ']';
    $data77p = $data77p . ']';
    
    $data1 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data3 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data4 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data5 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data6 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data7 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    
    $data11 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data22= array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data33 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data44 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data55 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data66 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $data77 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

//----------------------------------- Companies -----------------------------------------

    foreach ($qu_co as $q) {
        

        //$in = ('in'.$c);

        for ($c = 1; $c <= 10; $c++) {
            $in = ('in' . $c);
            $st = ('st' . $c);
            if ($c <= 8) {
                if ($q->$in == 1) {

                    $data1[$c - 1] = $data1[$c - 1] + 1;
                } else if ($q->$in == 2) {
                    $data2[$c - 1] = $data2[$c - 1] + 1;
                } else if ($q->$in == 3) {
                    $data3[$c - 1] = $data3[$c - 1] + 1;
                } else if ($q->$in == 4) {
                    $data4[$c - 1] = $data4[$c - 1] + 1;
                } else if ($q->$in == 5) {
                    $data5[$c - 1] = $data5[$c - 1] + 1;
                } else if ($q->$in == 6) {
                    $data6[$c - 1] = $data6[$c - 1] + 1;
                    //var_dump($data6);
                } else if ($q->$in == 7) {
                    $data7[$c - 1] = $data7[$c - 1] + 1;
                }
            }
            if ($q->$st == 1) {
                $data11[$c - 1] = $data11[$c - 1] + 1;
            } else if ($q->$st == 2) {
                $data22[$c - 1] = $data22[$c - 1] + 1;
            } else if ($q->$st == 3) {
                $data33[$c - 1] = $data33[$c - 1] + 1;
            } else if ($q->$st == 4) {
                $data44[$c - 1] = $data44[$c - 1] + 1;
            } else if ($q->$st == 5) {
                $data55[$c - 1] = $data55[$c - 1] + 1;
            } else if ($q->$st == 6) {
                $data66[$c - 1] = $data66[$c - 1] + 1;
            } else if ($q->$st == 7) {
                $data77[$c - 1] = $data77[$c - 1] + 1;
            }
        }
    }

    $data1c = '[';
    $data2c = '[';
    $data3c = '[';
    $data4c = '[';
    $data5c = '[';
    $data6c = '[';
    $data7c = '[';

    $data11c = '[';
    $data22c = '[';
    $data33c = '[';
    $data44c = '[';
    $data55c = '[';
    $data66c = '[';
    $data77c = '[';


    for ($i = 0; $i <= 9; $i++) {
        if ($i <= 7) {
            $data1c = $data1c . $data1[$i];
            $data2c = $data2c . $data2[$i];
            $data3c = $data3c . $data3[$i];
            $data4c = $data4c . $data4[$i];
            $data5c = $data5c . $data5[$i];
            $data6c = $data6c . $data6[$i];
            $data7c = $data7c . $data7[$i];
        }

        $data11c = $data11c . $data11[$i];
        $data22c = $data22c . $data22[$i];
        $data33c = $data33c . $data33[$i];
        $data44c = $data44c . $data44[$i];
        $data55c = $data55c . $data55[$i];
        $data66c = $data66c . $data66[$i];
        $data77c = $data77c . $data77[$i];

        if ($i != 9) {
            $data11c = $data11c . ',';
            $data22c = $data22c . ',';
            $data33c = $data33c . ',';
            $data44c = $data44c . ',';
            $data55c = $data55c . ',';
            $data66c = $data66c . ',';
            $data77c = $data77c . ',';
        }

        if ($i != 7) {
            $data1c = $data1c . ',';
            $data2c = $data2c . ',';
            $data3c = $data3c . ',';
            $data4c = $data4c . ',';
            $data5c = $data5c . ',';
            $data6c = $data6c . ',';
            $data7c = $data7c . ',';
        }
    }
    $data1c = $data1c . ']';
    $data2c = $data2c . ']';
    $data3c = $data3c . ']';
    $data4c = $data4c . ']';
    $data5c = $data5c . ']';
    $data6c = $data6c . ']';
    $data7c = $data7c . ']';

    $data11c = $data11c . ']';
    $data22c = $data22c . ']';
    $data33c = $data33c . ']';
    $data44c = $data44c . ']';
    $data55c = $data55c . ']';
    $data66c = $data66c . ']';
    $data77c = $data77c . ']';

//echo ($textS);

//$data1 = '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]';
    ?>

    <script>

        $(function chartStudent() {
          

            $('#containerSt').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Στατιστικά Ερωτηματολογίων Φοιτητών '
                },
                subtitle: {
                    text: <?php echo($subtitle); ?>
                },
                xAxis: {
                    categories: [
    <?php echo ($textS); ?>                        //'Jan','Feb'
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
                            '<td style="padding:0"><b>{point.y:.1f} φοιτητές</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.1,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Πάρα πολύ',
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                        data: <?php echo $data1s; ?>

                    }, {
                        name: 'Πολύ',
                        data: <?php echo $data2s; ?>

                    }, {
                        name: 'Αρκετά',
                        data: <?php echo $data3s; ?>

                    }, {
                        name: 'Λίγο',
                        data: <?php echo $data4s; ?>

                    }, {
                        name: 'Καθόλου',
                        data: <?php echo $data5s; ?>

                    }, {
                        name: 'Ναι',
                        data: <?php echo $data6s; ?>

                    }, {
                        name: 'Όχι',
                        data: <?php echo $data7s; ?>

                    }]
            });
        });
    </script>

    <script>

        $(function chartProfessorSt() {

            $('#containerPst').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Στατιστικά Ερωτηματολογίων Καθηγητών για φοιτητές '
                },
                subtitle: {
                    text: <?php echo($subtitle); ?>
                },
                xAxis: {
                    categories: [
<?php echo ($textPst); ?>                        //'Jan','Feb'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Πλήθος καθηγητών'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} καθηγητές</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.1,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Πάρα πολύ',
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                        data: <?php echo $data11p; ?>

                    }, {
                        name: 'Πολύ',
                        data: <?php echo $data22p; ?>

                    }, {
                        name: 'Αρκετά',
                        data: <?php echo $data33p; ?>

                    }, {
                        name: 'Λίγο',
                        data: <?php echo $data44p; ?>

                    }, {
                        name: 'Καθόλου',
                        data: <?php echo $data55p; ?>

                    }, {
                        name: 'Ναι',
                        data: <?php echo $data66p; ?>

                    }, {
                        name: 'Όχι',
                        data: <?php echo $data77p; ?>

                    }]
            });
        });
    </script>

    <script>

        $(function chartProfessorIn() {

            $('#containerPin').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Στατιστικά Ερωτηματολογίων Καθηγητών για τον θεσμό της Πρακτικής Άσκησης '
                },
                subtitle: {
                    text: <?php echo($subtitle); ?>
                },
                xAxis: {
                    categories: [
<?php echo ($textPin); ?>                        //'Jan','Feb'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Πλήθος καθηγητών'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} καθηγητές</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.1,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Πάρα πολύ',
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                        data: <?php echo $data1p; ?>

                    }, {
                        name: 'Πολύ',
                        data: <?php echo $data2p; ?>

                    }, {
                        name: 'Αρκετά',
                        data: <?php echo $data3p; ?>

                    }, {
                        name: 'Λίγο',
                        data: <?php echo $data4p; ?>

                    }, {
                        name: 'Καθόλου',
                        data: <?php echo $data5p; ?>

                    }, {
                        name: 'Ναι',
                        data: <?php echo $data6p; ?>

                    }, {
                        name: 'Όχι',
                        data: <?php echo $data7p; ?>

                    }]
            });
        });
    </script>

    <script>

        $(function chartCompanySt() {

            $('#containerCst').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Στατιστικά Ερωτηματολογίων Φορέων Απασχόλησης για Φοιτητές '
                },
                subtitle: {
                    text: <?php echo($subtitle); ?>
                },
                xAxis: {
                    categories: [
<?php echo ($textCst); ?>                        //'Jan','Feb'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Πλήθος Φορέων Απασχόλησης'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} φορείς απασχόλησης</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.1,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Πάρα πολύ',
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                        data: <?php echo $data11c; ?>

                    }, {
                        name: 'Πολύ',
                        data: <?php echo $data22c; ?>

                    }, {
                        name: 'Αρκετά',
                        data: <?php echo $data33c; ?>

                    }, {
                        name: 'Λίγο',
                        data: <?php echo $data44c; ?>

                    }, {
                        name: 'Καθόλου',
                        data: <?php echo $data55c; ?>

                    }, {
                        name: 'Ναι',
                        data: <?php echo $data66c; ?>

                    }, {
                        name: 'Όχι',
                        data: <?php echo $data77c; ?>

                    }]
            });
        });
    </script>

    <script>

        $(function chartCompanyIn() {
            

            $('#containerCin').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Στατιστικά Ερωτηματολογίων Φορέων Απασχόλησης για τον θεσμό της Πρακτικής Άσκησης '
                },
                subtitle: {
                    text: <?php echo($subtitle); ?>
                },
                xAxis: {
                    categories: [
<?php echo ($textCin); ?>                        //'Jan','Feb'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Πλήθος Φορέων Απασχόλησης'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} φορείς απασχόλησης</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.1,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Πάρα πολύ',
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                        data: <?php echo $data1c; ?>

                    }, {
                        name: 'Πολύ',
                        data: <?php echo $data2c; ?>

                    }, {
                        name: 'Αρκετά',
                        data: <?php echo $data3c; ?>

                    }, {
                        name: 'Λίγο',
                        data: <?php echo $data4c; ?>

                    }, {
                        name: 'Καθόλου',
                        data: <?php echo $data5c; ?>

                    }, {
                        name: 'Ναι',
                        data: <?php echo $data6c; ?>

                    }, {
                        name: 'Όχι',
                        data: <?php echo $data7c; ?>

                    }]
            });
        });
    </script>

    <script src="js/highcharts.js"></script>
    <script src="js//highcharts-exporting.js"></script>



    <div id="containerSt" style="width: 1100px; height: 500px; margin: 0 auto"></div>

    <script>
        $(document).ready(function () {
            chartStudent();
        });
    </script>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div id="containerPst" style="width: 1100px; height: 500px; margin: 0 auto"></div>
    
    <script>
        $(document).ready(function () {
            chartProfessorSt();
        });
    </script>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
     <div id="containerPin" style="width: 1100px; height: 500px; margin: 0 auto"></div>
    
    <script>
        $(document).ready(function () {
            chartProfessorIn();
        });
    </script>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div id="containerCst" style="width: 1100px; height: 500px; margin: 0 auto"></div>
    
    <script>
        $(document).ready(function () {
            chartCompanySt();
        });
    </script>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="containerCin" style="width: 1100px; height: 500px; margin: 0 auto"></div>
    
    <script>
        $(document).ready(function () {
            chartCompanyIn();
        });
    </script>

    <?php
} else {
    echo'Δεν ολοκληρώθηκε καμία θέση πρακτικής άσκησης στο χρονολογικό εύρος το οποίο επιλέξατε.';
}


