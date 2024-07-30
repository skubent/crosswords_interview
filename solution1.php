<?php declare(strict_types=1);

use PhpInterview\TaskDataProvider;

require('./vendor/autoload.php');

$dataProvider = new TaskDataProvider(1);

$testId = (int) ($argv[1] ?? 0);

if (($testId < 1) || $testId > $dataProvider->getTestsCount()) {
    echo "Usage: php solution1.php <testId>\n";
    echo "1 <= testId <= {$dataProvider->getTestsCount()}\n";
    exit;
}

$taskContent = $dataProvider->getTestData($testId);

foreach ($taskContent->lettersMatrix as $row) {
    echo "{$row}\n";
}
