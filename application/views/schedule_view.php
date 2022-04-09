<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hack For Sri Lanka | Power-Cut Schedule</title>
    <?php $this->load->view('inc/stylesheets'); ?>
    <link href="<?php echo base_url() ?>/assets/calendar/css/style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php $this->load->view('inc/navbar'); ?>
        <!-- Header-->
        <header class="bg-dark pt-2 pb-5">
            <div class="container">
                <div class="text-center mb-3">
                    <h1 class="fw-bolder">Power-Cut Schedule</h1>
                    <p class="lead fw-normal text-muted mb-0">Group <?php echo $group_name ?></p>
                </div>
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-12 col-xl-12 col-xxl-12">
                        <div class="card">
                            <div id="app"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </main>
    <!-- Footer-->
    <?php $this->load->view('inc/footer'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php $this->load->view('inc/scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.2/moment.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var groups_data = JSON.parse('<?php echo json_encode($groups_info) ?>');
        groups_data.forEach(function(arrayItem) {
            arrayItem.date = moment(arrayItem.starting_period).format("DDMMYYYY");
            // arrayItem.start_time = moment(arrayItem.starting_period).format("hh:mm a");
            // arrayItem.end_time = moment(arrayItem.ending_period).format("hh:mm a");
        });
    </script>
    <script src="<?php echo base_url() ?>/assets/calendar/js/script.js"></script>

</body>

</html>