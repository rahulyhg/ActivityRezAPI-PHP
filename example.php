<?php
/**
 *	ActivityRez Web Booking Engine
 *	Activity PHP File
 *
 *	@author Rob Bertholf, Aaron Collins
 *	@package ActivityRez
 *	@subpackage Web Booking Engine
 */

// Call ActivityRez API Wrapper Class
require_once("ActivityRezAPIv1.class.php");

// Set your instance
$nonce_key = "ENTER YOUR NONCE HERE";
$subdomain = "demo"; // Select your API instance

// Load the ActivityRez API library
$actrez = new ActivityRezAPI($nonce_key, $subdomain);


   /*
	* Lets try it out
   */
	echo "<h3>Data Returned from \$actrez->GetActivities($args) call</h3>\n";

	// Define Arguments
	$args = array(
	   /*
		*    'data[des]' => "", // (int) or (string) optional, If an integer is passed it will use that as the location ID, if a string is passed it assumes that is the destination. When using destination searching it will also return all child destinations.
		*    'data[s]' => "", // (string) Optional, keyword search string, used to filter activites that contain this exact string.
		*    'data[tag]' => "", // (string) Optional, Default: none, a specific tag to look for that is stored on activities.
		*    'data[moods]' => "", // (string) Optional, Default: none, a specific mood to filter for.
		*    'data[catgeory]' => "", // (string) Optional, Default: none, a specific category to filter for.
		*    'data[count]' => 20, // (int) optional, Default 20: This is used to control pagination features, it tells the bakend how many results at a time to return. 0 to return all results
		*    'data[minPrice]' => 0, // (float) optional, Default: 0, Minimum price of an activity to filter activites by.
		*    'data[maxPrice]' => 9999999, // (float) optional, Default: 9999999, Maximum price of an activity to filter activites by.
		*    'data[page]' => 1, // (int) optional, Default:1 Which page of the pagination to return
		*    'data[i18n]' => "", // (string) optional, defaults to 'en', This used to specify which language you want activities back in.
		*    'data[moods]' => "", // Default: none, a specific mood to filter for.
		*    'data[sort]' => "title", // (string) optional, Default: title, This is the field to sort results by, curently suports title, price
		*    'data[sortDir]' => "asc", // (string) optional, Default: asc, This is the direction to sort the results by, it can be either asc or desc
	   */
	   'data[showInWB]' => 0000 // (int) required (if coming from a web booker), The id number of the web booker you configured the activities to appear in. This is how activityrez supports it's agents having multiple POS or webbooker systems
		);
	$result = $actrez->GetActivities($args);

echo "<pre>\n";
print_r($result);
echo "</pre>\n";