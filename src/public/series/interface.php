<?php

use App\Interface\JobContract;


$jobContract = new JobContract('offer');

echo $jobContract->showContract();
echo '<br>';

$jobContract->changeContract('other offer');
echo $jobContract->showContract();



echo '<br>';
echo '<br>';
