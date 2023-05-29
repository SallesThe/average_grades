<?php 
    $name = $tpMsg = $msg = "";
    
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $firstGrade = $_POST['first_grade'];
        $secondGrade = $_POST['second_grade'];
        $averange = ($firstGrade + ($secondGrade * 2)) / 3;
        $averange = number_format($averange, 1, ',', ',');
        if($averange >= 7)
        {
            $msg = "The student's grade was $averange. $name approved"; 
            $tpMsg = "alert alert-success";
        } else {
            $tpMsg = "alert alert-danger";
            $msg = "The student's grade was $averange. $name disapproved";
        }
    }
?>