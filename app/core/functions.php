<?php

    // Render PRE tags for pretty arrays
    function show($stuff) {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }