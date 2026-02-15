<?php

declare(strict_types=1);

namespace byteforge88\bossbar;

use pocketmine\plugin\PluginBase;

use byteforge88\bossbar\Bossbar;
use byteforge88\bossbar\BossbarAPI;
use byteforge88\bossbar\task\BossbarTask;

class Core extends PluginBase {
    
    protected static self $instance;
    
    public Bossbar $bar;
    
    public function onLoad() : void{
        self::$instance = $this;
    }
    
    public function onEnable() : void{
        $this->bar = new Bossbar();
        
        $this->saveDefaultConfig();
        $this->bar->setHealthPercent(BossbarAPI::getHealthBar());
        $this->bar->setColor(BossbarAPI::getColor());
        $this->getServer()->getPluginManager()->registerEvents(new EventListener, $this);
        $this->getScheduler()->scheduleRepeatingTask(new BossbarTask(), 20 * BossbarAPI::getChangeSpeed());
    }
    
    public static function getInstance() : self{
        return self::$instance;
    }
}