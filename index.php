<?php

	echo $this->Html->link("Target", "action" => "index");
	echo $this->Html->link("Good", "controller" => "users", "action" => "view", $document["Document"]["id"]);
	foreach ($documents as $document) {
		echo "Hurray";
	}

?>

<?php ?>

<script>
	$("faqs a").click(function(){
		var faqId = $(this).attr("href");
		$("body").animate({scrollTop: $(faqId).offset().top}, "slow");
	});
</script> 
