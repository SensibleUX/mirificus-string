<?php

/**
 * @package Mirificus
 */
namespace Mirificus;

/**
 * Contains functions to manipulate strings.
 * @package Mirificus\String
 */
class String {

	/**
	 * Returns the first character of a given string, or null if the given
	 * string is null.
	 * @param string $strString The string to retrieve the first character of.
	 * @return string|null The first character, or null.
	 * @static
	 */
	public final static function FirstCharacter($strString) {
		if (strlen($strString) > 0) {
			return substr($strString, 0 , 1);
		} else {
			return null;
		}
	}

	/**
	 * Returns the last character of a given string, or null if the given
	 * string is null.
	 * @param string $strString The string to retrieve the last character of.
	 * @return string|null The last character, or null.
	 * @static
	 */
	public final static function LastCharacter($strString) {
		$intLength = strlen($strString);
		if ($intLength > 0) {
			return substr($strString, $intLength - 1);
		} else {
			return null;
		}
	}

	/**
	 * Truncates the string to a given length, adding ellipsis if needed.
	 * @param string $strString The string to truncate.
	 * @param integer $intMaxLength The maximum possible length of the string to return (including ellipsis).
	 * @return string The full string or the truncated string with ellipsis.
	 * @static
	 */
	public final static function Truncate($strText, $intMaxLength) {
		if (strlen($strText) > $intMaxLength) {
			return substr($strText, 0, $intMaxLength - 3) . "...";
		} else {
			return $strText;
		}
	}
}