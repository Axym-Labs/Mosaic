<?php
class PricingDataRetriever {
    private $tables;

    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function AssignData($smarty) {
        $plans = $this->tables->plan->SelectAll();
        $planPerms = array();
        
        for ($i = 0; $i < count($plans); $i++) {
            array_push($planPerms, $this->tables->planperm->SelectById($plans[$i]["PlanPermissionId"])[0]);
        }

        $log = new FileLogger("log.txt");
        $log->Log("Plans: " . json_encode($plans));
        $log->Log("Planperm: " . json_encode($planPerms));
        
        $smarty->assign('plans', $plans);
        $smarty->assign('planperms', $planPerms);
        $smarty->assign('planColumnTypeData', $this->tables->plan->GetColumnTypeData());
        $smarty->assign('planpermColumnTypeData', $this->tables->planperm->GetColumnTypeData());
        return $smarty;
    }



}
?>