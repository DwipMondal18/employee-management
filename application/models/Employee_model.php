<?php
class Employee_model extends CI_Model {

  public function get_all() {
    return $this->db->get('emp_details')->result();
  }

  public function get($id) {
    return $this->db->get_where('emp_details', ['id' => $id])->row();
  }

  public function insert($data) {
    return $this->db->insert('emp_details', $data);
  }

  public function update($id, $data) {
    return $this->db->where('id', $id)->update('emp_details', $data);
  }

  public function delete($id) {
    return $this->db->where('id', $id)->delete('emp_details');
  }
}
