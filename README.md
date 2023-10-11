# Pattern Matching Algorithm

This PHP algorithm is designed to find all occurrences of a specified pattern within a given text. It does so without relying on built-in PHP functions, providing a simple and efficient approach for pattern matching.

## Algorithm Overview

The algorithm is implemented as a PHP function called `countOccurrences`. It takes two parameters: the input text and the pattern to search for.

### Function Signature

```php
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

```

### Input Parameters
`$text`: The input text in which you want to search for occurrences of the pattern.
`$pattern`: The pattern you want to find within the text.

### The function returns the count of occurrences of the pattern within the text.
1. Initialize variables to store the lengths of the input text and the pattern.
2. Create a count variable to keep track of the number of pattern occurrences found.
3. Use a for loop to iterate through the input text from the beginning to a position where the remaining text is at least the length of the pattern.
4. Use a for loop to iterate through the input text from the beginning to a position where the remaining text is at least the length of the pattern.
5. Use a for loop to iterate through the input text from the beginning to a position where the remaining text is at least the length of the pattern.
6. The function returns the count as the number of occurrences of the pattern in the text.

### Here's an example of how to use the countOccurrences function:

```php
$text = "tadadattaetadadadafa";
$pattern = "dada";
$occurrences = countOccurrences($text, $pattern);

```

In this example, $occurrences will contain the number of times the pattern "dada" appears in the text "tadadattaetadadadafa."

