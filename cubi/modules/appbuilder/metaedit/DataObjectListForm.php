<?php
require_once MODULE_PATH.'/common/form/ArrayListForm.php';
class DataObjectListForm extends ArrayListForm
{
	public function GetRecordList()
	{
		$module = BizSystem::getObject("appbuilder.metaedit.ModuleFilterForm")->m_RecordId;
		
		$svc = BizSystem::getObject("appbuilder.lib.MetadataService");
    	$objList = $svc->listDataObjects($module);
    	
    	foreach($objList as $obj)
    	{
    		$objInfo = $svc->getDataObjectInfo($obj);
    		$result[] = $objInfo;
    	}
    	return $result;
	}	
}
?>