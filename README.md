# PHP Array Key Type Handling Pitfalls

This repository demonstrates a subtle bug in PHP related to how array keys are handled when they are not strictly integers or strings.

The `bug.php` file contains code that illustrates the issue.  The `bugSolution.php` file provides a solution demonstrating best practices to avoid this problem.

## Issue
PHP's loose typing can lead to unexpected behavior. The example shows that a floating-point key `1.5` is treated as a string, resulting in a different entry compared to using the string key "1.5".

## Solution
The solution file emphasizes using only integer and string keys for better array management and predictability. This prevents implicit type conversion from causing unintended behavior.  Consider using type hinting to ensure array keys match the intended type.