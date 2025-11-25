<?php
    require_once 'conexao.php';
    
    class carroDAO{
        public $conexao;

        public function __construct($conexao){
           $this->conexao = $conexao;
        }

        public function cadastrarcarro($carroDTO){
            
            try{
                $sql = 'INSERT INTO carro (placa, renevan , ano , marca , modelo , cor , combustivel) VALUES (:placa, :renevan , :ano , :marca , :modelo , :cor , :combustivel)';
            
                $insert = $this->conexao->prepare($sql);

                $placa= $carroDTO->__getplaca();
                $renevan = $carroDTO->__getrenevan();
                $ano = $carroDTO->__getano();
                $marca = $carroDTO->__getmarca();
                $modelo = $carroDTO->__getmodelo();
                $cor = $carroDTO->__getcor();
                $combustivel = $carroDTO->__getcombustivel();

                $insert->bindValue(":placa",$placa);
                $insert->bindValue(":renevan",$renevan);
                $insert->bindValue(":ano",$ano);
                $insert->bindValue(":marca",$marca);
                $insert->bindValue(":modelo",$modelo);
                $insert->bindValue(":cor",$cor);
                $insert->bindValue(":combustivel",$combustivel);

                if($insert->execute()){
                    echo "carro Cadastrado com Sucesso!!!!!";
                }else{
                    echo "Erro ao Cadastrar carro!!!!!";
                }

            }catch (PDOException $erro){

            }
            
        }
        
        public function consultarcarro($carroDTO){
            try{

                $sql = 'SELECT * FROM carro';
                $consulta = $this->conexao->prepare($sql);
                if($consulta->execute()){
                    if($consulta->rowcount() > 0){
                        $listacarros = $consulta->fetchAll();
                        $carroDTO->__setListacarros($listacarros);
                    }
                }else{
                    echo "Erro ao Consultar carros";
                }

            }catch(PDOException $erro){

            }

        }

        public function consultarId(int $id){
            include_once '../model/DTO/carroDTO.php';
        
            $sql = 'SELECT * FROM carro WHERE id = :id';
            $consultaId = $this->conexao->prepare($sql);
            $consultaId->bindValue(":id",$id);
            $consultaId->execute();
        
            return $consultaId->fetchObject("carroDTO");
        }

        public function excluircarro($id){
            try{

                $sql = 'DELETE FROM carro WHERE id = :id';
                $delete = $this->conexao->prepare($sql);
                $delete->bindValue(":id",$id);
                $delete->execute();

           }catch(PDOException $erro){
            
            }

        }

         public function alterarcarro($carroDTO, $id){
            try{

                $sql = 'UPDATE carro SET placa=:placa, renevan=:renevan, ano=:ano, marca=:marca, modelo=:modelo, cor=:cor, combustivel=:combustivel WHERE id=:id';
                $altera = $this->conexao->prepare($sql);

                $placa= $carroDTO->__getplaca();
                $renevan = $carroDTO->__getrenevan();
                $ano = $carroDTO->__getano();
                $marca = $carroDTO->__getmarca();
                $modelo = $carroDTO->__getmodelo();
                $cor = $carroDTO->__getcor();
                $combustivel = $carroDTO->__getcombustivel();
                
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