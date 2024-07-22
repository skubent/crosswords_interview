<?php declare(strict_types=1);

use PhpInterview\TaskDataProvider;

require('./vendor/autoload.php');

$dataProvider = new TaskDataProvider(2);

$testId = (int) ($argv[1] ?? 0);

if (($testId < 1) || $testId > $dataProvider->getTestsCount()) {
    echo "Usage: php solution2.php <testId>\n";
    echo "1 <= testId <= {$dataProvider->getTestsCount()}\n";
    exit;
}

$taskContent = $dataProvider->getTestData($testId);

$answer = $taskContent->lettersMatrix;
foreach ($answer as $row) {
    echo "{$row}\n";
}
