<?php
    include("../action/get_all_assignment_action.php");
    include("../action/get_a_chore_action.php");
    include("../action/get_a_person_action.php");

    function display_assignments(){
        $assignments = get_all_assignments();

        foreach($assignments as $assignment){
    
            $chorename = get_chore($assignment['cid'])['chorename'];
            $fname = get_person($assignment['who_assigned'])[0]['fname'];
            $lname = get_person($assignment['who_assigned'])[0]['lname'];
    
            echo '<div class="row">';
            echo '<div>'.$chorename.'</div>';
            echo '<div>'.$fname.' '.$lname.'</div>';
            echo '<div>'.$assignment["date_assign"].'</div>';
            echo '<div>'.$assignment["date_due"].'</div>';
            echo 'working';
            echo '<div class="actions">';
            echo '<div class="material-symbols-outlined"> edit</div>';
            echo '<div class="material-symbols-outlined"> delete</div>';
            echo '<div class="material-symbols-outlined"> done</div>';
            echo '</div>';
            echo '</div>';

        }
    }
?>