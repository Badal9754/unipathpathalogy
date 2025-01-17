<?php $this->load->view('admin/template/header', $title); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                    </div>
                    <div class="text-center mt-5">

                        <img src="<?= base_url('assets/images/img/unipath-logo.jpg') ?>" alt="logo" class="img-fluid"
                            width="300px">
                        <h2 class="pt-5">Welcome to Unipath Pathology</h2>

                    </div>
                </div>
            </div>







        </div>
        <?php $this->load->view('admin/template/footer'); ?>

        <!-- <span class="badge badge-pill badge-soft-success font-size-11">Paid</span> -->
        <script>
            $('.accept').click(function () {
                let id = $(this).attr('id');
                let order_id = $(this).attr('datafld');
                $('.booking_id').val(id);
                $('.acceptHead').text(order_id);
                $('.acceptModal').modal('show');
            });

            $('.cancel').click(function () {
                let id = $(this).attr('id');
                let order_id = $(this).attr('datafld');
                $('.booking_id').val(id);
                $('.acceptHead').text(order_id);
                $('.cancelModal').modal('show');
            });
        </script>