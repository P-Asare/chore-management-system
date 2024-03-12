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
    

        }
    }
?>