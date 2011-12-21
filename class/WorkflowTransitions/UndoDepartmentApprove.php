<?php

class UndoDepartmentApprove extends WorkflowTransition {
    const sourceState = 'SigAuthReadyState';
    const destState   = 'NewState';
    const actionName  = 'Send back to advisor';

    const sortIndex = 6;
    
    public function getAllowedPermissionList(){
        return array('dept_approver','sig_auth');
    }
    
    public function getActionName()
    {
        return self::actionName;
    }
    
    public function getSourceState(){
        return self::sourceState;
    }
    
    public function getDestState(){
        return self::destState;
    }
    
    public function getSortIndex(){
        return self::sortIndex;
    }
}

?>