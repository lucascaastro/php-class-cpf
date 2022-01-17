<?php 
  class Funcionarios 
  {
    private $funcionarios;

    public function __construct()
    {
      
      $this->funcionarios = [
        ['id' => 4, 'nome' => 'João', 'salario' => 1500 , 'cpf'=> "111.111.111-11"],
        ['id' => 21, 'nome' => 'José', 'salario' => 1230.50, 'cpf'=> "222.222.222-22"],
        ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54, 'cpf'=> "333.333.333-33"]
      ];
    }
    public function all()
    {
      return $this->funcionarios;
    }

    /**
     * @param int $cpf
     * 
     *@return array null  
     */

    public function find($cpf)
    {
      foreach ($this->funcionarios as $func){
        if ($func['cpf'] == $cpf){
          return $func;
        }
      }
      return null;
    }
  }
?>