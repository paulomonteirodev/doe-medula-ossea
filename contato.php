<?php
	$cabecalho_title = "Contato"; 
	include("cabecalho.php");
	
	$msg = 0;
	@$msg = $_GET['msg'];
	@$nome = $_GET['nome'];
?>
    <!-- CONTEUDO -->
    <div class="conteudo-full">
        <section class="layout">
            <div class="contato">
                <h1>CONTATO</h1>
                <?php if($msg == "enviado"): ?>
                	<?php echo "<strong><p>$nome, obrigado por entrar em contato.</p></strong>"?>
                <?php else: ?>
                <form action="php/enviar.php" method="POST">
                <table>
                  <tr>
                    <td>
                      	<label for="nome">Nome:</label>                      
                    </td>
                    <td>
                    	<input type="text" id="nome" placeholder="João Pedro" name="nome" required autofocus="autofocus"/>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <label for="assunto">Assunto:</label>
                    </td>                    
                    <td>
                      <input type="text" id="assunto" placeholder="Doação de Medula" name="assunto" required />
                    </td>
                    <td></td>
                  </tr>
                  
                  <tr>
                    <td>
                      <label for="email">Email:</label>
                    </td>
                    <td>
                      <input type="email" placeholder="exemplo@mail.com" id="email" name="email" required />
                    </td>
                    <td></td>
                  </tr>
                  
                  <tr>
                    <td>
                      <label for="confirmaemail">Confirmar Email:</label>
                    </td>
                    <td>
                      <input type="email" placeholder="exemplo@mail.com" id="confirmaemail" name="confirmaemail" required />
                    </td>
                    <td></td>
                  </tr>
                  
                  <tr>
                  	<td>
                      <label for="mensagem">Mensagem:</label>
                    </td>
                    <td>
                      <textarea rows="5" id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>
                    </td>
                  </tr>
                  
                  <tr>
                  	<td></td>
                    <td><input class="botao" type="submit" value="Enviar" /></td>
                  </tr>
                  </table>
              </form>
              <?php endif; ?>
            </div>
        </section>
    </div>
    <!-- FIM CONTEUDO -->

	<?php include("rodape.php") ?>
</body>
</html>