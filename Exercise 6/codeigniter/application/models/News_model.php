<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function get_news_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function set_news($user_id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
		'user_id' => $user_id,
            'name' => $this->input->post('name'),
            'nickname' => $this->input->post('nickname'),
			'email_add' => $this->input->post('email_add'),
			'contact_no' => $this->input->post('contact_no'),
			'gender' => $this->input->post('gender'),
			'comment' => $this->input->post('comment'),
        );
		
        
        if ($user_id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('user_id', $user_id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('news');
    }
}