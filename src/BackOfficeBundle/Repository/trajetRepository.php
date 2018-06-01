<?php

namespace BackOfficeBundle\Repository;

/**
 * trajetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class trajetRepository extends \Doctrine\ORM\EntityRepository
{
  public function findAllOrderedByName($slug)
  {
  	$search = $slug;
  	$search .= "%";
  	return $this->getEntityManager()
			->createQuery(
        'SELECT trajet.id as id, trajet.nbKm as nbKm, trajet.date as date, cityDep.ville as villeDep, cityArr.ville as villeArr, user.nom as nom, user.prenom as prenom
        FROM BackOfficeBundle:Trajet trajet
        JOIN BackOfficeBundle:Ville cityDep WITH cityDep.id=trajet.villeDep
        JOIN BackOfficeBundle:Ville cityArr WITH cityArr.id=trajet.villeArr
        JOIN BackOfficeBundle:Internaute user WITH user.id=trajet.internaute
        WHERE UPPER(cityDep.ville) LIKE UPPER(:search) OR UPPER(cityArr.ville) LIKE UPPER(:search)'
      )
  		->setParameter('search', '%'.$search.'%')
  		->getResult();
  }
  public function findDepOrderedByName($slug)
  {
  	$search = $slug;
  	$search .= "%";
  	return $this->getEntityManager()
			->createQuery(
        'SELECT trajet.id as id, trajet.nbKm as nbKm, trajet.date as date, cityDep.ville as villeDep, cityArr.ville as villeArr, user.nom as nom, user.prenom as prenom
        FROM BackOfficeBundle:Trajet trajet
        JOIN BackOfficeBundle:Ville cityDep WITH cityDep.id=trajet.villeDep
        JOIN BackOfficeBundle:Ville cityArr WITH cityArr.id=trajet.villeArr
        JOIN BackOfficeBundle:Internaute user WITH user.id=trajet.internaute
        WHERE UPPER(cityDep.ville) LIKE UPPER(:search)'
      )
  		->setParameter('search', $search)
  		->getResult();
  }
  public function findArrOrderedByName($slug)
  {
  	$search = $slug;
  	$search .= "%";
  	return $this->getEntityManager()
			->createQuery(
        'SELECT trajet.id as id, trajet.nbKm as nbKm, trajet.date as date, cityDep.ville as villeDep, cityArr.ville as villeArr, user.nom as nom, user.prenom as prenom
        FROM BackOfficeBundle:Trajet trajet
        JOIN BackOfficeBundle:Ville cityDep WITH cityDep.id=trajet.villeDep
        JOIN BackOfficeBundle:Ville cityArr WITH cityArr.id=trajet.villeArr
        JOIN BackOfficeBundle:Internaute user WITH user.id=trajet.internaute
        WHERE UPPER(cityArr.ville) LIKE UPPER(:search)'
      )
  		->setParameter('search', $search)
  		->getResult();
  }
  public function findById($id)
  {
  	return $this->getEntityManager()
			->createQuery(
        "SELECT trajet.id as id, trajet.nbKm as nbKm, trajet.date as date, cityDep.ville as villeDep, cityArr.ville as villeArr, user.nom as nom, user.prenom as prenom, user.tel as tel, user.mail as mail, marque.nom as marqueNom, voiture.modele as modele, voiture.nbPlaces as nbPlaces
        FROM BackOfficeBundle:Trajet trajet
        JOIN BackOfficeBundle:Ville cityDep WITH cityDep.id=trajet.villeDep
        JOIN BackOfficeBundle:Ville cityArr WITH cityArr.id=trajet.villeArr
        JOIN BackOfficeBundle:Internaute user WITH user.id=trajet.internaute
        JOIN BackOfficeBundle:Voiture voiture WITH user.voiture=voiture.id
        JOIN BackOfficeBundle:Marque marque WITH voiture.marque=marque.id
        WHERE trajet.id='$id'"
      )
  		->getResult();
  }
}
