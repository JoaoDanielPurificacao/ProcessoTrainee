<?php

//

function MediaEscolar($alunos){
  for($i=0; $i<=3;$i++){
      if($alunos[$i][1]<6){
        echo "Estudante " . $alunos[$i][0] . " obteve Média ".$alunos[$i][1].", determinada como ruim";
      } elseif($$alunos[$i][1]<8){
        echo "Estudante " . $alunos[$i][0] . " obteve Média ".$alunos[$i][1].", determinada como boa";
      } elseif($$alunos[$i][1]<=10){
        echo "Estudante " . $alunos[$i][0] . " obteve Média ".$alunos[$i][1].", determinada como otima";
    } else {
      echo "Falha indeterminada";
    }
  }
}

$alunos = array(
  array("Paulo",9), 
  array("Jayme",7), 
  array("José",3), 
  array("Marcela", 5)
);

MediaEscolar($alunos);

//

?>