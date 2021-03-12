<?php

namespace Gm;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TE; 
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{ 
	
	public function onEnable() {
		$this->getLogger()->info(TE::GREEN . "GM enabled");
	}
	
	public function onDisable() {
		$this->getLogger()->info(TE::RED . "GM disabled"); 
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool { 
		if($cmd->getName() == "gm"){
			if(count($args) < 1){
				$sender->sendMessage(TE::RED . "§c§lFehler §r§8| §cBenutze: §b/gm help"); 
				return false;
			}
			switch($args[0]){
				case "0":
				$sender->setGamemode(0);
				$sender->sendMessage("&a§lGeschafft §r§8| Du bist nun im §eÜberlebens Modus");
				break;
				case "1":
				$sender->setGamemode(1);
				$sender->sendMessage("&a§lGeschafft §r§8| Du bist nun im §eKreativ Modus");
				break;
				case "2":
				$sender->setGamemode(2);
				$sender->sendMessage("&a§lGeschafft §r§8| Du bist nun im §eAbenteuer Modus");                         
				break;
				case "3":
				$sender->setGamemode(3);
				$sender->sendMessage("&a§lGeschafft §r§8| Du bist nun im §eZuschauer Modus");
				break;
			}
		}
		return false;
	}
}
	
			
