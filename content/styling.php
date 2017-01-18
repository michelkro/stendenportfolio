      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Stijl je portfolio</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
		<div class="kopjes" style="font-size: 15pt;"><p>Kies uw kleur</p></div>
                <form method="POST" action="submitcolor.php">
			<div id="verschillendekleuren">
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Header</p></div>
					<input name="header" type="hidden" id="color1" value="<?php echo $HeaderColor_Base; ?>">
					<button class="jscolor {valueElement: 'color1'}" style="width:50px; height:50px;"></button>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Menu</p></div>
					<input name="menu" type="hidden" id="color2" value="<?php echo $MenuColor_Base; ?>">
					<button class="jscolor {valueElement: 'color2'}" style="width:50px; height:50px;"></button>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Achtergrond</p></div>
					<input name="background" type="hidden" id="color3" value="<?php echo $BackgroundColor_Base; ?>">
					<button class="jscolor {valueElement: 'color3'}" style="width:50px; height:50px;"></button>
				</div>
				<div class="kleur">
					<div class="kopjes" style="font-size: 15pt;"><p>Text</p></div>
					<input name="text" type="hidden" id="color4" value="<?php echo $TextColor_Base; ?>">
					<button class="jscolor {valueElement: 'color4'}" style="width:50px; height:50px;"></button> <br>
				</div>	
			</div>
			<input type="submit" value="Kleuren Updaten" class="margin" name="Submit">
		</form>
      </div><!-- /#page-wrapper -->