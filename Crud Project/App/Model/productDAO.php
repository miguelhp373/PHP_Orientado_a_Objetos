<?php

namespace App\Model;

use PDOException;

class ProductDao{

        public function create(Product $p){
           try{
            $sqlquery = 'INSERT INTO produtos(nome,descricao) VALUES (?,?)';//bind values
            $executequery = Connection::getConnection()->prepare($sqlquery);

            $executequery->bindValue(1,$p->getNome());
            $executequery->bindValue(2,$p->getDescricao());

            $executequery->execute();

            echo 'Produto Cadastrado com Sucesso!';

            header('Location: ../index.php');
           }catch(PDOException $error){
            echo $error->getMessage();
           }
        }

        public function read(){
            try{
                $sqlquery = 'SELECT * FROM produtos';
                $executequery = Connection::getConnection()->prepare($sqlquery);
                $executequery->execute();

                if($executequery->rowCount() > 0){
                    $result = $executequery->fetchAll(\PDO::FETCH_ASSOC);//retorna um array com tds registros
                    return $result;
                }else{
                    return [];
                }


            }catch(PDOException $error){
                echo $error->getMessage();
            }

        }

        public function update(Product $p){
            try{
                $sqlquery = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
                $executequery = Connection::getConnection()->prepare($sqlquery);
                $executequery->bindValue(1,$p->getNome());
                $executequery->bindValue(2,$p->getDescricao());
                $executequery->bindValue(3,$p->getId());

                $executequery->execute();


                header('Location: ../index.php');

            }catch(PDOException $error){
                echo $error->getMessage();
            }
        }

        public function delete($id){
             try{
                $sqlquery = 'DELETE FROM produtos  WHERE id = ?';
                $executequery = Connection::getConnection()->prepare($sqlquery);
                $executequery->bindValue(1,$id->getId());
                
                
                $executequery->execute();


                header('Location: ../index.php');

            }catch(PDOException $error){
                echo $error->getMessage();
            }
        }

    }
