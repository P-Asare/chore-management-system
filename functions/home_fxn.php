<?php
    include("../action/get_all_assignment_action.php");

    $all_assignments = get_all_assignments();
    $in_progress = get_assignments_inprogress();
    $incomplete = get_incomplete_assignments();
    $complete = get_completed_assignments();
    $recent = get_recent_assignments();

    
?>