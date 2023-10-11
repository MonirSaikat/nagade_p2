<?php
function countOccurrences($text, $pattern)
{
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $j = 0;
        while ($j < $patternLength && $text[$i + $j] == $pattern[$j]) {
            $j++;
        }

        if ($j == $patternLength) {
            $count++;
        }
    }

    return $count;
}

$text = "tadadattaetadadadafa";
$pattern = "dada";
$occurrences = countOccurrences($text, $pattern);

echo "The pattern \"$pattern\" appears in the text \"$text\" $occurrences times.\n";
