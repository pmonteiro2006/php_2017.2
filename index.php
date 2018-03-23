<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                <div class="jumbotron col-md-offset-3 col-md-6">
                    <fieldset>
                        <legend>Formulário</legend>
                    <form>
                        <div class="form-group">
                            <label for="id_nome">Nome do Aluno</label>
                            <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do Aluno">
                        </div>
                        <div class="form-group">
                            <label for="id_matricula">Matrícula</label>
                            <input type="number" class="form-control" id="id_matricula" name="matricula" placeholder="Matrícula">
                        </div>
                        <div class="form-group">
                            <label for="id_telefone">Telefone</label>
                            <input type="tel" class="form-control" id="id_telefone" name="telefone" placeholder="Telefone">
                        </div>                        
                        
                        <button type="submit" formaction="cadastrar.php" formmethod="post" class="btn btn-default">enviar</button>
                    </form>
                    </fieldset>
                </div>
            </div>