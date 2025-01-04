# PHP Loose Comparison Bug

This repository demonstrates a common, yet often overlooked, bug in PHP related to the loose comparison operator (`==`).  Loose comparison can lead to unexpected type coercion and incorrect program behavior.

The `bug.php` file contains code that uses loose comparison to check if a value is equal to zero. This results in unexpected behavior for various data types.

The `bugSolution.php` file shows the corrected version using strict comparison (`===`) to avoid type coercion and produce the intended results.

This example highlights the importance of using strict comparison when type safety is crucial. 