<?php
/**
Copyright 2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

class PreReservationExampleValidation implements IReservationValidationService
{
	/**
	 * @var IReservationValidationService
	 */
	private $serviceToDecorate;

	public function __construct(IReservationValidationService $serviceToDecorate)
	{
		$this->serviceToDecorate = $serviceToDecorate;
	}

	/**
	 * @param ReservationSeries|ExistingReservationSeries $series
	 * @return IReservationValidationResult
	 */
	public function Validate($series)
	{
		$result = $this->serviceToDecorate->Validate($series);

		// don't bother validating this rule if others have failed
		if (!$result->CanBeSaved())
		{
			return $result;
		}

		return $this->EvaluateCustomRule($series);
	}

	/**
	 * @param ReservationSeries $series
	 * @return bool
	 */
	private function EvaluateCustomRule($series)
	{
		// make your custom checks here
		$configFile = Configuration::Instance()->File('PreReservationExample');
		$maxValue = $configFile->GetKey('custom.attribute.max.value');
		$customAttributeId = $configFile->GetKey('custom.attribute.id');

		$attributeValue = $series->GetAttributeValue($customAttributeId);

		$isValid = $attributeValue <= $maxValue;

		if ($isValid)
		{
			return new ReservationValidationResult();
		}

		return new ReservationValidationResult(false, "Value of custom attribute cannot be greater than $maxValue");
	}
}

?>