<?php
    //require_once 'conexao.php';
    
    class veiculoDAO{
        public $conexao;

        public function __construct($conexao){
           $this->conexao = $conexao;
        }

        public function cadastrarveiculo($veiculoDTO){
            
            try{
                $sql = 'INSERT INTO veiculo (placa, renevan , ano , marca , modelo , cor , combustivel) VALUES (:placa, :renevan , :ano , :marca , :modelo , :cor , :combustivel)';
            
                $insert = $this->conexao->prepare($sql);

                $placa= $veiculoDTO->__getplaca();
                $renevan = $veiculoDTO->__getrenevan();
                $ano = $veiculoDTO->__getano();
                $marca = $veiculoDTO->__getmarca();
                $modelo = $veiculoDTO->__getmodelo();
                $cor = $veiculoDTO->__getcor();
                $combustivel = $veiculoDTO->__getcombustivel();

                $insert->bindValue(":placa",$placa);
                $insert->bindValue(":renevan",$renevan);
                $insert->bindValue(":ano",$ano);
                $insert->bindValue(":marca",$marca);
                $insert->bindValue(":modelo",$modelo);
                $insert->bindValue(":cor",$cor);
                $insert->bindValue(":combustivel",$combustivel);

                if($insert->execute()){
                    echo "veiculo Cadastrado com Sucesso!!!!!";
                }else{
                    echo "Erro ao Cadastrar veiculo!!!!!";
                }

            }catch (PDOException $erro){

            }
            
        }
        
        public function consultarveiculo($veiculoDTO){
            try{

                $sql = 'SELECT * FROM veiculo';
                $consulta = $this->conexao->prepare($sql);
                if($consulta->execute()){
                    if($consulta->rowcount() > 0){
                        $listaveiculos = $consulta->fetchAll();
                        $veiculoDTO->__setListaveiculos($listaveiculos);
                    }
                }else{
                    echo "Erro ao Consultar veiculos";
                }

            }catch(PDOException $erro){

            }

        }

        public function consultarId(int $id){
            include_once '../model/DTO/veiculoDTO.php';
        
            $sql = 'SELECT * FROM veiculo WHERE id = :id';
            $consultaId = $this->conexao->prepare($sql);
            $consultaId->bindValue(":id",$id);
            $consultaId->execute();
        
            return $consultaId->fetchObject("veiculoDTO");
        }

        public function excluirveiculo($id){
            try{

                $sql = 'DELETE FROM veiculo WHERE id = :id';
                $delete = $this->conexao->prepare($sql);
                $delete->bindValue(":id",$id);
                $delete->execute();

           }catch(PDOException $erro){
            
            }

        }

         public function alterarveiculo($veiculoDTO, $id){
            try{

                $sql = 'UPDATE veiculo SET placa=:placa, renevan=:renevan, ano=:ano, marca=:marca, modelo=:modelo, cor=:cor, combustivel=:combustivel WHERE id=:id';
                $altera = $this->conexao->prepare($sql);

                $placa= $veiculoDTO->__getplaca();
                $renevan = $veiculoDTO->__getrenevan();
                $ano = $veiculoDTO->__getano();
                $marca = $veiculoDTO->__getmarca();
                $modelo = $veiculoDTO->__getmodelo();
                $cor = $veiculoDTO->__getcor();
                $combustivel = $veiculoDTO->__getcombustivel();
                
                $altera->bindValue(":placa",$placa);
                $altera->bindValue(":renevan",$renevan);
                $altera->bindValue(":ano",$ano);
                $altera->bindValue(":marca",$marca);
                $altera->bindValue(":modelo",$modelo);
                $altera->bindValue(":cor",$cor);
                $altera->bindValue(":combustivel",$combustivel);
                $altera->bindValue(":id",$id);

                $altera->execute();

            }catch(PDOException $erro){
            
            }

        }

       
        
    }
?>