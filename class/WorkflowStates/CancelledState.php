<?php
class CancelledState extends WorkflowState {
    const friendlyName = 'Cancelled';
    
    public function getFriendlyName(){
        return self::friendlyName;
    }
}
?>