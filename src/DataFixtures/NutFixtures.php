<?php

namespace App\DataFixtures;

use App\Entity\Nut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NutFixtures extends Fixture
{
    public const ARRAYNUT = [
        ['name' => 'blabl', 'stock' => 234],
        ['name' => 'coco', 'stock' => 134],
        ['name' => 'tanuy', 'stock' => 34],
    ];

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        foreach (self::ARRAYNUT  as $nuting) {
            $nut = new Nut();
            $nut->setName($nuting['name']);
            $nut->setStock($nuting['stock']);
            $manager->persist($nut);
        }

        $manager->flush();
    }
}
