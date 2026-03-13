<?php
use PHPUnit\Framework\TestCase;
use App\Validator;
class MesDatesTest extends TestCase {
    public function testCoverage() {
        $validator = new Validator();
        $this->assertJson($validator->getTomorrowDateJson());
    }
}