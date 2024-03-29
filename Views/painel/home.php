
    <div class="conteudo titulo animate__animated animate__fadeInUp">
        <i class='bx bx-home-alt'></i>
        <span>Home</span>
    </div>
     
        <div class="row mt-3">
            <div class="dbox-wrapper col-lg-4 col-md-12 animate__animated animate__fadeInUp">
                <div class="dbox dbox--color-1">
                    <div class="dbox__body">
                        <div>
                            <div class="dbox-text">
                                <span class="dbox__count">R$ <?php echo number_format($this->dados['lucro'],2,',','.') ?></span>
                                <hr>
                            </div><!-- dbox-text -->                                
                            <span class="dbox__title ">Lucro do dia</span>
                        </div>
                    </div>
                    <div class="dbox-icon">
                        <i class='bx bxs-dollar-circle'></i>
                    </div><!-- dbox-icon -->			
                </div><!-- dbox -->
            </div>
            <div class="dbox-wrapper col-lg-4 col-md-12 animate__animated animate__fadeInUp">
                <div class="dbox dbox--color-3">
                    <div class="dbox__body">
                        <div>
                            <div class="dbox-text">
                                <span class="dbox__count"><?php echo count($this->dados['qtdItens'])?></span>
                                <hr>
                            </div><!-- dbox-text -->     
                            <span class="dbox__title ">Itens Cadastrados</span>                          
                        </div>
                        <div class="dbox-icon">
                                <i class='bx bxs-food-menu'></i>
                        </div><!-- dbox-icon --> 
                    </div>			
                </div><!-- dbox -->

            </div>
            <div class="dbox-wrapper col-lg-4 col-md-12 animate__animated animate__fadeInUp">
                <div class="dbox dbox--color-2">
                    <div class="dbox__body">
                        <div>
                            <div class="dbox-text">
                                <span class="dbox__count"><?php echo count($this->dados['vendas']) ?></span>
                                <hr>
                            </div><!-- dbox-text -->      
                            <span class="dbox__title ">Vendas do dia</span>                          
                        </div>
                        <div class="dbox-icon">
                            <i class='bx bxs-caret-up-circle'></i>
                        </div><!-- dbox-icon -->                             
                    </div>			
                </div><!-- dbox -->
            </div>
        </div><!-- row --> 
    
<div class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="conteudo home-stats animate__animated animate__fadeInUp">
            <div class="subtitulo">
                <i class='bx bx-notepad'></i>
                <span class="d-sm-inline">Últimos Registros</span>
            </div><!-- subtitulo -->
            <table class="table table-sm">
                <thead class=" table-dark">
                    <tr >
                        <th scope="col">Ação</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                            foreach ($this->dados['log'] as $key => $value) {
                        ?>
                        <tr>

                        <td><?php echo $value['log_tipo_nome'] ?></td>
                        <td><?php echo $value['log_descricao'] ?></td>
                        <td><?php echo date('d/m/Y H:i:s',strtotime($value['log_registro'])) ?></td>

                        </tr>
                        <?php 
                        if($key == 4) break;
                            }
                        ?>
                    
                </tbody>
            </table>
        </div><!-- conteudo -->
    </div>

    <div class="col-xl-6 col-lg-12">
        <div class="conteudo home-stats animate__animated animate__fadeInUp">
            <div class="subtitulo">
                <i class='bx bx-line-chart'></i>
                <span class="d-sm-inline">Vendas do Dia</span>
            </div><!-- subtitulo -->
            <?php if(empty($this->dados['vendas'])){
                echo '<div class="d-flex justify-content-center align-items-center mt-5 mb-5" role="alert">
                        <i class="bx bx-x pe-1"></i>
                        Nenhuma Venda Registrada!
                    </div>';
            }else{ ?>
            <table class="table table-sm">
                <thead class=" table-dark">
                    <tr >
                        <th scope="col">Número do Pedido</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                            foreach ($this->dados['vendas'] as $key => $value) {
                        ?>
                        <tr>

                            <td><?php echo $value['pedido_id'] ?></td>
                            <td><?php echo date('d/m/Y H:i:s',strtotime($value['pedido_horario'])) ?></td>
                            <td>R$ <?php echo number_format($value['pedido_precototal'],2,',','.') ?></td>

                        </tr>
                        <?php 
                        if($key == 4) break;
                            }
                    ?>

                </tbody>
            </table>
            <?php } ?>
        </div><!-- conteudo -->
    </div>

</div><!-- row -->


      
    