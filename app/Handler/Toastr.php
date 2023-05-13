<?php
    namespace App\Handler;
    class Toaster {
        private $toastType;
        private $toastTime;

        public function __construct($type, $time) {
            $this->toastType = $type;
            $this->toastTime = $time;
        }

        public function makeToast() {
            // Toasterning ishlab chiqarish jarayoni
            echo "<script>toastr.success('Toasting a " . $this->toastType . " for " . $this->toastTime . " minutes.')</script>";
        }
    }



