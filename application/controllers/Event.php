<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		 $this->load->view('event/addevent.php');
	}
    public function addEvent(){
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');
        $this->form_validation->set_rules('time', 'time','required');
        $this->form_validation->set_rules('location', 'location', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('event/addevent');
        }
        else
        {
               $insert['title'] = $this->input->post('title');
               $insert['date'] = $this->input->post('date');
               $insert['time'] = $this->input->post('time');
               $insert['location'] = $this->input->post('location');
               $insert['description'] =  $this->input->post('description');
               $this->db->insert('event',$insert);
               $this->session->set_flashdata('message', 'Event added successfully.');
               redirect("Event/addevent");
        }
    }
}
