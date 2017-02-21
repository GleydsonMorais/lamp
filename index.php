<?php require("DAO/sqlScroll.php"); ?>

<?php require("head.php"); ?>

		<div class="container">

			<!-- Main component for a primary marketing message or call to action -->
			<div class="jumbotron">

				<h1>Navbar example</h1>

				<p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>

				<p>To see the difference between static and fixed top navbars, just scroll.</p>

				<p><a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a></p>
			</div>
		</div> <!-- /container -->

		<div class="container containerScroll">

			<!-- LOOP SCROLL INFINITO -->
			<?php while ($row = mysqli_fetch_array($query)): ?>

				<div class="itemScroll col-md-6 col-md-offset-3 img-thumbnail" style="margin-bottom: 5px;" id="itemScroll-<?php echo $row['id']?>">
					
					<h4>
						<span class="tituloScroll"><?php echo $row['titulo']?></span>
					</h4>

					<!--Descição da Imagem-->
					<span class="descricaoScroll"><?php echo $row['descricao']?></span>		

					<img class="img-responsive img-rounded" src="<?php echo $row['image']?>">

					<!--Aplicativo-->
					<kbd><span class="appScroll"><?php echo $row['app']?></span></kbd>

					<!--Sistema Operacional-->
					<kbd><span class="soScroll"><?php echo $row['so']?></span></kbd>

					<!--Autor-->
					<kbd><span class="autorScroll"><?php echo $row['authorName']?></span></kbd>
				</div>
			<?php endwhile?>

			<!--page navigation-->
			<?php if (isset($next)): ?>
			<div class="navScroll">
				<a href='index.php?p=<?php echo $next?>'>Next</a>
			</div>
			<?php endif?>
		</div><!--.wrap-->

<?php require("footer.php") ?>