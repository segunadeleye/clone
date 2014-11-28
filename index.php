<?php

	echo $this->Html->link("Target", "action" => "index");
	echo $this->Html->link("Good", "controller" => "users", "action" => "view", $document["Document"]["id"]);

?>
