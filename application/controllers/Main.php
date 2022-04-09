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
        $this->schedule();
    }

    function home()
    {
        $this->schedule();
    }

    function schedule()
    {
        $group = isset($_GET['group']) ? $_GET['group'] : "";
        // $group = $this->uri->segment(2);
        if ($group == "") {
            $api_url = 'https://hackforsrilanka-api.herokuapp.com/api/illuminati/groups';

            // Read JSON file
            $json_data = file_get_contents($api_url);

            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);

            $data['groups'] = $response_data;


            $this->load->view('schedule', $data);
        } else {
            $api_url = 'https://hackforsrilanka-api.herokuapp.com/api/illuminati/data';

            // Read JSON file
            $json_data = file_get_contents($api_url);

            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);

            // All user data exists in 'data' object
            $groups_info = array();

            foreach ($response_data as $item) {
                if ($item->group_name == $group) {
                    array_push($groups_info, $item);
                };
            }

            // Cut long data into small & select only first 10 records
            $groups_info = array_slice($groups_info, 0, 9);
            $data['groups_info'] = $groups_info;
            $data['group_name'] = $group;
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
