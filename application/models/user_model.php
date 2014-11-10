<?php

class User_model extends CI_Model {

    var $name   = '';
    var $password = '';
    var $email    = '';
    var $ctime = '';

    function __construct()
    {
        parent::__construct();   

        $this->load->library('encrypt');
        $this->load->database();
    }
    /* End of Contructor */

    function create($username,$name="",$password="",$email="")
    {
        $this->username = $username;
        $this->name = $name;
        $this->password = $this->encrypt->encode($password);
        $this->email = $email;
        $this->ctime = date("Y-m-d H:i:s");

        $this->db->insert('users', $this);
        
        return $this->db->affected_rows() > 0;
    }
    /* End of create */

    function check_unique_username($username="")
    {
        $values = array('username' => $username);
        
        $query = $this->db->get_where('users', $values, 1);

        return ( $query->num_rows() == 0) ? true: false;
    }
    /* End of check_username*/

    function check_unique_email($email="")
    {
        $values = array('email' => $email);

        $query = $this->db->get_where('users', $values, 1);

        return ( $query->num_rows() == 0) ? true: false;
    }
    /* End of check_email*/

    function signin($username="",$password="")
    {
        $values = array('username' => $username, 'password' => $password);

        $query = $this->db->get_where('users', $values, 1);

        return ( $query->num_rows() == 1) ? true: false;
    }
    /* End of check_email*/



/*    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/

}
/* End of file user.php */
/* Location: ./application/models/user.php */