<?php 
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use UPJV\MesDates;
require_once __DIR__."/../src/MesDates.php";
final class MesDatesTest  extends TestCase
{
    /**
     * Encoder la date
     * 
     * @return bool
     */
    #[Test]
    public function testdemain()
    {
        $demainBase = new MesDates();
        $reponseDemain = $demainBase->demain(); 
        $reponseDemain = json_decode($reponseDemain); //contient le couple clé -> val

        $demainTest = new \DateTime();
        $demainTest->add(new \DateInterval('P1D'));
        $reponseTest = ['demain' => $demainTest->format("d-m-Y")]; // contient clé -> val
        self::assertEquals($reponseDemain->demain, $reponseTest['demain']);// reponseDemain->demain pour présenter que valeur aussi
    }
}