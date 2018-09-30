<?php
    $tax_rate = [
        [
            "minannualtaxableincome" => 0,
            "maxannualtaxableincome" => 50000000,
            "taxrate" => 5
        ],
        [
            "minannualtaxableincome" => 50000001,
            "maxannualtaxableincome" => 250000000,
            "taxrate" => 15
        ],
        [
            "minannualtaxableincome" => 250000000,
            "maxannualtaxableincome" => 500000000,
            "taxrate" => 25
        ],
        [
            "minannualtaxableincome" => 500000001,
            "maxannualtaxableincome" => 1000000000000,
            "taxrate" => 30
        ]
        ];

    function nettIncome(){

    }
?>