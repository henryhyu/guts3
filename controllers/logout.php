<?php

session_start();
// session_destroy — Destroys all data registered to a session
if (session_destroy()) {
    header('Location: ../views/index.php'); // Redirects to the Index Page
}
