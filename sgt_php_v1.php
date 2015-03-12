<!DOCTYPE html>
<?php
    include('data.php');

    $highest = $students[0]['Grade'];
    $lowest = $students[0]['Grade'];
    $gradeTotal = 0;
        for($i = 0;$i < count($students); $i++){
   
            if($students[$i]['Grade'] > $highest ){
                $highest = $students[$i]['Grade'];
            }
            if($students[$i]['Grade'] < $lowest){
                $lowest = $students[$i]['Grade'];
            }
                $gradeTotal += $students[$i]['Grade'];
                $average = $gradeTotal / count($students);
        }

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>student grade table PHP</title>
    
<style>
table {
    position: relative;
    margin: 0 auto;
}
.table_header {
    background-color: rgba(34,40,67,0.5);
    color: white;
}

.student_rows tr:nth-child(even) {
    background-color: grey;
}
.grade_avg {
    background-color: rgba(34,40,67,0.5);
    width: 100%;
    color: white;
    right: 0px;
    position: absolute;
    text-align: right;
}

.high_row{
    background-color: lightblue!important;
}
.low_row{
    background-color: lightgreen!important;
}
</style>
</head>

<body>
    <table class="student_rows">
        <tr class="table_header">
            <td>#</td>
            <td>Name</td>
            <td>Class</td>
            <td>Grade</td>
            <td>Remove</td>
        </tr>
<?php

    $studentNumber = 0;
        for($i = 0; $i<count($students); $i++){
            $row_class='';
            if($students[$i]['Grade']==$lowest){
                $row_class='low_row';
            }
            if($students[$i]['Grade']==$highest){
                $row_class='high_row';
            }
            $studentNumber++;
        echo "<tr class='$row_class' id='students'>
                <td>".$studentNumber."</td>
                <td>".$students[$i]['name']."</td>
                <td>".$students[$i]['Class']."</td>
                <td id='student_grade'>".$students[$i]['Grade']."</td>
                <td id='delete_container'><button id='deleteBtn' type='button'>Delete</button</td>
            </tr>";
        
    }
        
        echo "<tr>
                <td class='grade_avg'>"."Average : ".$average."</td>
              </tr>";
    
?>
</table>
</body>

</html>




