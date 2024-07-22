<?php declare(strict_types=1);

namespace PhpInterview;

class TaskDataProvider {
    private int $taskId;

    public function __construct(int $taskId) {
        $this->taskId = $taskId;
    }

    public function getTestsCount(): int {
        return $this->taskId == 1 ? 6 : 5;
    }

    public function getTestData(int $i): TaskContent {
        $answer   = new TaskContent();
        $fileName = __DIR__ . '/../data/task' . $this->taskId . '/test' . $i;
        if (!file_exists($fileName)) {
            throw new \Exception("Cant read file " . $fileName);
        }
        $content = file($fileName);
        $puzzleRows = $content[0];
        for ($i = 1; $i <= $puzzleRows; $i++) {
            $answer->lettersMatrix[] = trim($content[$i]);
        }
        $answer->commaSeparatedWordList = $content[$puzzleRows + 1];
        return $answer;
    }
}
