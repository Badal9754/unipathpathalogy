<?php $this->load->view('admin/template/header', $title); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
                        <a href="<?= base_url("blog_add"); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Blogs</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($all_blogs) {
                                        $i = 0;
                                        foreach ($all_blogs as $item) {
                                            $i = $i + 1;
                                            $id = encryptId($item['blog_id']);
                                    ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><img src="<?= base_url()?>upload/blog/<?= $item['image']?>" width="80" alt=""></td>
                                               
                                                <td>
                                                    <p style="line-height:25px;">
                                                        <?= ucwords($item['title']) ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>blog_add?id=<?= $id; ?>" class="mt-1 btn btn-success"><i class="fa fa-edit"></i></a><br>
                                                    <a href="<?= base_url("blog_All?dID=$id"); ?>" onclick="return confirm('Are you sure ?')" class="mt-1 btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>

                                                
                                              
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer'); ?>