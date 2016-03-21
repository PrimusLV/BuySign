<?php

namespace driesboy;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\tile\Sign;
use pocketmine\level\Level;

use onebone\economyapi\EconomyAPI;

public function onEnable(){
		$this->getServer()->getLogger()->info(TextFormat::BLUE . "BuySign Has Been Enabled.");
		$this->getServer()->getLogger()->info(TextFormat::BLUE . "By: Driesboy. http://github.com/Driesboy");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

public function onPlayerTouch(PlayerInteractEvent $event){
		$player = $event->getPlayer();
		$b = $event->getBlock();
		$name = $event->getPlayer()->getName();
		$name = strtolower($name);
		if($b->getID() == 63 || $b->getID() == 68){ 
			$tile = $player->getLevel()->getTile($b);
			if(!($tile instanceof Sign)){
				return;
			}
			$sign = $sign->getText();
			if(TextFormat::clean($sign[0]) === '[for sale: $ 500]'){
			$tile->setText("{$name}");
			}
