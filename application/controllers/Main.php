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
        $this->load->view('schedule');
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
