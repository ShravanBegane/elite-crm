<?php
    $id = $_POST['id'];
?>
<style>
th, td{
    padding:8px;
}
</style>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Break Time Details <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
    </div>
    <div class="modal-body">
        <?php 
         include "database.php";
         $slno=1;
         $sql = mysqli_query($conn, "select * from vtiger_employee_roasterbreak where recordid='$id'");
         if(mysqli_num_rows($sql)>0){
        ?>
            <table class="table-responsive" align='center' width="100%" border='1' >
                <tr>
                    <th>Sl No</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Total</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($sql)){
                        print "<tr>
                        <td>$slno</td>
                        <td>$row[breakstart]</td>
                        <td>$row[breakend]</td>
                        <td>$row[tot_break_time]</td>
                        </tr>";
                        $slno++;
                    }
                ?>
                <tr>
                    <td>Total</td>
                    <td colspan='2'></td>
                    <td><?php 
                        $sql1 = mysqli_query($conn, "select SEC_TO_TIME( SUM( TIME_TO_SEC( `tot_break_time` ) ) ) AS timeSum from vtiger_employee_roasterbreak where recordid='$id'");
                        while($row1 = mysqli_fetch_array($sql1)){
                            echo $breaktime = $row1[0];
                        }
                    ?></td>
                </tr>
            </table>
        <br>
        <?php 
        $sql2 = mysqli_query($conn, "select * from vtiger_employee_roster where status='Done' and id='$id'");
        if(mysqli_num_rows($sql2)>0){
            while($row2 = mysqli_fetch_array($sql2)){
                $time1 = strtotime($row2[3]);
                $time2 = strtotime($row2[4]);
                $diff = $time2 - $time1;
                $workhr =  date('H:i:s', $diff);
                $time3 = strtotime($workhr);
                $time4 = strtotime($breaktime);
                $diff1 = $time3 - $time4;
                
				echo "<b>Working Status :</b> Completed</br>";   
                echo "<b>Total Hours : </b>". date('H:i:s', $diff)."<br/>";  
                echo "<b>Break Time :</b> $breaktime</br>";   
                echo "<b>Total Work Hour :</b>". date('H:i:s', $diff1)."</br>";   
            }
             
        }
        else{
            echo "<b>Working Status :</b> Pending</br>";  
        }
        ?>
        
        <?php
         }
         else{
            echo "No Result found";
         }
         ?>
    </div>
</div>