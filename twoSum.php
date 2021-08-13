<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two sum</title>
</head>
<body>
    <?php
        class Solution {
            function twoSum($nums, $target) {
                $solArr = [];
                for ($x = 0; $x < count($nums); $x++) {
                    $difference = $target - $nums[$x];
                    for ($y = 0; $y < count($nums); $y++) {
                        if ($difference == $nums[$y] && $x != $y) {
                            array_push($solArr, $x, $y);
                            print_r($solArr);
                            die();
                        }
                    }
                }
            }
        }

        $nums = array(5, 8, 9, 3, 4, 11, 7);
        $target = 18;

        $solution = new Solution;
        $solution -> twoSum($nums, $target);

    ?>
</body>
</html>