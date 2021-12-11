<?php

namespace RoMo\PlayerExhaustDisable;

use pocketmine\event\EventPriority;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class PlayerExhaustDisable extends PluginBase{
    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvent(PlayerExhaustEvent::class, function(PlayerExhaustEvent $event){
            $event->cancel();
        },EventPriority::NORMAL, $this);
    }
}