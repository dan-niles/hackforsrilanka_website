<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('checkSystemAccess')) {
    function checkSystemAccess($DisplayNo)
    {
        $ci = &get_instance();
        $commondb = $ci->load->database('common', TRUE);
        $commondb->select('SystemAccessID');
        $commondb->where('DisplayNo', $DisplayNo);
        $commondb->where('SystemID', 11);
        $query = $commondb->get('system_access', 1);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
