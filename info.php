<?php

    class Professor{

        private $nome;
        private $idade;
        private $matricula;
        private $salario;

        function __contruction($nome,$idade,$matricula,$salario){
            $this->Nome = $nome;
            $this->Idade = $idade;
            $this->Matricula = $matricula;
            $this->salario = $salario;
            echo __CLASS__;
        }
        
        public function getNome(){ 
            return $this->nome;          
        }

        public function setNome($nome){
            $this->nome = $nome;
            return $this;
        }

        public function getIdade(){ 
            return $this->Nome;          
        }

        public function setIdade($idade){
            $this->idade = $idade;
            return $this;
        }

        public function getMatricula(){ 
            return $this->matricula;          
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
            return $this;
        }

        public function getsalario(){ 
            return $this->Nome;          
        }

        public function setsalario($salario){
            $this->salario = $salario;
            return $this;
        }
    }
        
    class ProfessorHorista extends Professor{

        private $vlrHora;

        function __contruction($vlrHora){
            $this->vlrHora = $vlrHora;
            echo __CLASS__;
        }

        public function getvlrHora(){ 
            return $this->vlrHora;          
        }
    
        public function setNome($vlrHora){
            $this->vlrHora = $vlrHora;
            return $this;
        }

        public function calcularSalario(){
            $this->vlrHora * 40;
            return "Valor Salario semanal = $this";
        }
    }

    class ProfessorFixo extends Professor{

        private $vlrFixo;

        function __contruction($vlrFixo){
            $this->vlrFixo = $vlrFixo;
            echo __CLASS__;
        }

        public function getvlrFixo(){ 
            return $this->vlrFixo;          
        }
    
        public function setNome($vlrFixo){
            $this->vlrFixo = $vlrFixo;
            return $this;
        }
    }

    class Usuario{

        private $login;
        private $senha;

        function __contruction($login,$senha){
            $this->Login = $login;
            $this->Senha = $senha;
            echo __CLASS__;
        }

        public function getLogin(){ 
            return $this->login;          
        }
    
        public function setNome($login){
            $this->login = $login;
            return $this;
        }

        public function getsenha(){ 
            return $this->login;          
        }
    
        public function setSenha($senha){
            $this->senha = $senha;
            return $this;
        }

        public function validarSenha($senha){
            if ($senha == 321){
                print "Acesso realizado com Sucesso";
            }else{
                print "Acesso Negado";
            }
        }

    }
?>