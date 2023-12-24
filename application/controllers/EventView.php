<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventView extends CI_Controller {

	public function index()
	{
         $str = null;
         $ed = $this->db->get('event'); 
         foreach($ed->result_array() as $v){
            $formattedDate = date('j M', strtotime($v['date'])); // Format the date
            $isEventExpired = strtotime($v['date']) < strtotime('today');
           $str.=' <section>
            <div class="container">
                <div class="left">
                    <h3 style="font-size:18px;">'.$v['title'].'</</h3>
                    <p class="location">'.$v['location'].'</p>
                    <p style="font-weight:100;">'.$v['description'].'</p>
                    <p class="time" ><i class="fa fa-clock" aria-hidden="true">&nbsp; &nbsp;</i>'.$v['time'].'</p>
                    <p class="link">'.anchor("EventView/viewMore/".md5($v['id']),"View More").'</p>
                </div>
                <div class="right">
                    <p>' . $formattedDate . '</p>
                    ' . ($isEventExpired ? '<p style="background-color:white; color:red;" font-size:12px; border-radius:10px;>Event Expired</p>' : '') . '
                </div>
                
            </div>
        </section> ';
         }
         $data['list'] = $str;
         $this->load->view('event/event_view',$data);
	}
    public function viewMore(){
       $id =  $this->uri->segment(3);
       $this->db->where(array("md5(id)"=>$id));
       $dd = $this->db->get('event');
       $data['title'] = $dd->row()->title;
       $date = $dd->row()->date;
       $data['date'] = date('j M', strtotime($date));
       $data['location'] = $dd->row()->location;
       $data['description'] = $dd->row()->description;
       $this->load->view('event/viewmore',$data);
       
    }
  
}
