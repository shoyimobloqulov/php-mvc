<!-- Essential javascripts for application to work-->
<script src="../../public/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../public/assets/js/popper.min.js"></script>
<script src="../../public/assets/js/bootstrap.min.js"></script>
<script src="../../public/assets/js/main.js"></script>
<script src="../../public/assets/js/plugins/pace.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $('#delete').click(function(){
        swal({
            title: "Malumotlar o'chishiga rozimisiz?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Ha, roziman!",
            cancelButtonText: "Yoq, orqaga qaytish!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Malumot o'chirildi", "success");
            } else {
                swal("O'chirilmadi", "Orqaga qaytildi", "error");
            }
        });
    });
</script>

<script type="text/javascript">$('#sampleTable').DataTable();</script>

<script>
    toastr.options = {
        "positionClass": "toast-bottom-right",
        "background-color": "#d0190c",
        "color": "#fff"
    }
</script>


<?php
if (!empty($_SESSION['error'])){
    ?>
    <script>toastr.error("<?=$_SESSION['error']?>")</script>
    <?
    unset($_SESSION['error']);
}
?>

<?php
if (!empty($_SESSION['success'])){
    ?>
    <script>toastr.success("<?=$_SESSION['success']?>")</script>
    <?
    unset($_SESSION['success']);
}
?>
