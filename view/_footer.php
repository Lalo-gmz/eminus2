<footer>
	
</footer>
<!-- SCRIPTS -->
<script type="text/javascript" src="assets/bootstrap4/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap4/js/custom.js"></script>

</div>
</body>
</html>

<?php 

	if (isset($_GET['alerta'])) {
			if ($_GET['alerta'] == 3) {
				echo '<script language="javascript">alert("Elemento Elimnado Correctamente");</script>'; 
			}

			if ($_GET['alerta'] == 4) {
				echo '<script language="javascript">alert("No se pudo Eliminar el Elemento");</script>'; 
			}
	}
?>