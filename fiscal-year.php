<?php
$expExploding = explode("-", $formatted_date_Op_date);
if ($expExploding[1] > 7) {
    $newExpYear = $expExploding[0] + 1 + $paid_years;
} elseif ($expExploding[1] >= 7 && $expExploding[2] < 16) {
    $newExpYear = $expExploding[0] + $paid_years;
} elseif ($expExploding[1] >= 7 && $expExploding[2] > 16) {
    $newExpYear = $expExploding[0] + 1 + $paid_years;
} elseif ($expExploding[1] >= 7 && $expExploding[2] >= 16) {
    $newExpYear = $expExploding[0] + $paid_years;
} else {
    $newExpYear = $expExploding[0] + $paid_years;
}
$_expiryDate = $newExpYear . '-' . '07' . '-' . '16'; 
