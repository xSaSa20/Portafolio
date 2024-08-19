<?php
function calculate_powers($number) {
    $powers = [];
    for ($i = 1; $i <= 4; $i++) {
        $powers[] = pow($number, $i);
    }
    return $powers;
}

echo "<table border='1'>";
for ($i = 1; $i <= 4; $i++) {
    echo "<tr>";
    $powers = calculate_powers($i);
    foreach ($powers as $power) {
        echo "<td>$power</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>