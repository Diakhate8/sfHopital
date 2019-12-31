<?php

namespace App\Controller;


use App\Entity\Medecins;
use App\Entity\Services;
use App\Entity\Specialites;
use App\Form\FormmedecinType;
use App\Form\FormserviceType;
use App\Form\FormspecialiteType;
use App\Utule\MatriculeGenerator;
use App\Controller\AdminController;
use App\Repository\MedecinsRepository;
use App\Repository\ServicesRepository;
use App\Repository\SpecialitesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    // Affichages des services
    /**
     * @Route("/admin/showservice", name="admin.service.show")
     */
    public function showService(ServicesRepository $repos )
    {
        $services =$repos->findAll();
         
        return $this->render('admin/showservice.html.twig', [
            'services' =>$services,
        ]);
    }
        //ajouter service
    /**
     * @Route("/admin/serviceform", name="admin.service.add")
     */
    public function addservice(ServicesRepository $repos, Request $request )
    {
         // just setup a fresh $task object (remove the example data) 
        $service = new Services();

        $form = $this->createForm(FormserviceType::class, $service);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
    
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $entityManager = $this->getDoctrine()->getManager();
             //force lenvoie des donnees a la BD
             $entityManager->persist($service);
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.service.show');
        }

        return $this->render('admin/serviceform.html.twig', [
            'form' => $form->createView(),
        ]);        
    }
      //modifier service
    /**
     * @Route("/admin/editeservice/{id}", name="admin.service.edite")
     */
    public function editeservice($id , ServicesRepository $repos, Request $request )
    {     
        $service=$repos->find($id)   ; 
        $form = $this->createForm(FormserviceType::class, $service);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
    
             $entityManager = $this->getDoctrine()->getManager();
            
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.service.show');
        }

        return $this->render('admin/serviceform.html.twig', [
            'form' => $form->createView(),
        ]);        
    }

    //specialite
    /**
     * @Route("admin/showspecialite", name="admin.specialite.show")
     */
    public function showSpecialite(SpecialitesRepository $repos )
    {
        $specialites =$repos->findAll();
         
        return $this->render('admin/showspecialite.html.twig', [
            'specialites' =>$specialites,
        ]);
    }
    
     //ajouter specialite
    /**
     * @Route("/admin/specialiteform", name="admin.specialite.add")
     */
    public function addspecialite(SpecialitesRepository $repos, Request $request )
    {
         // just setup a fresh $task object (remove the example data) 
        $specialite = new Specialites();

        $form = $this->createForm(FormspecialiteType::class, $specialite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
    
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($specialite);
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.specialite.show');
        }

        return $this->render('admin/specialiteform.html.twig', [
            'form' => $form->createView(),
        ]);        
    }
      //modifier specialite
    /**
     * @Route("/admin/editespecialite/{id}", name="admin.specialite.edite")
     */
    public function editespecialite($id , SpecialitesRepository $repos, Request $request )
    {     
        $specialite=$repos->find($id)   ; 
        $form = $this->createForm(FormspecialiteType::class, $specialite);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
    
             $entityManager = $this->getDoctrine()->getManager();
            
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.specialite.show');
        }

        return $this->render('admin/specialiteform.html.twig', [
            'form' => $form->createView(),
        ]);        
    }
     //delete pecialite
    /**
     * @Route("/admin/deletespecialite/{id}", name="admin.specialite.delete")
     */
    public function deletespecialite($id , SpecialitesRepository $repos, Request $request )
    {     
        $specialite=$repos->find($id)   ; 
        
    
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->remove($specialite);
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.specialite.show');
                
    }
    //medecin
    /**
     * @Route("admin/showmedecin", name="admin.medecin.show")
     */
    public function showMedecin(MedecinsRepository $repos )
    {
        $medecins =$repos->findAll();
         
        return $this->render('admin/showmedecin.html.twig', [
            'medecins' =>$medecins,
        ]);
    }
     //ajouter Medecins
    /**
     * @Route("/admin/medecinform", name="admin.medecin.add")
     */
    public function addmedecin(MedecinsRepository $medecinRepos, Request $request ,MatriculeGenerator $mat_generator)
    {
         // just setup a fresh $task object (remove the example data) 
        $medecin = new Medecins();

        $form = $this->createForm(FormmedecinType::class, $medecin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... perform some action, such as saving the task to the database
           
             $entityManager = $this->getDoctrine()->getManager();
             //generate auto matricule
             $matricule = $mat_generator->generate($medecin);
             $medecin->setMatricule($matricule);

             $entityManager->persist($medecin);
             $entityManager->flush();
    
            return $this->redirectToRoute("admin.medecin.show");
        }

        return $this->render('admin/medecinform.html.twig', [
            'formM' => $form->createView(),
           // 'matricule'=>$mat_generator->generate(),
           'medecins'=>$medecinRepos->findAll(),
           //'medecins'=>$medecin->
        ]);        
    }
     //modifier medecin
    /**
     * @Route("/admin/editemedecin/{id}", name="admin.medecin.edite")
     */
    public function editemedecin($id , MedecinsRepository $repos, Request $request )
    {     
        $medecin=$repos->find($id)   ; 
        $form = $this->createForm(FormmedecinType::class, $medecin);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
    
             $entityManager = $this->getDoctrine()->getManager();
            
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.medecin.show');
        }

        return $this->render('admin/medecinform.html.twig', [
            'formM' => $form->createView(),
        ]);        
    }
     //delete medecin
    /**
     * @Route("/admin/deletemedecin/{id}", name="admin.medecin.delete")
     */
    public function deletemedecin($id , MedecinsRepository $repos, Request $request )
    {     
        $medecin=$repos->find($id)   ; 
        
    
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->remove($medecin);
             $entityManager->flush();
    
            return $this->redirectToRoute('admin.medecin.show');
                
    }

    


}
