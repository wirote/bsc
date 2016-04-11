<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPage1() {
        echo "Hello My Friend it My First Page";
    }

    public function actionPage2() {
        // แสดงข้อความ
        $show1 = "Hello My Friend Hello My World from controller";
        // แสดงการคำนวณ
        $a = 10;
        $b = 5;
        $c1 = $a+$b;
        $c2 = $a*$b;
        // แสดงการส่งค่า
        return $this->render('page2',['show1'=>$show1,'a'=>$a,'b'=>$b,'c1'=>$c1,'c2'=>$c2,]);
        //$param = ['show1'=>$show1,'a'=>$a,'b'=>$b,'c1'=>$c1,'c2'=>$c2,];
        //return $this->render('page2',$param);
    }

    public function actionArray1($fname = NULL, $lname = NULL) {
        $name = "ฉันชื่อ $fname นามสกุล $lname";
        $param = ['name'=>$name];
        return $this->render('array1',$param);
    }
    
}
