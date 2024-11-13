<?php

# Default settings
$PORTAL_mode=0; // 0 = Production mode, 1 = Normal Debug, 2 = Extended Debug (this is a security risk, so use sparingly!)
$PORTAL_secure=0; // 1 = Enable forced HTTPS, 0 = Disable forced HTTPS; If you aren't running on standard SSL ports this probably won't work!!!
$PORTAL_logfile='debug.txt'; // Log file to write debug output to, does nothing otherwise
$PORTAL_userlevel=5; // Minimum required ViciDial user level to enable dynamic authentication
$PORTAL_topbar=1; // Whether to display the topbar with image or not
$PORTAL_redirecturl='X'; // X = Disabled, otherwise set to a url like https://server.ip/agc/vicidial.php
$PORTAL_redirectadmin='https://server.ip/vicidial/admin.php'; // Only matters if the above is not X and the phone login is set to 'admin' on the user record
$PORTAL_redirectsecs=60; // How long to count down before redirecting in seconds
$PORTAL_redirectlogin=1; // 1 = Provide User/Phone Login, 0 = Do not provide User/Phone login


# Default ViciDial conf file location
$AST_conffile="/etc/astguiclient.conf"; // If this isn't present the defaults are used from dbconnect.inc.php

?>
