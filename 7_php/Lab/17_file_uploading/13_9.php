<?php
// 13_9.php

if ($_FILES['file']['error'] == UPLOAD_ERR_OK &&
  is_uploaded_file($_FILES['file']['tmp_name'])) {
  move_uploaded_file($_FILES['file']['tmp_name'], 
                     "/path/to/file/{$_FILES['file']['name']}");
}
