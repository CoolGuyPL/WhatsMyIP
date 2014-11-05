<?php

namespace coolguy\whatsmyip;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class whatsmyip extends PluginBase{
	
	public function onEnable(){
		$this->getLogger()->info("Enabling WhatsMyIP...");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		switch($command->getName()) {
			case "wsip":
				if($sender instanceof Player){
					$sender->sendMessage($sender->getAddress());
					break;
				}
		}
	}
}