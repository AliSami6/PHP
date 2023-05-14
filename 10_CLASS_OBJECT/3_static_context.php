<?php

class Staff
{
    public static $org_name;

    public static function getOrgName()
    {
        return "From Function " . self::$org_name;
    }
}

/*
Staff::$org_name = "PeopleNTech";
echo Staff::$org_name;
*/

/*
Staff::$org_name = "PeopleNTech";
$st1 = new Staff;
echo $st1::$org_name;
*/

/*
Staff::$org_name = "PeopleNTech";
$st1 = new Staff;
echo $st1->getOrgName();
*/

?>