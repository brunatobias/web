<center>
<div class="input-group">

<fieldset>

<!-- Form Name -->
<legend>Inserir</legend>
<form name="formCadastro" id="formCadastro" class="form-horizontal" enctype="multipart/form-data" method="POST" action="http://localhost/pokemon/index.php/Cadastro/inserir">
            <label class="input-group">Nome do Pokemon:</label>
                          <div class="input-group">

                              <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required="">
                          </div>
                          <br>
                          <label class="input-group">Data da captura:</label>
                            <div class="input-group">

                               
                                <input id="data_captura" type="text" class="form-control" name="data_captura" placeholder="Ano-Mes-Dia" required="">
                            </div>
                            <br>
                            <div class="dropdown">
                              <label class="input-group">Tipo:</label>

                              <select data-toggle="dropdown" id="tipo_pokemon" name="tipo_pokemon" class="btn btn-info dropdown-toggle" required=""><span class="caret"></span>
                                    <ul class="dropdown-menu">
                                        <option value="" disabled selected hidden>Tipo</option>
                                        <option value="Verde">VERDE</option>
                                        <option value="Laranja">LARANJA</option>
                                        <option value="Vermelho">VERMELHO</option>

                                    </ul>
                              </select>

                            </div>
                            <br>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">

                                        <button type="submit" href="#" class="btn btn-default"><i class="fa fa-sign-in"></i> Enviar</button>



                                </div>
                            </div>

                        </form>
</fieldset>

</div>
</center>
