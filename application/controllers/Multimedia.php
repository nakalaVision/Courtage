<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Multimedia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Multimedia_model');
    } 

    /*
     * Listing of multimedias
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('multimedia/index?');
        $config['total_rows'] = $this->Multimedia_model->get_all_multimedias_count();
        $this->pagination->initialize($config);

        $data['multimedias'] = $this->Multimedia_model->get_all_multimedias($params);
        
        $data['_view'] = 'multimedia/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new multimedia
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('libelleMultimedia','LibelleMultimedia','required');
		$this->form_validation->set_rules('idCategories','IdCategories','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'idCategories' => $this->input->post('idCategories'),
				'libelleMultimedia' => $this->input->post('libelleMultimedia'),
            );
            
            $multimedia_id = $this->Multimedia_model->add_multimedia($params);
            redirect('multimedia/index');
        }
        else
        {
			$this->load->model('Category_model');
			$data['all_categories'] = $this->Category_model->get_all_categories();
            
            $data['_view'] = 'multimedia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a multimedia
     */
    function edit($idMultimedias)
    {   
        // check if the multimedia exists before trying to edit it
        $data['multimedia'] = $this->Multimedia_model->get_multimedia($idMultimedias);
        
        if(isset($data['multimedia']['idMultimedias']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('libelleMultimedia','LibelleMultimedia','required');
			$this->form_validation->set_rules('idCategories','IdCategories','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'idCategories' => $this->input->post('idCategories'),
					'libelleMultimedia' => $this->input->post('libelleMultimedia'),
                );

                $this->Multimedia_model->update_multimedia($idMultimedias,$params);            
                redirect('multimedia/index');
            }
            else
            {
				$this->load->model('Category_model');
				$data['all_categories'] = $this->Category_model->get_all_categories();

                $data['_view'] = 'multimedia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The multimedia you are trying to edit does not exist.');
    } 

    /*
     * Deleting multimedia
     */
    function remove($idMultimedias)
    {
        $multimedia = $this->Multimedia_model->get_multimedia($idMultimedias);

        // check if the multimedia exists before trying to delete it
        if(isset($multimedia['idMultimedias']))
        {
            $this->Multimedia_model->delete_multimedia($idMultimedias);
            redirect('multimedia/index');
        }
        else
            show_error('The multimedia you are trying to delete does not exist.');
    }
    
}
