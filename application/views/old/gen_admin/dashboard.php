<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Astron EITS</title>

  <?php $this->load->view('inc/stylesheets'); ?>
</head>

<body class="hold-transition sidebar-mini text-sm">
  <div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('inc/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('inc/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="text-center pt-5 pb-3">Dashboard</h2>
                  <div class="container pb-5">
                    <div class="d-flex justify-content-center h-100">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php $this->load->view('inc/footer'); ?>

    <!-- Modal -->
    <div class="modal fade" id="view_record_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">View Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="year">Opportunity</label>
                  <input type="text" class="form-control" id="type" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Contact Person</label>
                  <input type="text" class="form-control" id="contact_person" readonly>
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" id="country_name" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-7">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" readonly>
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="text" class="form-control" id="contact_no" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" readonly>
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label>Web</label>
                  <input type="text" class="form-control" id="web" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Requirement</label>
                  <input type="text" class="form-control" id="requirement" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="year">Status</label>
                  <input type="text" class="form-control" id="status" readonly>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Remarks</label>
                  <input type="text" class="form-control" id="remarks" readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger br-2" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- ./wrapper -->

  <!-- SCRIPTS -->
  <?php $this->load->view('inc/scripts'); ?>
  <script>
    $(document).on('click', '.view_record', function() {
      var id = $(this).data('id')
      console.log(id)
      $.ajax({
        type: "post",
        url: "<?php echo base_url() ?>records/fetchRecord",
        data: {
          id: id,
        },
        dataType: "json",
        success: function(data) {
          console.log(data)
          if (data.response == 'success') {
            if (data.record['type'] == 1)
              var type = 'Buyer'
            else
              var type = 'Seller'
            if (data.record['status'] == 1)
              var status = 'Pending'
            else
              var status = 'Completed'
            $('#view_record_modal #type').val(data.record['type'])
            $('#view_record_modal #address').val(data.record['address'])
            $('#view_record_modal #contact_no').val(data.record['contact_no'])
            $('#view_record_modal #contact_person').val(data.record['contact_person'])
            $('#view_record_modal #country_name').val(data.record['country_name'])
            $('#view_record_modal #email').val(data.record['email'])
            $('#view_record_modal #remarks').val(data.record['remarks'])
            $('#view_record_modal #requirement').val(data.record['requirement'])
            $('#view_record_modal #web').val(data.record['web'])
            $('#view_record_modal #type').val(type)
            $('#view_record_modal #status').val(status)
            $('#view_record_modal').modal('show')
          } else {
            toastr.error('Something went wrong!')
          }
        }
      });

    })
  </script>
</body>

</html>