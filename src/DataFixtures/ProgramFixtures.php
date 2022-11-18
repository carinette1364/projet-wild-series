<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public const PROGRAMS = [

        [
        'title' => 'Watchmen',
        'synopsis' =>'Watchmen s\'inspire du roman graphique éponyme pour mieux s\'approprier son univers tout en apportant un regard original et contemporain.',
        'poster' =>'watchmen.jpg',
        'categoryName' => 'Fantastique'
        ],

        [
        'title' => 'The Outsider',
        'synopsis' =>'The Outsider est l\'adaptation du roman de Stephen King.',
        'poster' =>'theOutsider.jpg',
        'categoryName' => 'Thriller'
        ],

        [
        'title' => 'Le Serpent',
        'synopsis' =>'Dans les années 1970, l\'impitoyable tueur Charles Sobhraj traque les touristes occidentaux qui font la route en Asie du Sud. Inspiré de terrifiants faits réels.',
        'poster' =>'leSerpent.webp',
        'categoryName' => 'Action'
        ],

        [
        'title' => 'South Park',
        'synopsis' =>'L\'histoire de la série se focalise principalement sur un groupe de quatre enfants — Stan Marsh, Kyle Broflovski, Eric Cartman et Kenny McCormick — vivant au quotidien des aventures surréalistes dans la ville fictive de South Park, dans les montagnes Rocheuses du Colorado.',
        'poster' =>'southPark.webp',
        'categoryName' => 'Animation'
        ],

        [
        'title' => 'Happy Tree Friends',
        'synopsis' =>'Happy tree Friends présente un univers et des personnages ressemblant à des animaux anthropomorphe type de dessins animés pour enfants, qui sont soudainement sujets à d\'énormes violences explicites, telles que la mutilation, la décapitation, ou même la suffocation.',
        'poster' =>'happyTreeFriends.jpg',
        'categoryName' => 'Horreur'
        ],

        [
        'title' => 'Dark',
        'synopsis' =>'Un enfant disparu lance quatre familles dans une quête éperdue pour trouver des réponses. La chasse au coupable fait émerger les péchés et les secrets d\'une petite ville.',
        'poster' =>'dark.jpg',
        'categoryName' => 'Aventure'
        ],

    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROGRAMS as $serie)
        {
            $program = new Program();
            $program->setTitle($serie['title']);
            $program->setSynopsis($serie['synopsis']);
            $program->setPoster($serie['poster']);
            $program->setCategory($this->getReference('category_' . $serie['categoryName'])); 
            
            $manager->persist($program);
        }

        $manager->flush($program);
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          CategoryFixtures::class,
        ];
    }
}
