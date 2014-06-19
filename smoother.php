<?php
include("stats.php");

function last_update($updates) {
    return $updates[count($updates) - 1]->time;
}

function smooth_skill($updates, $skill_id, $time_span, $end_time,
                      $threshold = 25200, $limit = 400) {
    $start_time = $end_time - $time_span;
    $trimmed_updates = array();

    foreach($updates as $update) {
        if ($start_time <= $update->time && $update->time <= $end_time)
            $trimmed_updates[] = $update;
    }

    $update_count = count($trimmed_updates);
    $filtered_updates = array();

    for($i = 0; $i < $update_count; $i++) {

    }

    return $trimmed_updates;
}
?>
