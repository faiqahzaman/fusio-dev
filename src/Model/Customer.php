<?php

declare(strict_types = 1);

namespace App\Model;

/**
 * @Description("A specific comment")
 */
class Customer implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $ahli;

    /**
     * @var string|null
     */
    protected $kodcaw;

    /**
     * @var int|null
     */
    protected $nosiri;

    /**
     * @var \DateTime|null
     */
    protected $tarikhdaftar;

    /**
     * @var string|null
     */
    protected $nopelanggan;

    /**
     * @var string|null
     */
    protected $kplama;

    /**
     * @var string|null
     */
    protected $kpbaru;

     /**
     * @var string|null
     */
    protected $nama;

    /**
     * @var \DateTime|null
     */
    protected $t_lahir;

    /**
     * @var string|null
     */
    protected $jantina;

    /**
     * @var string|null
     */
    protected $alamat1;

    /**
     * @var string|null
     */
    protected $alamat2;

    /**
     * @var string|null
     */
    protected $alamat3;

    /**
     * @var string|null
     */
    protected $alamat4;

    /**
     * @var string|null
     */
    protected $poskod;

    /**
     * @var int|null
     */
    protected $koddaerah;

    /**
     * @var string|null
     */
    protected $kodnegeri;

    /**
     * @var string|null
     */
    protected $telefon;

    /**
     * @var string|null
     */
    protected $jumpinjaman;

    /**
     * @var \DateTime|null
     */
    protected $t_gadai;

    /**
     * @var string|null
     */
    protected $pinjamhari;

    /**
     * @var string|null
     */
    protected $bumiputra;

    /**
     * @var string|null
     */
    protected $warganegara;

    /**
     * @var string|null
     */
    protected $bangsa;

    /**
     * @var string|null
     */
    protected $kodkerja;

    /**
     * @var string|null
     */
    protected $kodugama;

    /**
     * @var string|null
     */
    protected $kodstatus;

    /**
     * @var string|null
     */
    protected $kodbank;

    /**
     * @var string|null
     */
    protected $noakaun;

    /**
     * @var string|null
     */
    protected $nota;

    /**
     * @var string|null
     */
    protected $teller;

    /**
     * @var string|null
     */
    protected $pelulus;

    /**
     * @var \DateTime|null
     */
    protected $t_ubah;

    /**
     * @var \DateTime|null
     */
    protected $m_ubah;

    /**
     * @var string|null
     */
    protected $aktif;

    /**
     * @var string|null
     */
    protected $yuranahli;

    /**
     * @var string|null
     */
    protected $nopelangganlama;

    /**
     * @var string|null
     */
    protected $tujuangadai;

    /**
     * @var string|null
     */
    protected $kodkerjabaru;

    /**
     * @var int|null
     */
    protected $tagperingatan;

    /**
     * @var string|null
     */
    protected $namateller;

    /**
     * @var int|null
     */
    protected $kumpulan;

    /**
     * @var string|null
     */
    protected $telefon2;

    /**
     * @var string|null
     */
    protected $tagpelanggan;


    /**
     * @param string|null $ahli 
     */
    public function setahli(?string $ahli) : void
    {
        $this->ahli = $ahli;
    }
    /**
     * @return string|null
     */
    public function getahli() : ?string
    {
        return $this->ahli;
    }

    /**
     * @param string|null $kodcaw
     */
    public function setkodcaw(?string $kodcaw) : void
    {
        $this->kodcaw = $kodcaw;
    }
    /**
     * @return string|null
     */
    public function getkodcaw() : ?string
    {
        return $this->kodcaw;
    }

    /**
     * @param int|null $nosiri 
     */
    public function setnosiri(?int $nosiri) : void
    {
        $this->nosiri = $nosiri;
    }
    /**
     * @return int|null
     */
    public function getnosiri() : ?int
    {
        return $this->nosiri;
    }

    /**
     * @param \DateTime|null $tarikhdaftar
     */
    public function settarikhdaftar(?\DateTime $tarikhdaftar) : void
    {
        $this->tarikhdaftar = $tarikhdaftar;
    }
    /**
     * @return \DateTime|null
     */
    public function gettarikhdaftar() : ?\DateTime
    {
        return $this->tarikhdaftar;
    }

    /**
     * @param string|null $nopelanggan 
     */
    public function setnopelanggan(?string $nopelanggan) : void
    {
        $this->nopelanggan = $nopelanggan;
    }
    /**
     * @return string|null
     */
    public function getnopelanggan() : ?string
    {
        return $this->nopelanggan;
    }

    /**
     * @param string|null $kplama 
     */
    public function setkplama(?string $kplama) : void
    {
        $this->kplama = $kplama;
    }
    /**
     * @return string|null
     */
    public function getkplama() : ?string
    {
        return $this->kplama;
    }

    /**
     * @param string|null $kpbaru 
     */
    public function setkpbaru(?string $kpbaru) : void
    {
        $this->kpbaru = $kpbaru;
    }
    /**
     * @return string|null
     */
    public function getkpbaru() : ?string
    {
        return $this->kpbaru;
    }

    /**
     * @param string|null $nama 
     */
    public function setnama(?string $nama) : void
    {
        $this->nama = $nama;
    }
    /**
     * @return string|null
     */
    public function getnama() : ?string
    {
        return $this->nama;
    }

    /**
     * @param \DateTime|null $t_lahir 
     */
    public function sett_lahir(\DateTime $t_lahir) : void
    {
        $this->t_lahir = $t_lahir;
    }
    /**
     * @return \DateTime|null
     */
    public function gett_lahir() : \DateTime
    {
        return $this->t_lahir;
    }
    
    /**
     * @param string|null $jantina 
     */
    public function setjantina(?string $jantina) : void
    {
        $this->jantina = $jantina;
    }
    /**
     * @return string|null
     */
    public function getjantina() : ?string
    {
        return $this->jantina;
    }

    /**
     * @param string|null $alamat1 
     */
    public function setalamat1(?string $alamat1) : void
    {
        $this->alamat1 = $alamat1;
    }
    /**
     * @return string|null
     */
    public function getalamat1() : ?string
    {
        return $this->alamat1;
    }

    /**
     * @param string|null $alamat2 
     */
    public function setalamat2(?string $alamat2) : void
    {
        $this->alamat2 = $alamat2;
    }
    /**
     * @return string|null
     */
    public function getalamat2() : ?string
    {
        return $this->alamat2;
    }

    /**
     * @param string|null $alamat3 
     */
    public function setalamat3(?string $alamat3) : void
    {
        $this->alamat3 = $alamat3;
    }
    /**
     * @return string|null
     */
    public function getalamat3() : ?string
    {
        return $this->alamat3;
    }

    /**
     * @param string|null $alamat4 
     */
    public function setalamat4(?string $alamat4) : void
    {
        $this->alamat4 = $alamat4;
    }
    /**
     * @return string|null
     */
    public function getalamat4() : ?string
    {
        return $this->alamat4;
    }
    
    /**
     * @param string|null $poskod 
     */
    public function setposkod(?string $poskod) : void
    {
        $this->poskod = $poskod;
    }
    /**
     * @return string|null
     */
    public function getposkod() : ?string
    {
        return $this->poskod;
    }

    /**
     * @param int|null $koddaerah 
     */
    public function setkoddaerah(?int $koddaerah) : void
    {
        $this->koddaerah = $koddaerah;
    }
    /**
     * @return int|null
     */
    public function getkoddaerah() : ?int
    {
        return $this->koddaerah;
    }

    /**
     * @param string|null $kodnegeri 
     */
    public function setkodnegeri(?string $kodnegeri) : void
    {
        $this->kodnegeri = $kodnegeri;
    }
    /**
     * @return string|null
     */
    public function getkodnegeri() : ?string
    {
        return $this->kodnegeri;
    }

    /**
     * @param string|null $telefon 
     */
    public function settelefon(?string $telefon) : void
    {
        $this->telefon = $telefon;
    }
    /**
     * @return string|null
     */
    public function gettelefon() : ?string
    {
        return $this->telefon;
    }

    /**
     * @param string|null $jumpinjaman 
     */
    public function setjumpinjaman(?string $jumpinjaman) : void
    {
        $this->jumpinjaman = $jumpinjaman;
    }
    /**
     * @return string|null
     */
    public function getjumpinjaman() : ?string
    {
        return $this->jumpinjaman;
    }

    /**
     * @param \DateTime|null $t_gadai 
     */
    public function sett_gadai(?\DateTime $t_gadai) : void
    {
        $this->t_gadai = $t_gadai;
    }
    /**
     * @return \DateTime|null
     */
    public function gett_gadai() : ?\DateTime
    {
        return $this->t_gadai;
    }

    /**
     * @param string|null $pinjamhari 
     */
    public function setpinjamhari(?string $pinjamhari) : void
    {
        $this->pinjamhari = $pinjamhari;
    }
    /**
     * @return string|null
     */
    public function getpinjamhari() : ?string
    {
        return $this->pinjamhari;
    }

    /**
     * @param string|null $bumiputra 
     */
    public function setbumiputra(?string $bumiputra) : void
    {
        $this->bumiputra = $bumiputra;
    }
    /**
     * @return string|null
     */
    public function getbumiputra() : ?string
    {
        return $this->bumiputra;
    }

    /**
     * @param string|null $warganegara 
     */
    public function setwarganegara(?string $warganegara) : void
    {
        $this->warganegara = $warganegara;
    }
    /**
     * @return string|null
     */
    public function getwarganegara() : ?string
    {
        return $this->warganegara;
    }

    /**
     * @param string|null $bangsa 
     */
    public function setbangsa(?string $bangsa) : void
    {
        $this->bangsa = $bangsa;
    }
    /**
     * @return string|null
     */
    public function getbangsa() : ?string
    {
        return $this->bangsa;
    }

    /**
     * @param string|null $kodkerja 
     */
    public function setkodkerja(?string $kodkerja) : void
    {
        $this->kodkerja = $kodkerja;
    }
    /**
     * @return string|null
     */
    public function getkodkerja() : ?string
    {
        return $this->kodkerja;
    }

    /**
     * @param string|null $kodugama 
     */
    public function setkodugama(?string $kodugama) : void
    {
        $this->kodugama = $kodugama;
    }
    /**
     * @return string|null
     */
    public function getkodugama() : ?string
    {
        return $this->kodugama;
    }

    /**
     * @param string|null $kodstatus 
     */
    public function setkodstatus(?string $kodstatus) : void
    {
        $this->kodstatus = $kodstatus;
    }
    /**
     * @return string|null
     */
    public function getkodstatus() : ?string
    {
        return $this->kodstatus;
    }

    /**
     * @param string|null $kodbank 
     */
    public function setkodbank(?string $kodbank) : void
    {
        $this->kodbank = $kodbank;
    }
    /**
     * @return string|null
     */
    public function getkodbank() : ?string
    {
        return $this->kodbank;
    }

    /**
     * @param string|null $noakaun 
     */
    public function setnoakaun(?string $noakaun) : void
    {
        $this->noakaun = $noakaun;
    }
    /**
     * @return string|null
     */
    public function getnoakaun() : ?string
    {
        return $this->noakaun;
    }

    /**
     * @param string|null $nota 
     */
    public function setnota(?string $nota) : void
    {
        $this->nota = $nota;
    }
    /**
     * @return string|null
     */
    public function getnota() : ?string
    {
        return $this->nota;
    }

    /**
     * @param string|null $teller 
     */
    public function setteller(?string $teller) : void
    {
        $this->teller = $teller;
    }
    /**
     * @return string|null
     */
    public function getteller() : ?string
    {
        return $this->teller;
    }

    /**
     * @param string|null $pelulus 
     */
    public function setpelulus(?string $pelulus) : void
    {
        $this->pelulus = $pelulus;
    }
    /**
     * @return string|null
     */
    public function getpelulus() : ?string
    {
        return $this->pelulus;
    }

    /**
     * @param \DateTime|null $t_ubah 
     */
    public function sett_ubah(?\DateTime $t_ubah) : void
    {
        $this->t_ubah = $t_ubah;
    }
    /**
     * @return \DateTime|null
     */
    public function gett_ubah() : ?\DateTime
    {
        return $this->t_ubah;
    }

    /**
     * @param \DateTime|null $m_ubah 
     */
    public function setm_ubah(?\DateTime $m_ubah) : void
    {
        $this->m_ubah = $m_ubah;
    }
    /**
     * @return \DateTime|null
     */
    public function getm_ubah() : ?\DateTime
    {
        return $this->m_ubah;
    }

    /**
     * @param string|null $aktif 
     */
    public function setaktif(?string $aktif) : void
    {
        $this->aktif = $aktif;
    }
    /**
     * @return string|null
     */
    public function getaktif() : ?string
    {
        return $this->aktif;
    }

    /**
     * @param string|null $yuranahli 
     */
    public function setyuranahli(?string $yuranahli) : void
    {
        $this->yuranahli = $yuranahli;
    }
    /**
     * @return string|null
     */
    public function getyuranahli() : ?string
    {
        return $this->yuranahli;
    }

    /**
     * @param string|null $nopelangganlama 
     */
    public function setnopelangganlama(?string $nopelangganlama) : void
    {
        $this->nopelangganlama = $nopelangganlama;
    }
    /**
     * @return string|null
     */
    public function getnopelangganlama() : ?string
    {
        return $this->nopelangganlama;
    }

    /**
     * @param string|null $tujuangadai 
     */
    public function settujuangadai(?string $tujuangadai) : void
    {
        $this->tujuangadai = $tujuangadai;
    }
    /**
     * @return string|null
     */
    public function gettujuangadai() : ?string
    {
        return $this->tujuangadai;
    }

    /**
     * @param string|null $kodkerjabaru 
     */
    public function setkodkerjabaru(?string $kodkerjabaru) : void
    {
        $this->kodkerjabaru = $kodkerjabaru;
    }
    /**
     * @return string|null
     */
    public function getkodkerjabaru() : ?string
    {
        return $this->kodkerjabaru;
    }

    /**
     * @param int|null $tagperingatan 
     */
    public function settagperingatan(?int $tagperingatan) : void
    {
        $this->tagperingatan = $tagperingatan;
    }
    /**
     * @return int|null
     */
    public function gettagperingatan() : ?int
    {
        return $this->tagperingatan;
    }

    /**
     * @param string|null $namateller 
     */
    public function setnamateller(?string $namateller) : void
    {
        $this->namateller = $namateller;
    }
    /**
     * @return string|null
     */
    public function getnamateller() : ?string
    {
        return $this->namateller;
    }

    /**
     * @param int|null $kumpulan 
     */
    public function setkumpulan(?int $kumpulan) : void
    {
        $this->kumpulan = $kumpulan;
    }
    /**
     * @return int|null
     */
    public function getkumpulan() : ?int
    {
        return $this->kumpulan;
    }

    /**
     * @param string|null $telefon2 
     */
    public function settelefon2(?string $telefon2) : void
    {
        $this->telefon2 = $telefon2;
    }
    /**
     * @return string|null
     */
    public function gettelefon2() : ?string
    {
        return $this->telefon2;
    }

    /**
     * @param string|null $tagpelanggan 
     */
    public function settagpelanggan(?string $tagpelanggan) : void
    {
        $this->tagpelanggan = $tagpelanggan;
    }
    /**
     * @return string|null
     */
    public function gettagpelanggan() : ?string
    {
        return $this->tagpelanggan;
    }


    public function jsonSerialize()
    {
        return (object) array_filter(array('ahli' => $this->ahli, 'kodcaw' => $this->kodcaw, 'nosiri' => $this->nosiri, 'tarikhdaftar' => $this->tarikhdaftar, 'nopelanggan' => $this->nopelanggan, 'kplama' => $this->kplama, 'kpbaru' => $this->kpbaru, 'nama' => $this->nama, 't_lahir' => $this->t_lahir, 'jantina' => $this->jantina, 'alamat1' => $this->alamat1, 'alamat2' => $this->alamat2, 'alamat3' => $this->alamat3, 'alamat4' => $this->alamat4, 'poskod' => $this->poskod, 'koddaerah' => $this->koddaerah, 'kodnegeri' => $this->kodnegeri, 'telefon' => $this->telefon, 'jumpinjam' => $this->jumpinjam, 't_gadai' => $this->t_gadai, 'pinjamhari' => $this->pinjamhari, 'bumiputra' => $this->bumiputra, 'warganegara' => $this->warganegara, 'bangsa' => $this->bangsa, 'kodkerja' => $this->kodkerja, 'kodugama' => $this->kodugama, 'kodstatus' => $this->kodstatus, 'kodbank' => $this->kodbank, 'noakaun' => $this->noakaun, 'nota' => $this->nota, 'teller' => $this->teller, 'pelulus' => $this->pelulus, 't_ubah' => $this->t_ubah, 'm_ubah' => $this->m_ubah, 'aktif' => $this->aktif, 'yuranahli' => $this->yuranahli, 'nopelangganlama' => $this->nopelangganlama, 'tujuangadai' => $this->tujuangadai, 'kodkerjabaru' => $this->kodkerjabaru, 'tagperingatan' => $this->tagperingatan, 'namateller' => $this->namateller, 'kumpulan' => $this->kumpulan, 'telefon2' => $this->telefon2, 'tagpelanggan' => $this->tagpelanggan), static function ($value) : bool {
            return $value !== null;
        });
    }
}
