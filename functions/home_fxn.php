<?php
    include("../action/get_all_assignment_action.php");
    include("../action/get_a_chore_action.php");
    include("../action/get_a_person_action.php");

    $all_assignments = get_all_assignments();
    $in_progress = get_assignments_inprogress();
    $incomplete = get_incomplete_assignments();
    $complete = get_completed_assignments();
    $recent = get_recent_assignments();

    // display assignments in view based on assignment array passed in
    function list_assignments($assignments){

        // Prevent error from empty array
        if($assignments == null){
            return;
        }

        foreach($assignments as $assignment){
    
            $chorename = get_chore($assignment['cid'])['chorename'];
            $fname = get_assigned_person($assignment['assignmentid'])[0]['fname'];
            $lname = get_assigned_person($assignment['assignmentid'])[0]['lname'];
    
            echo '<div class="chore-task">';
            echo '<div class="details">';
            echo '<div><p class="name">'.$fname. ' '.$lname.' > '.$assignment['date_due'].'</p></div>';
            echo '<div><p class="desc">'.$chorename.'</p></div>';
            echo '<div><img style="opacity: 0.5" src="../icons/tabler_flag-filled.svg" alt="picture of flag"></div>';
            echo '</div>';
            echo '</div>';


        }
    }
?>