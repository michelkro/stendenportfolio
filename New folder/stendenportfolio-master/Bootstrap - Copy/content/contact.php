      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Contact opnemen met: <small>Variabele naam ID</small></h1>
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i> Hoofdpagina</a></li>
              <li class="active"><i class="icon-file-alt"></i> Contact</li>
            </ol>
          </div>
        </div><!-- /.row -->
		<form action="?page=contact_accept" method="post">
		<div class="form-group">
			<div id="voornaamrij">
				<label class="standardwith">* Naam: </label>
				<input type="text" name="naam" class="form-control2" required>
				<p class="help-block"></p>
			</div>
			<br><label class="standardwith">* Email: </label>
			<input type="text" name="email" class="form-control" required>
			<p class="help-block"></p>
			<div id="berichtrij">
				<br><label class="standardwith">* Bericht: </label>
                                <textarea class="form-control" name="bericht" required></textarea>
				<p class="help-block"></p>
			</div>
			<div id="verzendenrij">
                            <button type="submit" name="submit" class="btn btn-success" class="verzendenrij"><i class="fa fa-envelope"></i>  Verzenden </button>
			</div>
                        <br>
                        * Verplicht Veld
		</div>
        </form>
      </div><!-- /#page-wrapper -->