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

        [
        'title' => 'The Walking Dead',
        'synopsis' =>'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d\'hommes et de femmes mené par l\'officier Rick Grimes tente de survivre.',
        'poster' =>'theWalkingDead.jpg',
        'categoryName' => 'Horreur'
        ],

        [
        'title' => 'The Haunting of Hill House',
        'synopsis' =>'Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis sont contraints de se retrouver pour faire face à cette tragédie ensemble.',
        'poster' =>'theHauntingofHillHouse.jpg',
        'categoryName' => 'Horreur'
        ],

        [
        'title' => 'The Witcher',
        'synopsis' =>'Le sorceleur Geralt, un chasseur de monstres mutant, se bat pour trouver sa place dans un monde où les humains se révèlent souvent plus vicieux que les bêtes.',
        'poster' =>'theWitcher.jpg',
        'categoryName' => 'Fantastique'
        ],

        [
        'title' => 'Snowpiercer',
        'synopsis' =>'La Terre a gelé et les derniers humains survivent à bord d\'un train géant qui fait le tour du globe. Mais la coexistence est rude dans ce microcosme au fragile équilibre.',
        'poster' =>'snowpiercer.jpg',
        'categoryName' => 'Aventure'
        ],

        [
        'title' => 'The Handmaid\'s Tale',
        'synopsis' =>'le monde tel que nous le connaissons n’est plus. Il est aujourd’hui dirigé par un groupe de fondamentalistes, qui base sa politique sur l’Ancien Testament. La série suit le destin tragique d’Offred, une « servante écarlate » qui vit dans ce monde où les femmes sont réparties en 3 castes. On y trouve les Épouses, qui sont les régentes de la maison. Les Marthas sont les femmes à tout faire, tandis que les Servantes écarlates sont dédiées à la reproduction.',
        'poster' =>'theHandmaidsTale.jpg',
        'categoryName' => 'Aventure'
        ],

        [
        'title' => 'Baki',
        'synopsis' =>'Cinq assassins sanguinaires s\'évadent de prison et prennent Tokyo d\'assaut. Le champion d\'arts martiaux Baki Hanma et quatre combattants d\'élite devront les affronter. Tous les coups sont permis. Le combat sera féroce et sans pitié. Prêts pour un bain de sang ?',
        'poster' =>'baki.jpg',
        'categoryName' => 'Animation'
        ],

        [
        'title' => 'Daria',
        'synopsis' =>'La jeune Daria Morgendorffer n\'a pas une existence facile. Adolescente brillante et sarcastique, elle peine à s\'adapter au monde tristement banal qui l\'entoure. Affublée de larges lunettes, de vêtements sombres et arborant en permanence un visage impassible, elle doit notamment s\'accomoder de parents béats qui ne parviennent pas à comprendre l\'austérité et le cynisme dont elle fait preuve.',
        'poster' =>'daria.webp',
        'categoryName' => 'Animation'
        ],

        [
        'title' => 'The Undoing',
        'synopsis' =>'Grace Sachs (Kidman) est une thérapeute à succès. Son fils fréquente une école prestigieuse et son mari est aimant. Alors qu’elle est sur le point de publier son premier livre, son mari disparaît. Jusqu’au jour où elle apprend de terribles révélations concernant celui qu’elle pensait si bien connaître.',
        'poster' =>'theUndoing.jpg',
        'categoryName' => 'Thriller'
        ],

        [
        'title' => 'Tin Star',
        'synopsis' =>'Fatigué de sa vie tumultueuse, le détective Jim Worth quitte Londres pour s’installer au Canada avec sa famille.',
        'poster' =>'tinStar.jpg',
        'categoryName' => 'Thriller'
        ],

        [
        'title' => 'Band of Brothers',
        'synopsis' =>'Vivez la Seconde Guerre Mondiale aux côtés de la Easy Company, un groupe de soldats américains. Suivez-les en tant que groupe, ou individuellement, depuis leur formation en 1942, jusqu\'à la libération de l\'Allemagne Nazie en 1945, en passant par leur parachutage en Normandie le 6 juin 1944.',
        'poster' =>'bandOfBrothers.jpg',
        'categoryName' => 'Action'
        ],

        [
        'title' => 'His Dark Materials',
        'synopsis' =>'Courageuse et futée, Lyra se retrouve embarquée dans une folle aventure dans les contrées du Nord, à la recherche de son meilleur ami disparu. Pourquoi cette jeune fille orpheline, élevée dans l\'atmosphère austère et confinée du prestigieux Jordan College, fait-elle l\'objet de tant d\'attentions ? Serait-elle investie d\'une mystérieuse mission ? Sur les traces de ravisseurs d\'enfants aux motivations obscures, Lyra va faire d\'étonnantes rencontres et surmonter de multiples dangers.',
        'poster' =>'hisDarkMaterials.jpg',
        'categoryName' => 'Action'
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
