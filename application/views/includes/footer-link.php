<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/owl.js"></script>
<script src="<?= base_url() ?>assets/js/wow.js"></script>
<script src="<?= base_url() ?>assets/js/validation.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.fancybox.js"></script>
<script src="<?= base_url() ?>assets/js/appear.js"></script>
<script src="<?= base_url() ?>assets/js/scrollbar.js"></script>
<script src="<?= base_url() ?>assets/js/isotope.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/circle-progress.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.countTo.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/js/timePicker.js"></script>
<script src="<?= base_url() ?>assets/js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll(".filter-btn");
        const filterItems = document.querySelectorAll(".filter-item");

        filterButtons.forEach(button => {
            button.addEventListener("click", function () {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const filter = this.getAttribute("data-filter");

                // Show/hide items
                filterItems.forEach(item => {
                    if (filter === "all" || item.classList.contains(filter)) {
                        item.classList.add("active");
                    } else {
                        item.classList.remove("active");
                    }
                });
            });
        });

        // Show all items initially
        document.querySelector(".filter-btn[data-filter='all']").click();
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    <?php
    if (sessionId('success_status')) {
        ?>
        Swal.fire({
            title: '<?= sessionId('success_status') ?>!',
            text: '<?= sessionId('msg') ?>',
            icon: '<?= sessionId('success_status') ?>',
            confirmButtonText: 'Done'
        })
        <?php
        unsetsessionId('success_status');
    }
    ?>

    $(document).on('change', '#state', function (e) {
        e.preventDefault();
        var stateID = $(this).val();
        getCityList(stateID);
        console.log(stateID);
    });
    function getCityList(stateID) {
        $.ajax({
            url: "<?= base_url() ?>Home/getcities",
            type: 'post',
            data: {
                stateID: stateID
            },
            success: function (data) {
                $("#city").html(data);
            }
        });
    }
    ;
</script>

</body>

</html>