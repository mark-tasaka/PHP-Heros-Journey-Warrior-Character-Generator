<?php

//Bard

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,000";
        break;
        
        case "2":
            $xpNext = "4,000";
        break;
        
        case "3":
            $xpNext = "8,000";
        break;
        
        case "4":
            $xpNext = "16,000";
        break;
        
        case "5":
            $xpNext = "32,000";
        break;        

        case "6":
            $xpNext = "64,000";
        break;
                
        case "7":
            $xpNext = "128,000";
        break;
                
        case "8":
            $xpNext = "256,000";
        break;

        case "9":
            $xpNext = "512,000";
        break;
                
        case "10":
            $xpNext = "---";
        break;

        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>