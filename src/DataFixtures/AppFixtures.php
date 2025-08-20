<?php

namespace App\DataFixtures;

use App\Entity\Table;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $table1 = new Table();
        $table1->setMJ('Crowley');
        $table1->setLicence('Cthulhu V7');
        $table1->setPlaces('6');
        $table1->setJoursJoués('Semaine 01 , Samedi');
        $table1->setHoraires('20h-00h');
        $table1->setTypeDeTable('Horreur');
        $table1->setPlaceOccupée('2');

        $manager->persist($table1);


        $table2 = new Table();
        $table2->setMJ('Green');
        $table2->setLicence('Role n play');
        $table2->setPlaces('6');
        $table2->setJoursJoués('Semaine 01 , Samedi');
        $table2->setHoraires('20h-00h');
        $table2->setTypeDeTable('Héroic Fantasy');
        $table2->setPlaceOccupée('5');

        $manager->persist($table2);


        $table3 = new Table();
        $table3->setMJ('NicoZzZ');
        $table3->setLicence('COF 2');
        $table3->setPlaces('6');
        $table3->setJoursJoués('Semaine 02 , Samedi');
        $table3->setHoraires('20h-00h');
        $table3->setTypeDeTable('Héroic Fantasy');
        $table3->setPlaceOccupée('6');

        $manager->persist($table3);


        $table4 = new Table();
        $table4->setMJ('Lloyd');
        $table4->setLicence('Harry Potter');
        $table4->setPlaces('6');
        $table4->setJoursJoués('Semaine 02 , Samedi');
        $table4->setHoraires('20h-00h');
        $table4->setTypeDeTable('Fantastic / Magie');
        $table4->setPlaceOccupée('5');

        $manager->persist($table4);


        $table5 = new Table();
        $table5->setMJ('Green');
        $table5->setLicence('Z-Corps');
        $table5->setPlaces('7');
        $table5->setJoursJoués('Semaine 03, Vendredi');
        $table5->setHoraires('20h-00h');
        $table5->setTypeDeTable('Apocalipse Zombie');
        $table5->setPlaceOccupée('7');

        $manager->persist($table5);


        $table6 = new Table();
        $table6->setMJ('Aknot');
        $table6->setLicence('Knight');
        $table6->setPlaces('6');
        $table6->setJoursJoués('Semaine 03 , Samedi');
        $table6->setHoraires('20h-00h');
        $table6->setTypeDeTable('Horreur Futuriste');
        $table6->setPlaceOccupée('5');

        $manager->persist($table6);


        $table7 = new Table();
        $table7->setMJ('Green');
        $table7->setLicence('Héros et Dragons');
        $table7->setPlaces('6');
        $table7->setJoursJoués('Semaine 04 , Samedi');
        $table7->setHoraires('20h-00h');
        $table7->setTypeDeTable('Héroic Fantasy');
        $table7->setPlaceOccupée('6');

        $manager->persist($table7);


        $table8 = new Table();
        $table8->setMJ('Vince');
        $table8->setLicence('Les Terres d Arran');
        $table8->setPlaces('6');
        $table8->setJoursJoués('Semaine 04 , Samedi');
        $table8->setHoraires('20h-00h');
        $table8->setTypeDeTable('Héroic Fantasy');
        $table8->setPlaceOccupée('5');

        $manager->persist($table8);









        $manager->flush();
    }
}
