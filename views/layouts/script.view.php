<!-- Essential javascripts for application to work-->
<script src="../../public/assets/js/jquery-3.3.1.min.js"></script>
<script src="../../public/assets/js/popper.min.js"></script>
<script src="../../public/assets/js/bootstrap.min.js"></script>
<script src="../../public/assets/js/main.js"></script>
<script src="../../public/assets/js/plugins/pace.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script>toastr.success("<?=$_SESSION['error']?>")</script>
    <?
    unset($_SESSION['error']);
}
?>
