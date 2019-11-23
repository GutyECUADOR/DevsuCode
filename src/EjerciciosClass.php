<?php namespace app;

class EjerciciosClass {
    public function __constructor() {
    }

    public function encryptyourmessage($message='', $key='dcj'){
         $codeMessage = '';
        
        if (strlen($message) < 1) {
            return $codeMessage;
        }

        if (empty($key)) {
            $key = 'dcj';
        }

        $vocales = ['A','a','E','e','I','i','O','o','U','u'];
        $arrayMessage = str_split($message);
       
        
        foreach ($arrayMessage as $letra) {
          if (in_array($letra, $vocales)) {
                $codeMessage .= $key.$letra;
          }else{
                $codeMessage .= $letra;
              
          }
        }

        return $codeMessage;
    }

    public function trackmytime($arrayTimestamp=[65647440,199644521]) {
        $timestamp = 0;
        foreach ($arrayTimestamp as $ms) {
           $timestamp += $ms;
        }
        
        $fecha = new \DateTime();
        $fecha->setTimestamp($timestamp);
        $arrayResponse = array(
                            $fecha->format('d'),
                            $fecha->format('H'),
                            $fecha->format('i'),
                            $fecha->format('s'),
                            $fecha->format('u'),

                        );
        return $arrayResponse;
    
    }

    public function Ncase($message, $K=0) {
        $arrayMessage = str_split($message);
        $caseMessage ='';

        $count = 1;

        foreach ($arrayMessage as $letra) {
            if ($count == $K) {
                if(ctype_upper($letra))
                    {
                        $caseMessage .= strtolower($letra);
                    }else{
                        $caseMessage .= strtoupper($letra);
                    }
                    $count = 1;
            }else{
                    $caseMessage .= $letra;
                    $count++;
            }
        }
        return $caseMessage;
    }

    public function seriesReloaded($N=0) {
        if ($N <= 0) {
            return -1;
        }
        $inicioSerie = -3;
        $serie = array(-3);
      
        for ($i = 0; $i <= $N; $i++) {
            $impares = 2*$i+1;
           
            array_push($serie, $serie[$i] + $impares );
        }

        return($serie[$N-1]); 
       
    }


    public function test() {
        echo 'Class ready';
    }
}
