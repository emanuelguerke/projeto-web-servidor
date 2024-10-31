<?php
    session_start();
    session_destroy();
    header('Location: ../view/index.view.php');