<?php
namespace App;

class Validator {
    public function getTomorrowDateJson(): string {
        $tomorrow = new \DateTime('tomorrow');
        return json_encode([
            'status' => 'success',
            'date'   => $tomorrow->format('Y-m-d')
        ]);
    }
}
// Rendu final pour validation