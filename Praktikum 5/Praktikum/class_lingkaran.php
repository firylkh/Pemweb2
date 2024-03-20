<?php
class Lingkaran{
    /**
     * Acces Modifer:
     * 1.public: atribut /method dapat di akses walaupun diluar class
     * 2.private: atribut/ method hanya dapat diakses didalam class
     * 3.protected: mirip seperti private, tetapi dapat di akses oleh 
     *(akses untuk mengambil dari class,bisa di akses oleh class turunan)
     */
    //properti atau atribut (sebutan utk variable yg ada di dalam class)
    private $jari;
    const PHI = 3.14;

    //method: function yg ada dalam class (hanya dapat di akses oleh acces modifier)
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas(){
        return 0.5 * self ::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }

}

?>