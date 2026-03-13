<?php
namespace App;
class Validator {
    public function getTomorrowDateJson(): string {
        return json_encode(["status" => "success", "date" => (new \DateTime("tomorrow"))->format("Y-m-d")]);
    }
}