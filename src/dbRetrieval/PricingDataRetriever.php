<?php
class PricingDataRetriever {
    private $tables;

    public function __construct($dbCon) {
        $this->tables = new tableDefinitions($dbCon);
    }

    public function AssignData($smarty) {
        $plans = $this->tables->plan->SelectAll();
        
        for ($i = 0; $i < count($plans); $i++) {
            $plans[$i]['permissions'] = $this->tables->planperm->SelectById($plans[$i]["PlanPermissionId"]);
        }
        
        $smarty->assign('plans', $plans);
        return $smarty;
    }



}
?>