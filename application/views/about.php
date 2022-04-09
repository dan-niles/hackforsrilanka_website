<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hack for Sri Lanka | About</title>
    <?php $this->load->view('inc/stylesheets'); ?>
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php $this->load->view('inc/navbar'); ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder text-white text-white mb-3">Hack For The Globe</h1>
                            <p class="lead fw-normal text-white-50 mb-4">We are a team of data scientists and computer programmers with a vision to democratize data. We have a deep passion for technology, data, and people.</p>
                            <a class="btn btn-warning btn-lg" target="_blank" href="https://change-via-data.wixsite.com/hack-for-the-globe/team">Read our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder text-white">Our founding</h2>
                        <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder text-white ">Growth &amp; beyond</h2>
                        <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder text-white">The Teams</h2>
                    <p class="lead fw-normal text-white-50 mb-5">of Hack For Sri Lanka</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?php echo base_url() ?>assets/img/teams/spider.png" alt="..." />
                            <h5 class="fw-bolder text-white">Scrapers - The Creepy Spiders</h5>
                            <div class="fst-italic text-white-50">
                                <p class="text-white mt-3 mb-1">Jinal Shah</p>
                                <p>Kun Guo<br>Danny Sallis<br>Selena Sun<br>Amanbir Singh</p>
                            </div>
                            <div class="pagelayer-service-text">

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?php echo base_url() ?>assets/img/teams/db.png" alt="..." />
                            <h5 class="fw-bolder text-white">API & DB - The Dispatchers</h5>
                            <div class="fst-italic text-white-50">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder text-white">Web - Team Facade</h5>
                            <div class="fst-italic text-white-50">Operations Manager</div>

                        </div>
                    </div>

                </div>

                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center mt-4">
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder text-white">Lights off - The Illuminati</h5>
                            <div class="fst-italic text-white-50">CTO</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder text-white">Brainstorm - Slam Dunkers</h5>
                            <div class="fst-italic text-white-50">CTO</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- Footer-->
    <!-- Footer-->
    <?php $this->load->view('inc/footer'); ?>

    <?php $this->load->view('inc/scripts'); ?>
</body>

</html>