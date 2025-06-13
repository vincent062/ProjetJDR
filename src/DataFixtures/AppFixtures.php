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
        $table1->setMJ('lorem');
        $table1->setLicence('mlk');
        $table1->setPlaces('6');
        $table1->setJoursJoués('25');
        $table1->setHoraires('20h');
        $table1->setTypeDeTable('lggk');
        $table1->setPlaceOccupée('0');

        $manager->persist($table1);


        $table2 = new Table();
        $table2->setMJ('jh');
        $table2->setLicence('hjh');
        $table2->setPlaces('6');
        $table2->setJoursJoués('25');
        $table2->setHoraires('20h');
        $table2->setTypeDeTable('hhh');
        $table2->setPlaceOccupée('0');

        $manager->persist($table2);


        $table3 = new Table();
        $table3->setMJ('lo');
        $table3->setLicence('jj');
        $table3->setPlaces('6');
        $table3->setJoursJoués('25');
        $table3->setHoraires('20h');
        $table3->setTypeDeTable('hh');
        $table3->setPlaceOccupée('0');

        $manager->persist($table3);


        $table4 = new Table();
        $table4->setMJ('lo');
        $table4->setLicence('jj');
        $table4->setPlaces('6');
        $table4->setJoursJoués('25');
        $table4->setHoraires('20h');
        $table4->setTypeDeTable('hh');
        $table4->setPlaceOccupée('0');

        $manager->persist($table4);


        $table5 = new Table();
        $table5->setMJ('lo');
        $table5->setLicence('jj');
        $table5->setPlaces('6');
        $table5->setJoursJoués('25');
        $table5->setHoraires('20h');
        $table5->setTypeDeTable('hh');
        $table5->setPlaceOccupée('0');

        $manager->persist($table5);


        $table6 = new Table();
        $table6->setMJ('lo');
        $table6->setLicence('jj');
        $table6->setPlaces('6');
        $table6->setJoursJoués('25');
        $table6->setHoraires('20h');
        $table6->setTypeDeTable('hh');
        $table6->setPlaceOccupée('0');

        $manager->persist($table6);


        $table7 = new Table();
        $table7->setMJ('lo');
        $table7->setLicence('jj');
        $table7->setPlaces('6');
        $table7->setJoursJoués('25');
        $table7->setHoraires('20h');
        $table7->setTypeDeTable('hh');
        $table7->setPlaceOccupée('0');

        $manager->persist($table7);


        $table8 = new Table();
        $table8->setMJ('lo');
        $table8->setLicence('jj');
        $table8->setPlaces('6');
        $table8->setJoursJoués('25');
        $table8->setHoraires('20h');
        $table8->setTypeDeTable('hh');
        $table8->setPlaceOccupée('0');

        $manager->persist($table8);









        $manager->flush();
    }
}
