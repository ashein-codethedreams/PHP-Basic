<?php
class Team
{
    private $name;
    private $teamMembers = [];
    function __construct($teamName)
    {
        $this->name = $teamName;
    }

    //static method
    static function create($teamName)
    {
        return new static($teamName);
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

$teamObj = Team::create("Manchester United");  //object creation with static method
echo $teamObj->getTeamName();

$teamObj->addTeamMember("Bruno");
$teamObj->addTeamMember("Garnocho");
$teamObj->addTeamMember("Dalot");
print_r($teamObj->getTeamMembers());
