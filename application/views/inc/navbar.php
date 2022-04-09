<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-4">
    <div class="container px-5">
        <a class="navbar-brand"><img class="nav-logo" src="<?php echo base_url() ?>assets/img/logo.png" alt="site logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?php echo ($this->uri->segment(1) == "") ? 'active' : '' ?>" href="<?php echo base_url() ?>" href="<?php echo base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($this->uri->segment(1) == "schedule") ? 'active' : '' ?>" href="schedule">Power Cut Schedule</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($this->uri->segment(1) == "about") ? 'active' : '' ?>" href="about">About</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($this->uri->segment(1) == "contact") ? 'active' : '' ?>" href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>