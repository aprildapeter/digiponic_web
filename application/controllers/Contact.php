<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load form validation library
        $this->load->library('form_validation');
    }
   
    public function sendEmail(){
        // Load the email library
        $this->load->library('email');
        
        // Mail config
        $to = 'omibalola@gmail.com';
        $from = $this->input->post('email');
        $fromName = $this->input->post('name');
        $mailSubject = 'Contact Request Submitted by '.$this->input->post('subject');

        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$this->input->post('name').'</p>
            <p><b>Email: </b>'.$this->input->post('email').'</p>
            <p><b>Subject: </b>'.$this->input->post('subject').'</p>
            <p><b>Message: </b>'.$this->input->post('message').'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        $email = $this->email->send();
        if ($email){
            redirect('landingpage');
        } else {
            false;
        }
    }
}
