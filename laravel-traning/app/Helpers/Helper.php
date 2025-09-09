<?php

namespace App\Helpers;

use Illuminate\Support\Arr;
use Illuminate\Support\Number;

class Helper {

	//currency formatter
	public static function renderCurrency(float $amount, $currency = 'INR'): string {
		return Number::currency($amount, in: $currency);
	}

	//array map function to format storable data
	public static function formatStorableData(array $storable): array {
		return Arr::map($storable, function ($value, $key) {
			if($key === 'name') {
				return ucfirst(strtolower($value));
			}
			return $value;
		});
	}

}