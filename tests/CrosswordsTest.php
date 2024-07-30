<?php declare(strict_types=1);

namespace PhpInterview\Tests;

use PHPUnit\Framework\TestCase;

class CrosswordsTest extends TestCase {
    /**
     * @dataProvider task1DataProvider()
     */
    public function testFirstExample(int $i, string $message): void {
        $expectedOutput = file_get_contents(__DIR__ . "/data/task1/test$i");
        exec("php solution1.php {$i}", $output);
        $result = implode("\n", $output) . "\n";
        self::assertSame($expectedOutput, $result, $message);
    }

    public static function task1DataProvider(): array {
        return [
            ['i' => 1, 'message' => 'README explains'],
            ['i' => 2, 'message' => 'There can be more than one word'],
            ['i' => 3, 'message' => 'Lets test all directions'],
            ['i' => 4, 'message' => 'No one word from list, whats a crap'],
            ['i' => 5, 'message' => 'Really large one'],
            ['i' => 6, 'message' => 'Word "words" means not only words'],
        ];
    }

    /**
     * @dataProvider task2DataProvider()
     */
    public function testSecondExample(int $i, string $message): void {
        $expectedOutput = file_get_contents(__DIR__ . "/data/task2/test$i");
        exec("php solution2.php {$i}", $output);
        $result = implode("\n", $output);
        self::assertSame($expectedOutput, $result, $message);
    }

    public static function task2DataProvider(): array {
        return [
            ['i' => 1, 'message' => 'Only right and down direction allowed now'],
            ['i' => 2, 'message' => 'Vader has no power here he didnt connected to anything'],
            ['i' => 3, 'message' => 'Vader now connected with his arm. But left direction isnt allowed.'],
            ['i' => 4, 'message' => 'Many words, but zero connections'],
            ['i' => 5, 'message' => 'Only one WILL connected'],
        ];
    }
}
