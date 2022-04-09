<?php

if ($this->uri->segment(1) == "gen_admin") {
    $this->load->view('inc/sidebars/gen_admin_sidebar');
} else if ($this->uri->segment(1) == "stores") {
    $this->load->view('inc/sidebars/stores_sidebar');
}
