<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Stijl je portfolio</h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <?php
                echo '<li><a href="?page=styling"><i class="icon-dashboard"></i>' . "Styling</a></li>";
              ?>
            </ol>
          </div>
        </div><!-- /.row -->
        <script src="content/jscolor.js"></script>
		<div class="kopjes" style="font-size: 15pt;"><p>Kies uw kleuren</p></div>
                <form method="POST" action="?page=submitcolor">
			<div id="verschillendekleuren" style="position:solid;">
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Header</p></div>
					<input name="header" type="hidden" id="color1" value="#<?php echo $HeaderColor_Base; ?>">
					<button class="jscolor {valueElement: 'color1'}" style="width:50px; height:50px;"></button>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Menu</p></div>
					<input name="menu" type="hidden" id="color2" value="#<?php echo $MenuColor_Base; ?>">
					<button class="jscolor {valueElement: 'color2'}" style="width:50px; height:50px;"></button>
				</div>
                                <div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Menu hover</p></div>
					<input name="menuhover" type="hidden" id="color5" value="#<?php echo $HoverActiveMenu_Base; ?>">
					<button class="jscolor {valueElement: 'color5'}" style="width:50px; height:50px;"></button> <br>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Achtergrond</p></div>
					<input name="background" type="hidden" id="color3" value="#<?php echo $BackgroundColor_Base; ?>">
					<button class="jscolor {valueElement: 'color3'}" style="width:50px; height:50px;"></button>
				</div>
                                <div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Textbox</p></div>
					<input name="textbox" type="hidden" id="color6" value="#<?php echo $TextboxColor_Base; ?>">
					<button class="jscolor {valueElement: 'color6'}" style="width:50px; height:50px;"></button> <br>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Text</p></div>
					<input name="text" type="hidden" id="color4" value="#<?php echo $TextColor_Base; ?>">
					<button class="jscolor {valueElement: 'color4'}" style="width:50px; height:50px;"></button> <br>
				</div>
			</div>
                        <div class="kopjes" style="font-size: 15pt; margin-top: 6%;"><p>Kies uw Font</p></div>
                        <select name="font">
                            <option value="Arial" style="font-family: Arial;">Arial</option>
                            <option value="Arial Black" style="font-family: Arial Black;">Arial Black</option>
                            <option value="Comic Sans MS" style="font-family: Comic Sans MS;">Comic Sans MS</option>
                            <option value="Courier New" style="font-family: Courier New;">Courier New</option>
                            <option value="Georgia" style="font-family: Georgia;">Georgia</option>
                            <option value="Impact" style="font-family: Impact;">Impact</option>
                            <option value="Lucida Console" style="font-family: Lucida Console;">Lucida Console</option>
                            <option value="Lucida Sans Unicode" style="font-family: Lucida Sans Unicode;">Lucida Sans Unicode</option>
                            <option value="Palatino Linotype" style="font-family: Palatino Linotype;">Palatino Linotype</option>
                            <option value="Tahoma" style="font-family: Tahoma;">Tahoma</option>
                            <option value="Times New Roman" style="font-family: Times New Roman;">Times New Roman</option>
                            <option value="Trebuchet MS" style="font-family: Trebuchet MS;">Trebuchet MS</option>
                            <option value="Verdana" style="font-family: Verdana;">Verdana</option>
                        </select>
                        <br>
			<input type="submit" value="Wijzigingen toepassen" class="margin" name="Submit">
		</form>
      </div><!-- /#page-wrapper -->