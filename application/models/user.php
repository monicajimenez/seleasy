<?php

class User extends CI_Model {

    var $username   = '';
    var $password = '';
    var $email    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
   /* function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
*/
    function createUser($username="",$password="",$email="")
    {
        $this->username   = $username;
        $this->password = $password;
        $this->email    = $email;
        $this->db->insert('user', $this);
    }

/*    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/

}

/* End of file home.php */
/* Location: ./application/models/user.php */