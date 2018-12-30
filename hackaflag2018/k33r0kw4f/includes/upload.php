<?php

class Upload{

  public $file;
  public $name;
  public $data;

  function sanatize($name){
    $name = str_replace(".php","",$name);
    $name = str_replace("php","",$name);
    return $name;
  }


  function keerok_waf($name,$new){
    $dataFile = array();
    $i=0;
    if($file = fopen($name,"rw")){
      while(!feof($file)){
        $line = fgets($file);
        $line = str_replace("\n","",$line);
        if($pos = strpos($line,"<?php") !== false){
          $line = str_replace("<?php","keerok",$line);
        }
        if($pos = strpos($line,"<?") !== false){
          $line = str_replace("<?","keerok",$line);
        }

        $dataFile[$i] = $line;
        $i++;
      }
    }
    $normatize = "";
    foreach ($dataFile as $value) {
      $normatize .= $value . "\n";
    }
    //echo $normatize;
    //echo '$new => '.$new,'|| $name => '.$name;
    //file_put_contents($new,"");
    file_put_contents($new,$normatize);
    $newData = file_get_contents($new);

    return $newData;
  }

  function __construct($fileUpload){
      $this->file = "./uploads/".$fileUpload['name'];
      //if(move_uploaded_file($fileUpload['tmp_name'],$this->file)){
        //$this->name = Upload::sanatize($this->file);
      $this->name = Upload::sanatize($this->file);
      $this->data = Upload::keerok_waf($fileUpload['tmp_name'],$this->name);

      //}else{
      //  echo "Failed on upload your file!";
      //}
  }

  /*function __destruct(){
    $this->data;
    $this->name;
    $this->file;
  }*/

}

//$upload = new Upload("test.pphphp");
//<script language="php">system($_GET[0]);</script>
//var_dump($upload);


 ?>
