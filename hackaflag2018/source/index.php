<?php
if(isset($_GET['source'])){
    highlight_file(__FILE__);
    exit;
}


class Bank {
    const EXTERNAL_DIRECTORY = '/tmp/';
    private $id;
    private $perda = 0;
    private $compra = 0;

    public function __construct($input) {
        $this->id = rand(1, 1000);

        foreach ($input as $campo => $count) {
            $this->$campo = $count++;
        }
    }

    public function __destruct() {
        file_put_contents(
            self::EXTERNAL_DIRECTORY . $this->id,
            var_export(get_object_vars($this), true)
        );
    }
}

$bank = new Bank($_GET);

