
<?php


/*

In the decimalToBinary function, we initialize an empty string $binary to store the binary representation.

We use a while loop to iterate until the decimal number becomes 0. In each iteration, we calculate the remainder of the division by 2 and append it to the $binary string. Then, we update the decimal number by dividing it by 2.
*/
function decimalToBinary($decimal) {
    $binary = '';
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = (int)($decimal / 2);
    }
    return $binary;
}

 


?>