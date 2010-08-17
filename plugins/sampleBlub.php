<?php
/**
 * Sample plugin for the plugin system
 *
 * @author:  Martin Lantzsch <martin@linux-doku.de>
 * @website: http://linux-doku.de
 * @licence: GPL
 * @version: 0.1
 */

class sampleBlub {
	public function foo($test) {
		echo "Hey, you have called me!<br>";
		echo 'I can say you the Value of $test: "'.$test.'"<br>';
	}
}
