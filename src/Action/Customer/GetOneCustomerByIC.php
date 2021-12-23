<?php

namespace App\Action\Customer;

use Fusio\Adapter\Sql\Action\SqlBuilderAbstract;
use Fusio\Engine\ContextInterface;
use Fusio\Engine\ParametersInterface;
use Fusio\Engine\RequestInterface;
use PSX\Sql\Builder;

/**
 * Action which returns a specific Customer
 */
class Get extends SqlBuilderAbstract
{
    public function handle(RequestInterface $request, ParametersInterface $configuration, ContextInterface $context)
    {
        /** @var \Doctrine\DBAL\Connection $connection */
        $connection = $this->connector->getConnection('caw_bentong');
        $builder    = new Builder($connection);

        // $sql = 'SELECT comment.id,
        //                comment.ref_id,
        //                comment.content,
        //                comment.insert_date
        //           FROM app_comment comment
        //          WHERE comment.id = :id';

        $sql = 'SELECT  *
                        FROM customer 
        WHERE kpbaru = :kpbaru';

        $parameters = ['kpbaru' => (string) $request->get('kpbaru')];
        $definition = $builder->doEntity($sql, $parameters, [
            'kpbaru' => 'kpbaru',
            // 'refId' => $builder->fieldInteger('ref_id'),
            'ahli' => 'ahli',
            'kodcaw' => 'kodcaw',
            'nosiri' => $builder->fieldInteger('nosiri'),
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
            'koddaerah' => $builder->fieldInteger('koddaerah'),
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
            'tagperingatan' => $builder->fieldInteger('tagperingatan'),
            'namateller' => 'namateller',
            'kumpulan' => $builder->fieldInteger('kumpulan'),
            'telefon2' => 'telefon2',
            'tagpelanggan' => 'tagpelanggan',
            'tarikhdaftar' => $builder->fieldDateTime('tarikhdaftar'),
            't_lahir' => $builder->fieldDateTime('t_lahir'),
            't_gadai' => $builder->fieldDateTime('t_gadai'),
            'links' => [
                'self' => $builder->fieldReplace('/customer/{kpbaru}'),
            ]
        ]);

        return $this->response->build(200, [], $builder->build($definition));
    }
}
