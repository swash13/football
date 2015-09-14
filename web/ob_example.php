<?php

function render($view) {
    ob_start();
    ob_start();
    include $view . '.php';
    $content = ob_get_clean();
    include 'layout.php';
    return ob_get_clean();
}

echo render('content');
