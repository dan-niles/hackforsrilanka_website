<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hack For Sri Lanka | Power-Cut Schedule</title>
    <?php $this->load->view('inc/stylesheets'); ?>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php $this->load->view('inc/navbar'); ?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Find your power cut schedule!
                            </h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-warning btn-lg px-4" href="#getStarted">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo base_url() ?>assets/img/lightbulb.jpeg" alt="..." /></div>
                </div>
            </div>
        </header>
        <header class="bg-dark py-5" id="getStarted">
            <div class="container px-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Select your group area below.</h1>
                </div>
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card p-5">
                            <form action="<?php echo base_url() ?>schedule" method="get">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <h3 class="fw-bolder">Search by Group</h3>
                                        <label class="text-white-50" for="">Select Group: </label>
                                        <select class="form-control form-control-lg text-center" name="" id="">
                                            <?php foreach ($groups as $group) { ?>
                                                <option value="<?php echo $group ?>"><?php echo $group ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 mt-4 text-center">
                                        <button class="btn btn-warning px-4" href="#features">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mt-4 mt-lg-0 p-5">
                            <form action="" method="post">
                                <div class="form-row">
                                    <h3 class="fw-bolder">Search by Location</h3>
                                    <div class="form-group col-12">
                                        <label class="text-white-50" for="">Select your district : </label>
                                        <select class="form-control form-control-lg text-center" name="" id="">
                                            <option value="A">Colombo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 mt-3">
                                        <label class="text-white-50" for="">Select your area : </label>
                                        <select class="form-control form-control-lg text-center" name="" id="">
                                            <option value="A">Mount Lavinia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 mt-4 text-center">
                                        <button class="btn btn-warning px-4" href="#features">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->

    </main>
    <!-- Footer-->
    <?php $this->load->view('inc/footer'); ?>
    <?php $this->load->view('inc/scripts'); ?>
</body>

</html>