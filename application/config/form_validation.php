<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
            'signup' => array(
                  array(
                        'field'   => 'username', 
                        'label'   => 'Username', 
                        'rules'   => 'trim|required|min_length[2]|max_length[50]|callback_check_unique_username'
                     ),
                  array(
                        'field'   => 'name', 
                        'label'   => 'Name',    
                        'rules'   => 'trim|required|min_length[2]|max_length[50]'
                     ),
                  array(
                        'field'   => 'password', 
                        'label'   => 'Password', 
                        'rules'   => 'trim|required|min_length[6]|max_length[50]'
                     ),
                  array(
                        'field'   => 'email', 
                        'label'   => 'Email', 
                        'rules'   => 'trim|required|min_length[2]|max_length[50]|callback_check_unique_email'
                  )
               ),
            'signin' => array(
                  array(
                        'field'   => 'username_signin', 
                        'label'   => 'Username', 
                        'rules'   => 'trim|required|min_length[2]|max_length[50]'
                     ),
                  array(
                        'field'   => 'password_signin', 
                        'label'   => 'Password', 
                        'rules'   => 'trim|required|min_length[6]|max_length[50]|callback_terminal_signin'
                     )
               )
               
            );
/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */