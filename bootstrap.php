<?php

if (COCKPIT_ADMIN && !COCKPIT_API_REQUEST) {

    $app->on('admin.init', function(){
        $this->helper('admin')->addAssets('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
        $this->helper('admin')->addAssets('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js');
    });

}