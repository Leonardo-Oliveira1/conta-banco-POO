<?php 

Class Banco{
    public $numConta;
    protected $tipo; //Conta corrente ou poupança
    private $dono; //proprietario da conta
    private $saldo; 
    private $status; //aberto ou fechado


    public function setnumConta($nC){
        $this->numConta = $nC;
    }

    public function getnumConta(){
        return $this->numConta;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }

    
    public function __construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
    }

    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipo($tipo);

        if($tipo == "CC"){
           $this->saldo = 50;
            //deve ganhar 50 reais ao criar a conta
        }

        if($tipo == "CP"){ 
            $this->saldo = 150;
            //deve ganhar 150 reais ao criar a conta
        }

    }

    public function fecharConta(){
        if ($this->saldo == 0){
            $this->setStatus(false);
            echo "<br>Você fechou a conta!";
        }else{
            echo "<br>Você não pode fechar a conta enquanto tiver saldo ou débito nela.";
        }

    }

    public function depositar($deposito){
        if($this->status == true){
            echo "<p>Você depositou {$deposito} reais na sua conta</p>";
            $this->setSaldo($this->saldo + $deposito);
        }else{
            echo "<p>Você não possui uma conta aberta no banco.</p>";
        }
    }

    public function sacar($saque){
        if($this->status == true){
            if($this->saldo != 0){
                if($this->saldo >= $saque){
                    echo "<p>Você sacou {$saque} reais!</p>";
                    $this->setSaldo($this->saldo - $saque);


                }else{
                    echo "<p>Erro ao sacar! Você não possui saldo suficiente para sacar essa quantia.</p>";
                }
            }
        }
    }


    public function pagarMensalidade(){
        if ($this->getTipo() == "CC"){
            $this->setSaldo($this->saldo - 12);
            echo "<p>A sua mensalidade de 12 reais da conta corrente foi paga.</p>";
        }

        if ($this->getTipo() == "CP"){
            $this->setSaldo($this->saldo - 20);
            echo "<p>A sua mensalidade de 20 reais da conta poupança foi paga.</p>";
        }
    }

}

?>