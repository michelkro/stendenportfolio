      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <?php
            echo "<h1> Contact opnemen met: " . $row2['User_Name'] . "</h1>";
			?>
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <li class="active"><i class="icon-file-alt"></i> Contact</li>
            </ol>
          </div>
        </div><!-- /.row -->
		<form action="?page=contact_accept" method="post">
		<div class="form-group">
			<div id="voornaamrij">
				<label class="standardwith" style="color: #212121 !important">* Naam: </label>
				<input type="text" name="naam" class="form-control2" style="color: #212121 !important" required>
				<p class="help-block"></p>
			</div>
			<br><label class="standardwith" style="color: #212121 !important">* Email: </label>
			<input type="text" name="email" class="form-control" style="color: #212121 !important" required>
			<p class="help-block"></p>
			<div id="berichtrij">
				<br><label class="standardwith" style="color: #212121 !important">* Bericht: </label>
                                <textarea class="form-control" name="bericht" style="color: #212121 !important" required></textarea>
				<p class="help-block"></p>
			</div>
			<div id="verzendenrij">
                            <button type="submit" name="submit" class="btn btn-success" class="verzendenrij"><i class="fa fa-envelope"></i>  Verzenden </button>
			</div>
                        <br>
                        <p style="color: #212121 !important"> * Verplicht Veld </p>
		</div>
        </form>
      </div><!-- /#page-wrapper -->