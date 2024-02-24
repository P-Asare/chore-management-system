<?php
    include("../action/get_all_chores_action.php");

    function display_rows(){
        $var_data = all_chores();

        if (!empty($var_data)){

            foreach ($var_data as $row){
                echo "<div class='row'>
                <div>".$row['chorename']."</div>
                    <div class='actions'>
                        <div><span class='material-symbols-outlined'>edit</span></div>
                        <div>
                            <a style='color:rgb(241, 143, 143);' href='../action/delete_chore_action.php?id=".$row['cid']."'>
                                <span class='material-symbols-outlined'>delete</span>
                            </a>
                        </div>
                    </div>
                </div>";
            }
        }
    }

?>