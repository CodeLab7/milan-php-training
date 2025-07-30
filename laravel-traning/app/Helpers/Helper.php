<?php

namespace App\Helpers;

use Illuminate\Support\Number;

class Helper {

	//currency formatter
	public static function renderCurrency(float $amount, $currency = 'INR'): string {
		return Number::currency($amount, in: $currency);
	}

	//array map function to format storable data
	public static function formatStorableData(array $storable): array {
		foreach($storable as $key => $value) {
			if(in_array($key, ['name'])) {
				$storable[$key] = ucfirst(strtolower($value));
			}
		}
		return $storable;
	}

}