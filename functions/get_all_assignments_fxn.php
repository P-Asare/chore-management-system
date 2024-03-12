<?php
    include("../action/get_all_assignment_action.php");
    include("../action/get_a_chore_action.php");
    include("../action/get_a_person_action.php");
    include("../action/get_chore_status.php");

    function display_assignments(){
        $assignments = get_all_assignments();

        // Prevent error from empty array
        if($assignments == null){
            return;
        }

        foreach($assignments as $assignment){
    
            $chorename = get_chore($assignment['cid'])['chorename'];
            $fname = get_person($assignment['who_assigned'])[0]['fname'];
            $lname = get_person($assignment['who_assigned'])[0]['lname'];
            $status = get_a_chore_status($assignment['sid'])[0]['sname'];
    
            echo '<div class="row">';
            echo '<div>'.$chorename.'</div>';
            echo '<div>'.$fname.' '.$lname.'</div>';
            echo '<div>'.$assignment["date_assign"].'</div>';
            echo '<div>'.$assignment["date_due"].'</div>';
            echo '<div>'.$status.'</div>';
            echo '<div class="actions">';
            echo '<div class="material-symbols-outlined"> edit</div>';
            echo '<a style="color: red;" href="../action/delete_assignment_action.php?aid='.$assignment['assignmentid'].'">';
            echo '<div class="material-symbols-outlined"> delete</div></a>';
            echo '<div class="material-symbols-outlined"> done</div>';
            echo '</div>';
            echo '</div>';

        }
    }
?>