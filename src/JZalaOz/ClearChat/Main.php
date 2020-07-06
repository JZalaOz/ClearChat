<?php

declare(strict_types=1);

namespace JZalaOz\ClearChat;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        if($cmd->getName() === "cc"||$cmd->getName() === "clearchat") {
        if($sender->hasPermission("cc.cmd")){
        if(!$sender instanceof player){$sender->sendMessage("§4This command can only be used in game!"); return true;}

$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§b");
$this->getServer()->broadcastMessage("§4Chat has been cleared");
$this->getServer()->broadcastMessage("§bBy§r: ".$sender->getName());

        } else {
            $sender->sendMessage("§4You do not have permission to use this command!");
            return false;
        }
        } 
        return true;
    }

}
