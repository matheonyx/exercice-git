<?php
use PHPUnit\Framework\TestCase;

// On force le chargement du fichier sans passer par l'autoloader qui bugue
require_once __DIR__ . '/../src/Validator.php'; 

use App\Validator;

class MesDatesTest extends TestCase {
    public function testGetTomorrowDateJson() {
        $validator = new Validator();
        $result = $validator->getTomorrowDateJson();
        
        $this->assertJson($result);
        $data = json_decode($result, true);
        
        $expected = (new \DateTime('tomorrow'))->format('Y-m-d');
        $this->assertEquals($expected, $data['date']);
    }
}