<?php

declare(strict_types=1);

namespace byteforge88\bossbar;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class EventListener implements Listener {
    
    public function onJoin(PlayerJoinEvent $event) : void{
        Core::getInstance()->bar->showTo($event->getPlayer());
    }
    
    public function onQuit(PlayerQuitEvent $event) : void{
        Core::getInstance()->bar->hideFrom($event->getPlayer());
    }
}