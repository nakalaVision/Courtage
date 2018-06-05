<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bienetre extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bienetre_model');
    } 

    /*
     * Listing of bienetre
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('bienetre/index?');
        $config['total_rows'] = $this->Bienetre_model->get_all_bienetre_count();
        $this->pagination->initialize($config);

        $data['bienetre'] = $this->Bienetre_model->get_all_bienetre($params);
        
        $data['_view'] = 'bienetre/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new bienetre
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('libelleBienEtre','LibelleBienEtre','required');
		$this->form_validation->set_rules('idCategories','IdCategories','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'idCategories' => $this->input->post('idCategories'),
				'libelleBienEtre' => $this->input->post('libelleBienEtre'),
            );
            
            $bienetre_id = $this->Bienetre_model->add_bienetre($params);
            redirect('bienetre/index');
        }
        else
        {
			$this->load->model('Category_model');
			$data['all_categories'] = $this->Category_model->get_all_categories();
            
            $data['_view'] = 'bienetre/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a bienetre
     */
    function edit($idBienEtre)
    {   
        // check if the bienetre exists before trying to edit it
        $data['bienetre'] = $this->Bienetre_model->get_bienetre($idBienEtre);
        
        if(isset($data['bienetre']['idBienEtre']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('libelleBienEtre','LibelleBienEtre','required');
			$this->form_validation->set_rules('idCategories','IdCategories','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'idCategories' => $this->input->post('idCategories'),
					'libelleBienEtre' => $this->input->post('libelleBienEtre'),
                );

                $this->Bienetre_model->update_bienetre($idBienEtre,$params);            
                redirect('bienetre/index');
            }
            else
            {
				$this->load->model('Category_model');
				$data['all_categories'] = $this->Category_model->get_all_categories();

                $data['_view'] = 'bienetre/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bienetre you are trying to edit does not exist.');
    } 

    /*
     * Deleting bienetre
     */
    function remove($idBienEtre)
    {
        $bienetre = $this->Bienetre_model->get_bienetre($idBienEtre);

        // check if the bienetre exists before trying to delete it
        if(isset($bienetre['idBienEtre']))
        {
            $this->Bienetre_model->delete_bienetre($idBienEtre);
            redirect('bienetre/index');
        }
        else
            show_error('The bienetre you are trying to delete does not exist.');
    }
    
}
