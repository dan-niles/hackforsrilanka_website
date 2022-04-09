<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('access_helper');
    }

    public function index()
    {
        $this->home();
    }

    function home()
    {
        $this->load->view('home');
    }

    function schedule()
    {
        $group_id = $this->uri->segment(2);
        if ($group_id == "") {
            $this->load->view('schedule');
        } else {
            $this->load->view('schedule_view');
        }
    }

    function about()
    {
        $this->load->view('about');
    }

    function contact()
    {
        $this->load->view('contact');
    }
}
