<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Typeannonce_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get typeannonce by idTypeAnnonce
     */
    function get_typeannonce($idTypeAnnonce)
    {
        return $this->db->get_where('TypeAnnonce',array('idTypeAnnonce'=>$idTypeAnnonce))->row_array();
    }
    
    /*
     * Get all typeannonce count
     */
    function get_all_typeannonce_count()
    {
        $this->db->from('TypeAnnonce');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all typeannonce
     */
    function get_all_typeannonce($params = array())
    {
        $this->db->order_by('idTypeAnnonce', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('TypeAnnonce')->result_array();
    }
        
    /*
     * function to add new typeannonce
     */
    function add_typeannonce($params)
    {
        $this->db->insert('TypeAnnonce',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update typeannonce
     */
    function update_typeannonce($idTypeAnnonce,$params)
    {
        $this->db->where('idTypeAnnonce',$idTypeAnnonce);
        return $this->db->update('TypeAnnonce',$params);
    }
    
    /*
     * function to delete typeannonce
     */
    function delete_typeannonce($idTypeAnnonce)
    {
        return $this->db->delete('TypeAnnonce',array('idTypeAnnonce'=>$idTypeAnnonce));
    }
}
