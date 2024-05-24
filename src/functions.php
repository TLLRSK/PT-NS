<?php

    function formatPrice($price) {
        $price_parts = explode(',', $price);
        $price_integer = $price_parts[0];
        $price_decimal = isset($price_parts[1]) ? $price_parts[1] : '';
        return array(
            'integer' => $price_integer,
            'decimal' => $price_decimal
        );
    }

?>