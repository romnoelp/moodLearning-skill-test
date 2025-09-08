<?php
function calculateDiscount($price, $discount) {
    // Checks if the arguments are numeric values
    if (!is_numeric($price) || !is_numeric($discount)) { // Used guarded clauses and negated conditions for a more readable conditions. 
        echo "Error: Price and discount must be numeric values.\n";
        return null;
    }

    // Converts the values to float for a more precise result 
    $price = (float)$price;
    $discount = (float)$discount;

    if ($price <= 0) {
        echo "Error: Price must be greater than 0.\n";
        return null;
    }

    // Invalid input values 
    if ($discount < 0 || $discount > 100) {
        echo "Error: Discount must be between 0 and 100.\n";
        return null;
    }

    // Calculation process
    $discountAmount = $price * ($discount / 100);
    return $price - $discountAmount;
}

$originalPrice = 100;
$discountPercentage = 20;

$discountedPrice = calculateDiscount($originalPrice, $discountPercentage);

if ($discountedPrice !== null) {
    echo "Original Price: $" . $originalPrice . "\n";
    echo "Discount Percentage: " . $discountPercentage . "%\n";
    echo "Discounted Price: $" . $discountedPrice . "\n";
}
?>
