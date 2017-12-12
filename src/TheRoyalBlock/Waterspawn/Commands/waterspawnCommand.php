<?php 
namespace TheRoyalBlock\Waterspawn\Commands;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
class waterspawnCommand extends VanillaCommand {
    
	private $plugin;
	const PREFIX = C::GOLD . "[" . C::BLUE . "Waterspawn" . C::GOLD . "] ". C::RESET . C::WHITE;
 
	public function __construct(\TheRoyalBlock\Waterspawn\Main $plugin){
		$this->plugin = $plugin;
		parent::__construct('Waterspawn', 'The main waterspawn command', '/waterspawn <add|setspawn>');
	}
	public function execute(CommandSender $sender, $alias, array $args){
		if($sender instanceof Player){
			if($sender->isOp() === true){
				if($args[0] == 'add'){
          $level = $sender->getLevel();
          $main = \TheRoyalBlock\Waterspawn\Main::getInstance();
          $this->levels = $main::$levelsconfig;
          $this->levels->set(array(
          "world" => $level,
          ));
          $sender->sendMessage(self::PREFIX . "World " . $level . " has been added to the waterspawn list!");
        }elsif{$args[0] == 'setspawn'){
        //todo
			return true;
			} else {
				$sender->sendMessage(self::PREFIX . "You must be Op to run this Command!");
			return false;
			}
		} else {
			$sender->sendMessage(self::PREFIX . "Command must be run in-game!");
		return false;     
		}
	}
}
