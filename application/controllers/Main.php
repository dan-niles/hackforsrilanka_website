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
        $group_id = isset($_GET['group']) ? $_GET['group'] : "";
        // $group_id = $this->uri->segment(2);
        if ($group_id == "") {
            $this->load->view('schedule');
        } else {
            $api_url = 'https://hackforsrilanka-api.herokuapp.com/api/illuminati/data';

            // Read JSON file
            $json_data = file_get_contents($api_url);

            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);

            // All user data exists in 'data' object
            $groups_info = $response_data;

            // Cut long data into small & select only first 10 records
            $groups_info = array_slice($groups_info, 0, 9);
            $data['groups_info'] = $groups_info;
            // Print data if need to debug
            //print_r($groups_info);

            $this->load->view('schedule_view', $data);
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
