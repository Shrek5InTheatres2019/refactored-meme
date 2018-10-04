<?php

namespace Main;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

        public function onLoad(){
                $this->getLogger()->info("onLoad() has been called!");
        }

        public function onEnable(){
                $this->getLogger()->info("onEnable() has been called!");
        }

        public function onDisable(){
                $this->getLogger()->info("onDisable() has been called!");
        }
        public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "example1":
                $this->getLogger()->info("command 1 has been run");
                return true;
            case "example2":
                $this->getLogger()->info("command 2 has been run");
                return true;
        }

        return false; //don't forget the return!
    }
}
