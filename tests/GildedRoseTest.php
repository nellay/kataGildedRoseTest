<?php 
use App\GildedRose;
use PHPUnit\Framework\TestCase;

 class GildedRoseTest extends TestCase
{

    
    public function testSiAgedDaUnNumeroMenorACincuenta(){
        $quality=50;
        $name='Aged Brie';
        $sellIn=1;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();
        
        $expected=50;
        $this->assertEquals($expected,$GildedRose->quality);
        //gracias sergi
    }


    public function testSiLaCalidadNoEsNegativa(){
        $quality=0;
        $name='Peluca negra';
        $sellIn=1;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=0;
        $this->assertEquals($expected,$GildedRose->quality);
    }
    
    
    public function testQueSulfurasHandofRagnarosNoSeVenda(){
        $sellIn=5;
        $name='Sulfuras, Hand of Ragnaros';
        $quality=5;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=5;

        $this->assertEquals($expected,$GildedRose->sellIn);
    }


    public function testQueSulfurasHandofRagnarosNoDisminuyaLaCalidad(){
        $quality=80;
        $sellIn=1;
        $name='Sulfuras, Hand of Ragnaros';

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=80;
        $this->assertEquals($expected,$GildedRose->quality);
    }


   public function testQueLaCalidadDeBackstageSubaTresVecesMas(){
        $quality=32;
        $name='Backstage passes to a TAFKAL80ETC concert';
        $sellIn=3;
       
        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=35;
        $this->assertEquals($expected,$GildedRose->quality);
   }


   public function testQueLaCalidadDeBackstageSubaDosVecesMas(){
        $quality=14;
        $name='Backstage passes to a TAFKAL80ETC concert';
        $sellIn=7;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=16;
        $this->assertEquals($expected,$GildedRose->quality);
   }


   public function testQueBajeTodoACeroDespuesDelConcierto(){
        $sellIn=0;
        $quality=0;
        $name='Backstage passes to a TAFKAL80ETC concert';

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=0;
        $this->assertEquals($expected,$GildedRose->quality);
   }

   public function testQueCuandoLaFechaCaduqueLaCalidadBajeElDobleDeRapido(){
        $quality=-20;
        $sellIn=0;
        $name='Aged Brie';

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=-18;
        $this->assertEquals($expected,$GildedRose->quality);

   }
   public function testQueCuandoNoSeaNiSulfurasNiElOtroBajeEnCalidad(){
        $sellIn=8;
        $name='señora';
        $quality=28;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $qualityExpected=27;
        $sellInExpected=7;
        $this->assertEquals($qualityExpected,$GildedRose->quality);
        $this->assertEquals($sellInExpected,$GildedRose->sellIn);

   }
    public function testSiAgedSubeLaCalidad(){
        $quality=40;
        $name='Aged Brie';
        $sellIn=1;

        $GildedRose= new GildedRose($name,$quality,$sellIn);
        $GildedRose->tick();

        $expected=41;
        $this->assertEquals($expected,$GildedRose->quality);
   }
//    public function testSi(){
//        $name=;
//        $quality=;
//        $sellIn=;

//        $GildedRose= new GildedRose();
//        $GildedRose->tick();

//        $expected=;
//        $this->assertEquals()

//    }

   

 
        
        //backstage que suba en 1
        
   

}