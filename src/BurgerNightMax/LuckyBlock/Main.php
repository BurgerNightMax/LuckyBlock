<?php

namespace BurgerNightMax\LuckyBlock;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->eco = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
	}
	
public function onTouch(PlayerInteractEvent $event): void{
        $player = $event->getPlayer();
        $block = $event->getBlock();
        $item = $event->getItem();
        $amount = $player->getInventory()->getItemInHand()->getCount();
        $x = $block->x;
        $y = $block->y;
        $z = $block->z;
        $level = $block->getLevel()->getName();
        if(214 == $block->getId()){
            $this->OpenMenu($player);
      } 
} 
	public function OpenMenu(Player $sender){
	$player = $event->getPlayer();
	$formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $formapi->createSimpleForm(function (Player $sender, ?int $data = null){
		$result = $data;
		if($result === null){
			return;
		    }
			switch($result){
				case 0:
				$cmd = "customenchant enchant Tank 1 $player->getName() on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 1:
				$cmd = "warp Arene on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 2:
				$cmd = "warp faction on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 3:
				$cmd = "warp minage on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 4:
				$cmd = "sort on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 5:
				$cmd = "job on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 6:
				$cmd = "bank on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 7:
				$cmd = "job on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;
				case 8:
				$cmd = "job on";
				$this->getServer()->getCommandMap()->dispatch($sender, $cmd);
				break;

			}
		});
		$form->setTitle("§l§6Table D'Enchante Custom");
		$form->setContent("bienvenue dans les enchant custom !");
		$form->addButton("§3Tank\n§a456xp");
		$form->addButton("§3Grappling\n§a456xp");
   		$form->addButton("§3Smelting\n§a470xp");
$form->addButton("§3Missile\n§a500xp");
$form->addButton("§3Farmer\n§a480xp");
$form->addButton("§3Telepathy\n§a243xp");
$form->addButton("§3JetPack\n§a900xp");
$form->addButton("§3Explosive\n§a437xp");
$form->addButton("§3Paralyse\n§a800xp");
		$form->sendToPlayer($sender);
			return $form;
	}
}
