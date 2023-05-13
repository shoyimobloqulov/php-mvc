<?php
/** @var string $error */
$title = $error . " - error";
require 'layouts/head.view.php';
?>
<main class="app-content" style="margin: 0">
    <div class="page-error tile">
        <h1><i class="fa fa-exclamation-circle"></i> Error 404: Page not found</h1>
        <p><?= $error ?></p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
    </div>
</main>
<?php
require 'layouts/script.view.php';
?>



