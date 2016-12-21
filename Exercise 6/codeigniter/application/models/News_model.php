<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('user_id' => $id));
        return $query->row_array();
    }
    
    public function set_news($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'nickname' => $this->input->post('nickname')
			'email_add' => $this->input->post('email_add'),
			'contact_no' => $this->input->post('contact_no'),
			'gender' => $this->input->post('gender'),
			'comment' => $this->input->post('comment'),
        );
		
        
        if ($id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('user_id', $id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('news');
    }
}