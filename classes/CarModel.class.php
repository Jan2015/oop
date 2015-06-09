<?php
class CarModel {
	var $modelID;
	var $carModel;

	function getObjectValues() {
		$objectValues = [ 'carModel' ];

		return $objectValues;
	}

	function getValues( $wantedValues, $restArray ) {
		$db     = new Datenbank();
		$dbh    = $db->connect();
		$result = $db->select( $dbh );
		$values = new FilterArray();
		$values = $values->filter( $result, $restArray );

		return [ 'values' => $values, 'wantedValues' => $wantedValues ];
	}
}