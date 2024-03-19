<?php
class Team
{
    private $name;
    private $teamMembers = [];
    function __construct($teamName)
    {
        $this->name = $teamName;
    }
    function getTeamName()
    {
        return $this->name;
    }
    function addTeamMember($member)
    {
        $this->teamMembers[] = $member;
    }
    function getTeamMembers()
    {
        return $this->teamMembers;
    }
}

$teamObj = new Team("Manchester United");
echo $teamObj->getTeamName();

$teamObj->addTeamMember("Bruno");
$teamObj->addTeamMember("Garnocho");
$teamObj->addTeamMember("Dalot");
print_r($teamObj->getTeamMembers());
