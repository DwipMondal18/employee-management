<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Employee_model');
    $this->load->library(['session', 'upload']);
    $this->load->helper(['form', 'url']);

    if (!$this->session->userdata('user_id')) {
      redirect('auth');
    }
  }

  public function index() {
    $data['employees'] = $this->Employee_model->get_all();
    $this->load->view('employee_form', $data);
  }

  public function create() {
    $this->load->view('employee_add');
  }

  public function store() {
    $picture = $this->_upload_picture();

    $data = [
      'name' => $this->input->post('name'),
      'address' => $this->input->post('address'),
      'designation' => $this->input->post('designation'),
      'salary' => $this->input->post('salary'),
      'picture' => $picture
    ];

    $this->Employee_model->insert($data);
    redirect('employee');
  }

  public function edit($id) {
    $data['employee'] = $this->Employee_model->get($id);
    $this->load->view('employee_edit', $data);
  }

  public function update($id) {
    $picture = $this->_upload_picture();

    $data = [
      'name' => $this->input->post('name'),
      'address' => $this->input->post('address'),
      'designation' => $this->input->post('designation'),
      'salary' => $this->input->post('salary')
    ];

    if ($picture) {
      $data['picture'] = $picture;
    }

    $this->Employee_model->update($id, $data);
    redirect('employee');
  }

  public function delete($id) {
    $this->Employee_model->delete($id);
    redirect('employee');
  }

  private function _upload_picture() {
    $config['upload_path'] = './uploads/pictures/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2048;

    $this->upload->initialize($config);
    if ($this->upload->do_upload('picture')) {
      $upload_data = $this->upload->data();
      return $upload_data['file_name'];
    }
    return '';
  }
}
