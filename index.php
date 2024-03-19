<?php
class Team
{
    private $name;
    function __construct($teamName)
    {
        $this->name = $teamName;
    }
    function getTeamName()
    {
        return $this->name;
    }
}

$teamObj = new Team("Manchester United");
echo $teamObj->getTeamName();
