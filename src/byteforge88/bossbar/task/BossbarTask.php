<?php

declare(strict_types=1);

namespace byteforge88\bossbar\task;

use pocketmine\scheduler\Task;

use pocketmine\Server;

use byteforge88\bossbar\Core;
use byteforge88\bossbar\BossbarAPI;

class BossBarTask extends Task {
    
    public function onRun(int $currentTick) : void{
        Core::getInstance()->bar->setTitle(BossbarAPI::getRandomTitle());
    }
}