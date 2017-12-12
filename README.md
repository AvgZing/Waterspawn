# Waterspawn
Waterspawn plugin, as commissioned for $9.99

## Commands:
<br>
/waterspawn add (world name) 
<br>
using multi world plugin. Why? We only want it so the players get teleported back to the Spawn, if they are in the "Hub/lobby" not the minigame itself.<br>
<br>
If the player touches water, it teleports them back to the Hub Spawn point...<br>
<br>
<br>
## What I will do:
Waterspawn setspawn command, saves coords in config <br>
Waterspawn add worldname, saves worlds in another config <br>
To get the water touch working, use the following code: <br>
```php
	public function __construct(Player $player, Block $block, int $face, int $action = PlayerInteractEvent::RIGHT_CLICK_BLOCK){
```
