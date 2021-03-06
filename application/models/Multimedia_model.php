<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Multimedia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get multimedia by idMultimedias
     */
    function get_multimedia($idMultimedias)
    {
        return $this->db->get_where('Multimedias',array('idMultimedias'=>$idMultimedias))->row_array();
    }
    
    /*
     * Get all multimedias count
     */
    function get_all_multimedias_count()
    {
        $this->db->from('Multimedias');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all multimedias
     */
    function get_all_multimedias($params = array())
    {
        $this->db->order_by('idMultimedias', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('Multimedias')->result_array();
    }
        
    /*
     * function to add new multimedia
     */
    function add_multimedia($params)
    {
        $this->db->insert('Multimedias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update multimedia
     */
    function update_multimedia($idMultimedias,$params)
    {
        $this->db->where('idMultimedias',$idMultimedias);
        return $this->db->update('Multimedias',$params);
    }
    
    /*
     * function to delete multimedia
     */
    function delete_multimedia($idMultimedias)
    {
        return $this->db->delete('Multimedias',array('idMultimedias'=>$idMultimedias));
    }
}
