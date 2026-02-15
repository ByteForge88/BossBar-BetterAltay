<?php

declare(strict_types=1);

namespace byteforge88\bossbar;

use byteforge88\bossbar\Bossbar;

class BossbarAPI {
    
    public static function getRandomTitle() : string{
        $titles = Core::getInstance()->getConfig()->get("titles", []);
        $random_array = array_rand($titles);
        
        return $titles[$random_array];
    }
    
    public static function getHealthBar() : float{
        $hp = Core::getInstance()->getConfig()->get("percentage");
        
        return $hp;
    }
    
    public static function getChangeSpeed() : int{
        $speed = Core::getInstance()->getConfig()->get("change-speed");
        
        return $speed;
    }
    
    public static function getColor() : int{
        $color = Core::getInstance()->getConfig()->get("color");
        $color_id = Bossbar::getColorByName($color);
        
        return $color_id;
    }
}