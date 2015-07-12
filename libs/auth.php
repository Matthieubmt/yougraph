<?php

/*__________________________________________________________________________|
|____INTHEKEY Advanced System ____________________________________________________|
|____Copyright (c) 2013-2014 By SH3LIOS , All Rights Reserved.______________|
*/

$Auth = new Auth();

class Auth {

    function islog() {
        if (isset($_SESSION['Auth'])
            || isset($_SESSION['Auth']['id'])
            || isset($_SESSION['Auth']['username'])
            || isset($_SESSION['Auth']['password'])) {
                return true;
        }else{
            return false;
        }
    }

    function is_admin() {
        if (isset($_SESSION['Auth'])) {
            if($_SESSION['Auth']['rank'] == '3') {
                return true;
            }else{
                return false;
            }
        }
    }

    function is_moderator() {
        if (isset($_SESSION['Auth'])) {
            if($_SESSION['Auth']['rank'] == '2') {
                return true;
            }else{
                return false;
            }
        }
    }

    function is_vip() {
        if (isset($_SESSION['Auth'])) {
            if($_SESSION['Auth']['rank'] == 'VIP') {
                return true;
            }else{
                return false;
            }
        }
    }

}

?>