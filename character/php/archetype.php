<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 8;
    $enduranceLevel2 = 8 + rand(1, 8);
    $enduranceLevel3 = 8 + rand(1, 8) + rand(1, 8);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 3;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 6;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 9;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 12;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 15;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 18;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 21;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}


function getAttackBonus($level)
{
    $bonus = 1;

    if($level == 3)
    {
        $bonus = 2;
    }    
    else if($level >= 4 && $level <= 5)
    {
        $bonus = 3;
    }
    else if($level == 6)
    {
        $bonus = 4;
    }
    else if($level >= 7 && $level <= 8)
    {
        $bonus = 5;
    }
    else if($level == 9)
    {
        $bonus = 6;
    }
    else if($level == 10)
    {
        $bonus = 7;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "<span class='archetypeBold'>+5% bonus to Experience Points</span>";
    }

    return $bonus;
}
function warriorMessage()
{
    $message = "<span class='archetypeBold'>A Greater Valour Against Lesser Foes</span><br/><br/><span class='archetypeBold'>Shattered Shields:</span> Can avoid damage on a successful hit by permanently reducing the shield's defense bonus by 1.<br/><br/><span class='archetypeBold'>Terrible Blows:</span> Damage increases by 1 die when either a two-handed weapon or an one-handed weapon is wielded by two hands.<br/><br/><span class='archetypeBold'>Weapon Specialization</span><br/><br/>";

    return $message;
}

function rallyCompany($level)
{
    $message = "";

    if($level >= 4)
    {
        $message = "<span class='archetypeBold'>Rally the Company</span><br/><br/>";
    }

    return $message;

}

function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws made to avoid a Grevious Blow and to resist poisons.<br/><br/>";

    return $message;
}



?>