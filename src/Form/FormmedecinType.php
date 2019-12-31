<?php

namespace App\Form;

use App\Entity\Medecins;
use App\Entity\Specialites;
use App\Form\FormmedecinType;
use Symfony\Component\Form\AbstractType;
use App\Repository\SpecialitesRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FormmedecinType extends AbstractType
{
    private $specialsRepo;
    
    public function __construct(SpecialitesRepository $specialsRepo){
        $this->specialsRepo=$specialsRepo;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('matricule')
            ->add('prenom', null,[
                'attr'=>[
                    'placeholder'=>'Prenom',
                    'class'=>'form-control',
                    'require'=>true
                ]
            ])
            ->add('nom')
            ->add('datedenaiss',DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd']
                )
            ->add('adresse')
            ->add('telephone')
            ->add('email')
            ->add('service')
            ->add('specialites', EntityType::class,[
                'class' => Specialites::class,
                'choices' => $this->specialsRepo->findall(),
                'multiple'=> true,
                'by_reference'=>false
    
                ])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medecins::class,
        ]);
    }
}
