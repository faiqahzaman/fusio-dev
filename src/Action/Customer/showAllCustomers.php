<?php

namespace App\Action\Customer;

use Fusio\Adapter\Sql\Action\SqlBuilderAbstract;
use Fusio\Engine\ContextInterface;
use Fusio\Engine\ParametersInterface;
use Fusio\Engine\RequestInterface;
use PSX\Sql\Builder;
use PSX\Sql\Condition;

/**
 * Action which returns a collection response of all comments. It shows how to build complex nested JSON structures
 * based on SQL queries
 */
class showAllCustomers extends SqlBuilderAbstract
{
    public function handle(RequestInterface $request, ParametersInterface $configuration, ContextInterface $context)
    {
        /** @var \Doctrine\DBAL\Connection $connection */
        $connection = $this->connector->getConnection('caw_bentong');
        $builder    = new Builder($connection);

        $startIndex = (int) $request->get('startIndex');
        $startIndex = $startIndex <= 0 ? 0 : $startIndex;
        $condition  = $this->getCondition($request);

        $sql = 'SELECT  page.ahli,
                        page.kodcaw,
                        page.nosiri,
                        page.tarikhdaftar,
                        page.nopelanggan,
                        page.kplama,
                        page.kpbaru,
                        page.nama,
                        page.t_lahir,
                        page.jantina,
                        page.alamat1,
                        page.alamat2,
                        page.alamat3,
                        page.alamat4,
                        page.poskod,
                        page.koddaerah,
                        page.kodnegeri,
                        page.telefon,
                        page.jumpinjaman,
                        page.t_gadai,
                        page.pinjamhari,
                        page.bumiputra,
                        page.warganegara,
                        page.bangsa,
                        page.kodkerja,
                        page.kodugama,
                        page.kodstatus,
                        page.kodbank,
                        page.noakaun,
                        page.nota,
                        page.teller,
                        page.pelulus,
                        page.t_ubah,
                        page.m_ubah,
                        page.aktif,
                        page.yuranahli,
                        page.nopelangganlama,
                        page.tujuangadai,
                        page.kodkerjabaru,
                        page.tagperingatan,
                        page.namateller,
                        page.kumpulan,
                        page.telefon2,
                        page.tagpelanggan
                  FROM customer page
                 WHERE ' . $condition->getExpression($connection->getDatabasePlatform()) . '
              ORDER BY page.kpbaru DESC';

        $parameters = array_merge($condition->getValues(), ['startIndex' => $startIndex]);
        $definition = [
            'totalResults' => $builder->doValue('SELECT COUNT(*) AS cnt FROM customer', [], $builder->fieldInteger('cnt')),
            'startIndex' => $startIndex,
            'entries' => $builder->doCollection($sql, $parameters, [
                'kpbaru' => 'kpbaru',
                // 'refId' => $builder->fieldInteger('ref_id'),
                'ahli' => 'ahli',
                'kodcaw' => 'kodcaw',
                'nosiri' => 'nosiri',
                'nopelanggan' => 'nopelanggan',
                'kplama' => 'kplama',
                'kpbaru' => 'kpbaru',
                'nama' => 'nama',
                't_lahir' => 't_lahir',
                'jantina' => 'jantina',
                'alamat1' => 'alamat1',
                'alamat2' => 'alamat2',
                'alamat3' => 'alamat3',
                'alamat4' => 'alamat4',
                'poskod' => 'poskod',
                'koddaerah' => 'koddaerah',
                'kodnegeri' => 'kodnegeri',
                'telefon' => 'telefon',
                'jumpinjaman' => 'jumpinjaman',
                'pinjamhari' => 'pinjamhari',
                'bumiputra' => 'bumiputra',
                'warganegara' => 'warganegara',
                'bangsa' => 'bangsa',
                'kodkerja' => 'kodkerja',
                'kodugama' => 'kodugama',
                'kodstatus' => 'kodstatus',
                'kodbank' => 'kodbank',
                'noakaun' => 'noakaun',
                'nota' => 'nota',
                'teller' => 'teller',
                'pelulus' => 'pelulus',
                't_ubah' => 't_ubah',
                'm_ubah' => 'm_ubah',
                'aktif' => 'aktif',
                'yuranahli' => 'yuranahli',
                'nopelangganlama' => 'nopelangganlama',
                'tujuangadai' => 'tujuangadai',
                'kodkerjabaru' => 'kodkerjabaru',
                'tagperingatan' => 'tagperingatan',
                'namateller' => 'namateller',
                'kumpulan' => 'kumpulan',
                'telefon2' => 'telefon2',
                'tagpelanggan' => 'tagpelanggan',
                'tarikhdaftar' => $builder->fieldDateTime('tarikhdaftar'),
                't_lahir' => $builder->fieldDateTime('t_lahir'),
                't_gadai' => $builder->fieldDateTime('t_gadai'),
                'links' => [
                    'self' => $builder->fieldReplace('/customer/{kpbaru}'),
                ]
            ])
        ];

        return $this->response->build(200, [], $builder->build($definition));
    }

    // validation for each column

    // $content = $request->get('content');
    // if (!empty($content)) {
    //     $condition->like('comment.content', '%' . $content . '%');
    // }


    private function getCondition(RequestInterface $request): Condition
    {
        $condition  = new Condition();

        $ahli = $request->get('ahli');
        if (!empty($ahli)) {
            $condition->equals('customer.ahli', (string) $ahli);
        }

        $kodcaw = $request->get('kodcaw');
        if (!empty($kodcaw)) {
            $condition->equals('customer.kodcaw', (string) $kodcaw);
        }

        // $tarikhdaftar = $request->get('tarikhdaftar');
        // if (!empty($tarikhdaftar)) {
        //     $condition->equals('customer.tarikhdaftar', (datetime) $tarikhdaftar);
        // }

        $nopelanggan = $request->get('nopelanggan');
        if (!empty($nopelanggan)) {
            $condition->equals('customer.nopelanggan', (int) $nopelanggan);
        }

        $kpbaru = $request->get('kpbaru');
        if (!empty($kpbaru)) {
            $condition->equals('customer.kpbaru', (string) $kpbaru);
        }

        $nama = $request->get('nama');
        if (!empty($nama)) {
            $condition->equals('customer.nama', (string) $nama);
        }

        return $condition;
    }
}
