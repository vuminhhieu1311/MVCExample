<?php
$RESOURCE_URL = '/MVCExample/resources';

function _e($string) {
    echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function _url($url) {
    echo filter_var($url, FILTER_SANITIZE_URL);
}