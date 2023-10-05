<?php 

function pointDirection($point, $lineStart, $lineEnd) {
    // Calculate vectors from the line's start point to the point in question
    $vectorLineStartToPoint = [
        'x' => $point['x'] - $lineStart['x'],
        'y' => $point['y'] - $lineStart['y'],
    ];

    // Calculate vectors from the line's start point to the line's end point
    $vectorLineStartToEnd = [
        'x' => $lineEnd['x'] - $lineStart['x'],
        'y' => $lineEnd['y'] - $lineStart['y'],
    ];

    // Calculate the cross product of the two vectors
    $crossProduct = $vectorLineStartToPoint['x'] * $vectorLineStartToEnd['y'] -
                    $vectorLineStartToPoint['y'] * $vectorLineStartToEnd['x'];

    // Determine the direction based on the sign of the cross product
    if ($crossProduct > 0) {
        return "Left"; // Point is to the left of the line segment
    } elseif ($crossProduct < 0) {
        return "Right"; // Point is to the right of the line segment
    } else {
        return "Collinear"; // Point is collinear with the line segment
    }
}

// Define the endpoints of the line segment
$lineStart = ['x' => 1, 'y' => 1];
$lineEnd = ['x' => 4, 'y' => 4];

// Define the point to check
$point = ['x' => 2, 'y' => 2];

// Determine the direction of the point relative to the line segment
$direction = pointDirection($point, $lineStart, $lineEnd);

echo "The point is $direction of the line segment.";

?>

