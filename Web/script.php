<?php
	if (isset($_POST["Menu"])):?>
		<?php if($_POST["Menu"] == "Closed_Menu"):?>
			<button id = "instr" name = "Menu" value = "Opened_Menu"><i class="fas fa-bars"></i>Menu</button></li>
			<li><button id = "instr"><i class="fas fa-pen"></i>Edit</button></li>
			<li><button id = "instr"><i class="fas fa-save"></i>Save</button></li>
			<li><button id = "instr"><i class="fas fa-trash"></i>Edit</button></li>
		<?php elseif($_POST["Menu"] == "Opened_Menu"):?>
			<li><button id = "instr" name = "Menu" value = "Closed_Menu"><i class="fas fa-bars"></i>Menu</button></li>
		<?php endif?>
<?php else:?>
	<button id = "instr" name = "Menu" value = "Closed_Menu"><i class="fas fa-bars"></i>Menu</button>
<?php endif?>
