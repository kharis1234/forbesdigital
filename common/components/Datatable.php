<?php 

	namespace common\components;

	class Datatable extends \yii\web\Request {
    	
    	
    	public function processDataTable($prmData=array())
    	{
    		//limit;
    		$prm=array(
	            "limit_start"=>$prmData["start"],
	            "limit_end"=>$prmData["length"],
        	);   

    		//order
	        if($prmData['order'][0]['column']!=0)
	        {
	            $sort_idx = $prmData['order'][0]['column'];
	            if($prmData['columns'][$sort_idx]['orderable'] == 'true')
	            {
	                //$prm['sort'] = $this->_get_select_name($prmData['columns'][$sort_idx]['data']);
	            }
	            else
	            {
	                $prm['sort'] = 'id';
	            }
	            
	            $prm['dir'] = $prmData['order'][0]['dir'] ? $prmData['order'][0]['dir'] : 'DESC';
	        }

	        //search all
	        if($prmData['search']['value'] && $prmData['search']['value']!="")
	        {
	            $prm['search_val'] = $prmData['search']['value'];
	            
	            for($i = 0; $i < count($prmData['columns']); $i++)
	            {
	                if($prmData['columns'][$i]['searchable'] == 'true')
	                {
	                    $prm['search_field'][]= $prmData['columns'][$i]['data'];//$this->_get_select_name($prmData['columns'][$i]['data']);//$prmData['search']['value'];
	                }
	            }
	        }

	        //search per column
	        $search_footer = array();
	        for($i = 0; $i < count($prmData['columns']); $i++)
	        {
	            if($prmData['columns'][$i]['searchable'] == 'true')
	            {
	                if($prmData['columns'][$i]['search']['value'] != '')
	                {
	                    $val = (string)$prmData['columns'][$i]['search']['value'];                 
	                    $prm['search_footer'][$prmData['columns'][$i]['data']] = $val;
	                    $search_footer[$prmData['columns'][$i]['data']] = $val;
	                }
	            }
	        }

	        return $prm;
    	}

	}
?>