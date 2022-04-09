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
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Find Your Power-Cut Schedule</h1>
                    <p class="lead fw-normal text-muted mb-0">Select your group or area...</p>
                </div>
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card p-5">
                            <form action="" method="post">
                                <div class="form-row text-center">
                                    <div class="form-group col-12">
                                        <label class="text-white-50" for="">Select your group : </label>
                                        <select class="form-control form-control-lg text-center" name="" id="">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                            <option value="I">I</option>
                                            <option value="J">J</option>
                                            <option value="K">K</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 mt-4">
                                        <button class="btn btn-warning px-4" href="#features">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card mt-4 mt-lg-0 p-5">
                            <form action="" method="post">
                                <div class="form-row text-center">
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
                                    <div class="form-group col-12 mt-4">
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