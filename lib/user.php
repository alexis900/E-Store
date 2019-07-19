<?php
include_once 'db.php';
function checkPermission($role_id){
  $db = MysqliDb::getInstance();
  $db->join("roles_permissions rp", "r.role_id=rp.role_id", "INNER");
  $db->where("r.role_id", $role_id);
  $permissions = $db->get("roles r");
  $a = array();
  foreach ($permissions as $perm) {
      array_push($a, $perm['perm_id'], );
  }
  return $a;
}

function isSession(){
    $session = false;
    if (isset($_SESSION['user']) & isset($_SESSION['role_id'])) {
        $session = true;
    }
    return $session;
}

function admPanel($locationTrue, $locationFalse){
    if (isset($_SESSION['user']) & isset($_SESSION['role_id'])) {
        if (in_array(5, checkPermission($_SESSION['role_id']))) {
            header($locationTrue);
        } else {
            header($locationFalse);
        }
    } else {
        header($locationFalse);
    }
}
