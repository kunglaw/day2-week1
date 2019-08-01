<?php 
    class Upload {
        public static function uploadProcess() {
          print_r($_FILES["image"]);  
          // arti cascade dalam css

          move_uploaded_file($_FILES["image"]["tmp_name"],"./image");
        } 
    }

    Upload::uploadProcess();