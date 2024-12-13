# PHP Recursive Function Bug

This repository demonstrates a subtle bug in a PHP recursive function that unexpectedly modifies the original input array due to a lack of array copying within the recursive call. The function aims to process nested arrays and truncate long strings, but instead modifies the input array in an unintended manner.  The solution offers a corrected version that uses array_map to avoid this issue.

## Bug Description:

The recursive `processData` function, when encountering nested arrays, directly modifies the original array instead of creating a copy.  This leads to unintended changes in the original data structure.  The bug becomes evident when dealing with nested array elements.

## Solution:

The corrected `processData` function in `bugSolution.php` uses `array_map` to create a copy of the array before processing, thus preventing the unintended modification of the original data.