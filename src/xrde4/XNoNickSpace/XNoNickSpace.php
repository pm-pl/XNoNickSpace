<?php

/**
 * GNU LESSER GENERAL PUBLIC LICENSE v3.0
 
██╗░░██╗██████╗░██████╗░███████╗██╗░░░██╗
╚██╗██╔╝██╔══██╗██╔══██╗██╔════╝██║░░░██║
░╚███╔╝░██████╔╝██║░░██║█████╗░░╚██╗░██╔╝
░██╔██╗░██╔══██╗██║░░██║██╔══╝░░░╚████╔╝░
██╔╝╚██╗██║░░██║██████╔╝███████╗░░╚██╔╝░░
╚═╝░░╚═╝╚═╝░░╚═╝╚═════╝░╚══════╝░░░╚═╝░░░
 
 If you find my plugin helpful, could you please consider giving it a star on my profile? 
 Your support means a lot to me! 🌟 Thank you! (https://github.com/xrde4)"
 */
 
declare(strict_types=1);
 
namespace xrde4\XNoNickSpace;

use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerPreLoginEvent;

class XNoNickSpace extends PluginBase implements Listener
{
	public Config $config;
	
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML,[
		    "language" => "ENG",
			"kick_ua" => "§f§l§o[§c!§f] §8§l§o§fX§eN²S§r§8§7 :: §f🌟 Вітаємо у нашій чарівній реальності! \n🌈 Для підтримки гармонійної спільноти, ми §cневимушено просимо утримуватися §fвід використання імен користувачів з пробілами чи прихованими смайликами ❌. \nСтворімо простір, де всі зможуть разом насолоджуватися цим досвідом! 🚀",
			"kick" => "§f§l§o[§c!§f] §8§l§o§fX§eN²S§r§8§7 :: §f🌟 Welcome to our enchanting realm!\n🌈 To foster a harmonious community, we §ckindly request §fthat usernames without spaces and concealed emoticons ❌ be embraced. \nLet's craft a space where all can revel in the experience together! 🚀.",
			"type_check" => "Expert"]);
    }
	
	
		public function onLogin(PlayerPreLoginEvent $event){
		$player = $event->getPlayerInfo();
		$nick = strtolower($player->getUsername());
		if($this->config->get("type_check") == "Easy"){
			if (substr($nick, 0, 1) === 'ㅤ' or substr($nick, 0, 1) === ' ') {
            $event->setKickFlag(1,($this->config->get("language") == "ENG") ? $this->config->get("kick") : $this->config->get("kick_ua"), null);
		}
	    }elseif($this->config->get("type_check") == "Intermediate"){
			if (substr($nick, -1) === ' ' or substr($nick, -1) === 'ㅤ' ) {
            $event->setKickFlag(1,($this->config->get("language") == "ENG") ? $this->config->get("kick") : $this->config->get("kick_ua"), null);
		}				
	    }elseif($this->config->get("type_check") == "Advanced"){
			if (substr($nick, -1) === ' ' or substr($nick, -1) === 'ㅤ' or substr($nick, 0, 1) === 'ㅤ' or substr($nick, 0, 1) === ' ') {
            $event->setKickFlag(1,($this->config->get("language") == "ENG") ? $this->config->get("kick") : $this->config->get("kick_ua"), null);
		}			
	    }elseif($this->config->get("type_check") == "Expert"){
			if (preg_match('/\s|[\x00-\x1F\x7F]|ㅤ/', $nick)) {
            $event->setKickFlag(1,($this->config->get("language") == "ENG") ? $this->config->get("kick") : $this->config->get("kick_ua"), null);
		}	
        }
		}
}
	
