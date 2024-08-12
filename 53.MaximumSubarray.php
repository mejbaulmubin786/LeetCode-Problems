<?php
class Solution {
    function maxSubArray($nums) {
        $current_sum = $nums[0]; 
        $max_sum = $nums[0]; 

        for ($i = 1; $i < count($nums); $i++) {
            $current_sum = max($nums[$i], $current_sum + $nums[$i]);
            $max_sum = max($max_sum, $current_sum);
        }

        return $max_sum; 
    }
}
