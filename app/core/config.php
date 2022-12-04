<?php
// Conditional for ROOT constant to load localhost path or Live production path
if($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost:8888/modern_mvc_oop/public');
} else {
    define('ROOT', 'https://www.websitename.com');
}