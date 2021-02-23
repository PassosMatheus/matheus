<?php
require_once 'header.php';
?>

<html>
    <div class="container">
        <div class="sobre">
            <div class="sobre-pessoal" data-toggle="modal" data-target="#sobre-pessoal">
                <div class="titulo-modal"><h3>Pessoal</h3>
                    <div class="modal fade" id="sobre-pessoal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1>Pessoal</h1>
                                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sobre-profissional" data-toggle="modal" data-target="#sobre-profissional">
                <div class="titulo-modal"><h3>Profissional</h3>
                    <div class="modal fade" id="sobre-profissional">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>Profissional</h1>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</html>

<?php
require_once 'footer.php';
?>