	<div class="container">
			<form class="form-signin" action="read-stmt.php" method="get" data-toggle="validator" role="form">
					<div class="box">
						<div class="container-int">
							<h5 class="pb-3">Bem vindo!</h3>
							
							  <div class="col-form-label-lg">
								<label for="loginUser">Login</label>
								<input type="text" class="form-control" id="loginUser" aria-describedby="Login" placeholder="Insira seu Login" name="loginUser" data-error="Por favor, informe um login." required>
							  </div>
							  <div class="col-form-label-lg">
								<label for="senhaUser">Senha</label>
								<input type="password" class="form-control" id="senhaUser" placeholder="Insira sua senha" name="senhaUser" data-error="Por favor, informe uma senha." required>
							  </div>
							  <button type="submit" class="btn-primary">Entrar</button>
							  <div class="help-block with-errors"></div>
						</div>	  
					</div>
		</form>
	</div>