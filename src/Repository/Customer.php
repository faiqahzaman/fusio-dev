<?php

namespace App\Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;

/**
 * Repository which handles all database operations regarding a customer
 */
class Customer
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
    
    public function findById(string $kpbaru)
    {
        return $this->connection->fetchAssoc('SELECT * FROM customer WHERE kpbaru = :kpbaru', [
            'kpbaru' => $kpbaru,
        ]);
    }

    public function insert(string $ahli, 
                            string $kodcaw, 
                            int $nosiri,
                            \DateTime $tarikhdaftar, 
                            string $nopelanggan, 
                            string $kplama, 
                            string $kpbaru, 
                            string $nama, 
                            \DateTime $t_lahir, 
                            string $jantina, 
                            string $alamat1, 
                            string $alamat2, 
                            string $alamat3, 
                            string $alamat4, 
                            string $poskod, 
                            string $koddaerah, 
                            string $kodnegeri, 
                            string $telefon, 
                            string $jumpinjaman, 
                            \DateTime $t_gadai,
                            string $pinjamhari, 
                            string $bumiputra, 
                            string $warganegara, 
                            string $bangsa, 
                            string $kodkerja, 
                            string $kodugama, 
                            string $kodstatus, 
                            string $kodbank, 
                            string $noakaun, 
                            string $nota, 
                            string $teller, 
                            string $pelulus, 
                            \DateTime $t_ubah,
                            \DateTime $m_ubah,
                            string $aktif, 
                            string $yuranahli,
                            string $nopelangganlama, 
                            string $tujuangadai, 
                            string $kodkerjabaru, 
                            string $tagperingatan, 
                            string $namateller, 
                            int $kumpulan, 
                            string $telefon2, 
                            string $tagpelanggan ): int
    {

        $this->connection->insert('customer', [
            'ahli' => $ahli,
            'kodcaw' => $kodcaw,
            'nosiri' => $nosiri,
            'tarikhdaftar' => date_format($tarikhdaftar, "Y/m/d"),
            'nopelanggan' => $nopelanggan,
            'kplama' => $kplama,
            'kpbaru' => $kpbaru,
            'nama' => $nama,
            't_lahir' => date_format($t_lahir, "Y/m/d"),
            'jantina' => $jantina,
            'alamat1' => $alamat1,
            'alamat2' => $alamat2,
            'alamat3' => $alamat3,
            'alamat4' => $alamat4,
            'poskod' => $poskod,
            'koddaerah' => $koddaerah,
            'kodnegeri' => $kodnegeri,
            'telefon' => $telefon,
            'jumpinjaman' => $jumpinjaman,
            't_gadai' => date_format($t_gadai, "Y/m/d"),
            'pinjamhari' => $pinjamhari,
            'bumiputra' => $bumiputra,
            'warganegara' => $warganegara,
            'bangsa' => $bangsa,
            'kodkerja' => $kodkerja,
            'kodugama' => $kodugama,
            'kodstatus' => $kodstatus,
            'kodbank' => $kodbank,
            'noakaun' => $noakaun,
            'nota' => $nota,
            'teller' => $teller,
            'pelulus' => $pelulus,
            't_ubah' => date_format($t_ubah, "Y/m/d"),
            'm_ubah' => date_format($m_ubah, "H:i:s"),
            'aktif' => $aktif,
            'yuranahli' => $yuranahli,
            'nopelangganlama' => $nopelangganlama,
            'tujuangadai' => $tujuangadai,
            'kodkerjabaru' => $kodkerjabaru,
            'tagperingatan' => $tagperingatan,
            'namateller' => $namateller,
            'kumpulan' => $kumpulan,
            'telefon2' => $telefon2,
            'tagpelanggan' => $tagpelanggan,
        ]);
    
        return (int) $this->connection->lastInsertId();
    }

    public function update( string $ahli,
                            int $kodcaw, 
                            string $nosiri, 
                            \DateTime $tarikhdaftar, 
                            string $nopelanggan, 
                            string $kplama, 
                            string $kpbaru, 
                            string $nama, 
                            \DateTime $t_lahir, 
                            string $jantina, 
                            string $alamat1,
                            string $alamat2, 
                            string $alamat3, 
                            string $alamat4, 
                            string $poskod,
                            string $koddaerah, 
                            string $kodnegeri,
                            string $telefon, 
                            string $jumpinjaman, 
                            \DateTime $t_gadai, 
                            string $pinjamhari, 
                            string $bumiputra, 
                            string $warganegara, 
                            string $bangsa, 
                            string $kodkerja, 
                            string $kodugama, 
                            string $kodstatus, 
                            string $kodbank, 
                            string $noakaun, 
                            string $nota, 
                            string $teller, 
                            string $pelulus, 
                            \DateTime $t_ubah,
                            \DateTime $m_ubah, 
                            string $aktif, 
                            string $yuranahli, 
                            string $nopelangganlama, 
                            string $tujuangadai, 
                            string $kodkerjabaru, 
                            string $tagperingatan, 
                            string $namateller, 
                            int $kumpulan,
                            string $telefon2, 
                            string $tagpelanggan)
                            : int
    {
        $this->connection->update('customer', [
            'ahli' => $ahli,
            'kodcaw' => $kodcaw,
            'nosiri' => $nosiri,
            'tarikhdaftar' => date_format($tarikhdaftar, "Y/m/d"),
            'nopelanggan' => $nopelanggan,
            'kplama' => $kplama,
            'kpbaru' => $kpbaru,
            'nama' => $nama,
            't_lahir' => date_format($t_lahir, "Y/m/d"),
            'jantina' => $jantina,
            'alamat1' => $alamat1,
            'alamat2' => $alamat2,
            'alamat3' => $alamat3,
            'alamat4' => $alamat4,
            'poskod' => $poskod,
            'koddaerah' => $koddaerah,
            'kodnegeri' => $kodnegeri,
            'telefon' => $telefon,
            'jumpinjaman' => $jumpinjaman,
            't_gadai' => date_format($t_gadai, "Y/m/d"),
            'pinjamhari' => $pinjamhari,
            'bumiputra' => $bumiputra,
            'warganegara' => $warganegara,
            'bangsa' => $bangsa,
            'kodkerja' => $kodkerja,
            'kodugama' => $kodugama,
            'kodstatus' => $kodstatus,
            'kodbank' => $kodbank,
            'noakaun' => $noakaun,
            'nota' => $nota,
            'teller' => $teller,
            'pelulus' => $pelulus,
            't_ubah' => date_format($t_ubah, "Y/m/d"),
            'm_ubah' => date_format($m_ubah, "H:i:s"),
            'aktif' => $aktif,
            'yuranahli' => $yuranahli,
            'nopelangganlama' => $nopelangganlama,
            'tujuangadai' => $tujuangadai,
            'kodkerjabaru' => $kodkerjabaru,
            'tagperingatan' => $tagperingatan,
            'namateller' => $namateller,
            'kumpulan' => $kumpulan,
            'telefon2' => $telefon2,
            'tagpelanggan' => $tagpelanggan,
        ], [
            'kpbaru' => $kpbaru
        ]);

        return $kpbaru;
    }
    
    public function delete(string $kpbaru): int
    {
        $this->connection->delete('customer', [
            'kpbaru' => $kpbaru
        ]);

        return $kpbaru;
    }
}
