<?php
public function getUserBugs($account, $type='assignedTo', $orderBy='id_desc', $limit=0, $pager='')
{
    $bugs = parent::getUserBugs($account, $type, $orderBy, $limit, $pager);
    if($bugs) return $this->processBugs($bugs);
    return $bugs;
}

public function processBugs($bugs){
    foreach($bugs as $key=>$bug){
        $today = helper::today();
        if($bug->status !== 'done' and $bug->status !== 'cancel' and $bug->status != 'closed'){
            if($bug->deadline != '0000-00-00')
            {
                $delay = helper::diffDate($today, $bug->deadline);
                if($delay > 0) $bug->delay = $delay;
            }
        }
        $bugs[$key] = $bug;
    }
    return $bugs;
}