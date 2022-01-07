<?php
 $data = file('question.txt');


 array_shift($data);
 $arrQuestions = [];
 foreach ($data as $key => $value) {
     $tmp = explode("|",$value);
     $question_id = $tmp[0];
     $question = $tmp[1];
     $arrQuestions[$question_id] = ['question' => $question ];
 }

