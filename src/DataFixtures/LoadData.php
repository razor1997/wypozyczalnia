<?php
namespace App\DataFixtures;
use App\Entity\Languages;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class LoadData extends Fixture{
function load(ObjectManager $manager)
{
$data = file('public/dane/jezyki.txt');
foreach($data as $i)
{
$language = new Flota();
$language->setCaption(trim($i));
$manager->persist($language); }
$manager->flush();
}
}