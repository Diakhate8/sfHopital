<?php
namespace App\Utule;

use App\Entity\Medecins;
use App\Repository\MedecinsRepository;

class MatriculeGenerator{
    private $matricule;
   
    public function __construct(MedecinsRepository $medecinRepo){
       
       // on recupere l'id dans l'ordre decroissant
        $lastmedecin=$medecinRepo->findOneBy([],['id'=>'desc']);
        if($lastmedecin != null){
            $lastid = $lastmedecin->getId();
            
             $this->matricule = sprintf("%'.05d", $lastid);         

        }else{
            //commencer au debut enlever un 0 et le remplacer par 1
            $this->matricule = sprintf("%'.05d",1);
        }
        //var_dump($this->matricule );
    
    }
    public function generate(Medecins $medecin){
        $index ='M';
        $service = $medecin->getService()->getLibelle();

        $number_of_word = (str_word_count($service, 1));

        if(count($number_of_word)>=2){
            foreach ($number_of_word as $k =>$v){
                $index.=strtoupper(substr($v,0,1));
            }
            
        }else{
            $index.=strtoupper(substr($number_of_word[0],0,2));
        }
        //var_dump($index);
        return $index.$this->matricule;
    }
}

?>