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
            "minannualtaxableincome" => 250000001,
            "maxannualtaxableincome" => 500000000,
            "taxrate" => 25
        ],
        [
            "minannualtaxableincome" => 500000001,
            "maxannualtaxableincome" => 1000000000000,
            "taxrate" => 30
        ]
        ];
?>

<?php

    function nettIncome($amount) {
        $amount = document.getElementById("amount").value;
        // $tax_rate = document.getElementById("tax_rate").value;
        $payment1 = $payment2 = $payment3 = $payment4 = 0;
        
        if ($amount <= $tax_rate.[0]."maxannualtaxableincome"){
            $payment1 = (($amount - $tax_rate[0]."maxannualtaxableincome") * ($tax_rate[0]."taxrate") / 100 );
        } else if ($amount <= $tax_rate.[1]."maxannualtaxableincome"){
            $payment2 = (($amount - $tax_rate[1]."maxannualtaxableincome") * ($tax_rate[1]."taxrate") / 100 );
        } else if ($amount <= $tax_rate.[2]."maxannualtaxableincome"){
            $payment3 = (($amount - $tax_rate[2]."maxannualtaxableincome") * ($tax_rate[2]."taxrate") / 100 );
        } else if ($amount <= $tax_rate.[3]."maxannualtaxableincome"){
            $payment4 = (($amount - $tax_rate[3]."maxannualtaxableincome") * ($tax_rate[3]."taxrate") / 100 );
        }
        
        $total_tax_paid = $payment1 + $payment2 + $payment3 + $payment4;
        // payment == payment.toString().replace('/\B(?=(\d{3})+(?!\d))/g, ","');
        return document.getElementById("total_tax_paid").innerHTML == "Tax Paid = Rp" + $total_tax_paid;
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple Tax Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="./taxCaclulator.php"></script> -->
</head>

<body>
    <h1>List Tax Rate</h1>
    <?php foreach($tax_rate as $rate) : ?>
    <ul>
        <li>Annual Taxable Income : From Rp
            <?= $rate["minannualtaxableincome"]; ?> to Rp 
            <?= $rate["maxannualtaxableincome"]; ?>
        </li>
        <li>Tax Rate :
            <?= $rate["taxrate"];?>%</li>
    </ul>
    <?php endforeach; ?>

    <p>Annual Taxable Income: Rp<input id="amount" type="number" min="1" max="1000000000000"><?= nettIncome($amount); ?></p>
    <!-- <p>Tax Rate: <input id="tax_rate" type="number" min="0" max="100" value="5" step=".1" onchange="nettIncome()">%</p> -->
    <h2 id="total_tax_paid"></h2>

</body>

</html>