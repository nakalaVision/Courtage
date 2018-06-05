<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Service_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get service by idServices
     */
    function get_service($idServices)
    {
        return $this->db->get_where('Services',array('idServices'=>$idServices))->row_array();
    }
    
    /*
     * Get all services count
     */
    function get_all_services_count()
    {
        $this->db->from('Services');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all services
     */
    function get_all_services($params = array())
    {
        $this->db->order_by('idServices', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('Services')->result_array();
    }
        
    /*
     * function to add new service
     */
    function add_service($params)
    {
        $this->db->insert('Services',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update service
     */
    function update_service($idServices,$params)
    {
        $this->db->where('idServices',$idServices);
        return $this->db->update('Services',$params);
    }
    
    /*
     * function to delete service
     */
    function delete_service($idServices)
    {
        return $this->db->delete('Services',array('idServices'=>$idServices));
    }
}