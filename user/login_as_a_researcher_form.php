<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2008 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

//Edited by Thomas Johnson III

// Also edited by Carlos Redondo
require_once("../inc/db.inc");
require_once("../inc/util.inc");
require_once("../inc/account.inc");
<<<<<<< HEAD
/*
define("LDAP_HOST", "ldap.tacc.utexas.edu");
define("LDAP_BASE_DN", "uid=ldapbind,ou=People,dc=tacc,dc=utexas,dc=edu");
*/
=======
// Connects to LDAP
require_once("/root/project/html/project/project.inc");
require_once("../inc/ldap.inc");


>>>>>>> 04b63e6f25ac279444e9e57304dbb7223184ab3f
page_head(null, null, null, null,  null, "Log In");




// Redirects to TACC's website 

echo "<a data-toggle=\"tooltip\"  style=\"margin-left: 36%;font-size: 24px;border-bottom:1px dotted #000;text-decoration: none;\" title=\"All active users of TACC resources are eligible to run jobs through the TACC-2-BOINC infrastructure and qualify as researchers.\">
     <font size=+3>".tra("Don't have an account?")."</font></a>
  <div style=\"margin-left: 36%;margin-top: 10px;\"><a href=\"https://portal.tacc.utexas.edu/home?p_p_id=58&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&saveLastPath=0&_58_struts_action=%2Flogin%2Flogin\" class=\"btn btn-success\">Sign Up through TACC portal</a>
  </div>";


/*
echo '<br></br';
echo "<a data-toggle=\"tooltip\"  style=\"margin-left: 36%;font-size: 24px;border-bottom:1px dotted #000;text-decoration: none;\" title=\"All active users of TACC resources are eligible to run jobs through the TACC-2-BOINC infrastructure and qualify as researchers.\">Log In as a Researcher</a>
	<div style=\"margin-left: 36%;margin-top: 10px;\"><a href=\"https://portal.tacc.utexas.edu/home?p_p_id=58&p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view&saveLastPath=0&_58_struts_action=%2Flogin%2Flogin\" class=\"btn btn-success\">Log In</a></div>";
*/
//End of Gerald Joshua's edit (From Joshua's edit to Log In page)


echo "
    <script type=\"text/javascript\">
        document.f.email_addr.focus();
    </script>
";

page_tail();
?>
