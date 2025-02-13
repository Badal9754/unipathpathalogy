<?php $this->load->view('admin/template/header', $title); ?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
                    </div>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="gallery"><img src="<?= base_url() ?>upload/blog/<?= $image ?>" height="100" /></div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                         
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-12 col-form-label">Blog  Image</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control image" multiple   name="image">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-12 col-form-label">Blog Title</label>
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="title" required value="<?= $title ?>">
                                            </div>
                                        </div>
                                    </div>

                                  
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-12 col-form-label">Blog Content</label>
                                            <div class="col-md-12">
                                                <textarea name="description" style="width: 100%;" id="editor" rows="10"><?= $description ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" id="save" class="btn btn-primary w-md">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php $this->load->view('admin/template/footer'); ?>
<script>
    $(document).ready(function() {
        initSample();
    });

    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            // if (filesAmount <= 5) {
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style="width:200px; height:150px; margin-left:15px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('.image').on('change', function() {
        $('.gallery').html('');
        imagesPreview(this, 'div.gallery');
    });
    <?php
    if (isset($id)) {
    ?>
        imagesPreview($('#picture'), 'div.gallery');
    <?php
    } else {
    }
    ?>
</script>