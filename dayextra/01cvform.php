<?php
include_once("confs/config.php");
$sql = "SELECT id, product_name FROM product LIMIT 10";
$resultset = mysqli_query($mysqli, $sql) or die("database error:". mysqli_error($mysqli));
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
while ($field_info = mysqli_fetch_field($resultset)) {
    $pdf->Cell(47,12,$field_info->name,1);
}
while($rows = mysqli_fetch_assoc($resultset)) {
    $pdf->SetFont('Arial','',12);   
    $pdf->Ln();
    foreach($rows as $column) {
        $pdf->Cell(47,12,$column,1);
    }
}
$pdf->Output();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css"> -->
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    .zinmyo{
        margin-left: 180px;
        margin-right: 180px;
        padding: 40px;
        display: block;
        font-size: 14px;
    }
    .zinmyo2{
        margin-left: 180px;
        margin-right: 180px;
        padding: 10px;
        display: block;
        font-size: 14px;
    }
    .success{
        background-color: #36A420;
    }
</style>
        <body>
            <div class="container zinmyo">
                <div class="row">
                <div class="col-md-2">
                    <img src="image/zinmyoswe.jpg" class="rounded-circle" width="110" height="110" >
                </div>
                
                <div class="col-md-4"> 
                   <h6> ZINMYOSWE </h6>
                    <b>Email</b> : zinmyoswe@acedatasystems.com <br>
                    <b>Phone</b> : 095057545, 09772919500 <br>
                    <b>Gender</b> : Male <br>
                    <b>Birthday</b> : 23.May.1995 <br>
                    <b>Nationality</b> : Myanmar <br>
                    <b>Address</b> : Yangon <br>
                    <span class="fa fa-chain-broken"> <a href="https://github.com/zinmyoswe">github.com/zinmyoswe</a></span>


                  </div>
                </div>
            </div> <!-- container end -->


            <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Target Job</h5> 
            <hr>
               Web Developer<br>
               Desired Salary: MMK 200,000
                </div>
                
                </div>
            </div> <!-- container end -->

             <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Work Experience</h5> 
            <hr>
                <span class="fa fa-suitcase"></span> Programmer <br>
                <a href="https://www.facebook.com/acedatasystems/?fb_dtsg_ag=AdyYzL6ma4cMlo5xuwMLw7bTw_HGs6d1Q_mUCTm9ZBp1uw%3AAdy7hGJPohokQGgjd8RT7K7AbKcMN2BRAlggY2lFZIjDOg">ACE DataSystems Ltd.</a> <br> 
                Department :  Banking <br>
                Experience :  6Months <br>
                Contract Type :  Full time <br>

                </div>
                
                </div>
            </div> <!-- container end -->
                  <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Skills</h5> 
            <hr>
                Vue.js, Angular.js, Npm, NodeJs, Git <br>
                Bootstrap4, Bootswatch, Foundation, Responsive, Adpative <br> 
                HTML5, CSS3, Javascript, Wordpress (CMS) <br>
                PHP, Laravel Framework, CakePHP Framework, JQuery, AJAX <br>
                VB.NET, Java.netbean, PhotoShop, IllustratorCC <br>
                MYSQL, MSSQL, Oracel Database <br>


                </div>
                
                </div>
            </div> <!-- container end -->

             <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Education</h5> 
           
            <table class="table">
            
            <tr>
                <td>
                BSC(Hons)BusinessIT, <a href="">University of Greenwich & KMD Institute</a><br>
                Level 5 Diploma in Computing, <a href="">NCC education & KMD Institute</a><br>
                Level 4 Diploma in Computing, <a href="">NCC education & KMD Institute</a><br>
                 Professional web developer course, <a href="">Fairway Technology</a> <br>
                 Wordpress Ecommerce Course, <a href="">PageMyanmar</a><br>
                High School graduated, 2013 Latha(1) <br>
                 </td>
                <td>
                    <span class="fa fa-clock-o"></span> (JAN-2017 TO MAY-2018)<br>
                    <span class="fa fa-clock-o"></span> (JUNE-2015 TO JUNE-2016)<br>
                    <span class="fa fa-clock-o"></span> (JAN-2014 TO DEC-2014)<br>
                    <span class="fa fa-clock-o"></span> March-2017<br>

                </td>
            </tr>
        </table>
            </div>
                </div>
            </div> <!-- container end -->

              <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Summary</h5> 
            <hr>
            Willing to learn new technology, Can work with a team. Even weekend can work if necessary

                </div>
                    
                </div>
            </div> <!-- container end -->

            <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Spoken languages</h5> 
            <hr>
             <span class="badge badge-warning">English</span>

                </div>
                    
                </div>
            </div> <!-- container end -->
              <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Groups & Association</h5> 
            <hr>
            <span class="badge badge-warning">Github</span>
            <span class="badge badge-info">Stackoverflow</span>
            <span class="badge badge-light">Codepen</span>
            <span class="badge badge-dark">MCPA</span>
            <span class="badge badge-primary">Bootsnipp</span>

                </div>
                    
                </div>
            </div> <!-- container end -->

            <div class="container zinmyo2">
                <div class="row">
                <div class="col-md-8">
                   <h5>Specialities</h5> 
            <hr>
            <span class="badge badge-warning">software&web development</span>
            <span class="badge badge-info">System Analysis</span>
            <span class="badge badge-light">Database Administration</span>
            <span class="badge badge-dark">Web Design</span>

                </div>
                    
                </div>
            </div> <!-- container end -->
            

       
