<?php

namespace App\Service;

use App\Model;
use App\Repository;
use Fusio\Engine\ContextInterface;
use Fusio\Engine\DispatcherInterface;
use PSX\CloudEvents\Builder;
use PSX\Framework\Util\Uuid;
use PSX\Http\Exception as StatusCode;

/**
 * Customer service which is responsible to create, update and delete a customer. Please take a look at the page service for
 * more details
 */
class Customer
{
    /**
     * @var Repository\Customer
     */
    private $repository;

    /**
     * @var DispatcherInterface
     */
    private $dispatcher;

    public function __construct(Repository\Customer $repository, DispatcherInterface $dispatcher)
    {
        $this->repository = $repository;
        $this->dispatcher = $dispatcher;
    }

    public function create(Model\Customer $customer, ContextInterface $context): int
    {
        $this->assertCustomer($customer);

        $this->repository->insert(
                                        $customer->getahli(),
                                        $customer->getkodcaw(),
                                        $customer->getnosiri(),
                                        $customer->gettarikhdaftar(),
                                        $customer->getnopelanggan(),
                                        $customer->getkplama(),
                                        $customer->getkpbaru(),
                                        $customer->getnama(),
                                        $customer->gett_lahir(),
                                        $customer->getjantina(),
                                        $customer->getalamat1(),
                                        $customer->getalamat2(),
                                        $customer->getalamat3(),
                                        $customer->getalamat4(),
                                        $customer->getposkod(),
                                        $customer->getkoddaerah(),
                                        $customer->getkodnegeri(),
                                        $customer->gettelefon(),
                                        $customer->getjumpinjaman(),
                                        $customer->gett_gadai(),
                                        $customer->getpinjamhari(),
                                        $customer->getbumiputra(),
                                        $customer->getwarganegara(),
                                        $customer->getbangsa(),
                                        $customer->getkodkerja(),
                                        $customer->getkodugama(),
                                        $customer->getkodstatus(),
                                        $customer->getkodbank(),
                                        $customer->getnoakaun(),
                                        $customer->getnota(),
                                        $customer->getteller(),
                                        $customer->getpelulus(),
                                        $customer->gett_ubah(),
                                        $customer->getm_ubah(),
                                        $customer->getaktif(),
                                        $customer->getyuranahli(),
                                        $customer->getnopelangganlama(),
                                        $customer->gettujuangadai(),
                                        $customer->getkodkerjabaru(),
                                        $customer->gettagperingatan(),
                                        $customer->getnamateller(),
                                        $customer->getkumpulan(),
                                        $customer->gettelefon2(),
                                        $customer->gettagpelanggan(),
        );
        $kpbaru = $customer->getkpbaru();
        $row = $this->repository->findById($kpbaru);
        // $row = $this->repository->insert($kpbaru);
        $this->dispatchEvent('customer_created', $row, $kpbaru);

        return $kpbaru;
    }

    public function update(string $kpbaru, Model\Customer $customer): int
    {
        $row = $this->repository->findById($kpbaru);
        if (empty($row)) {
            throw new StatusCode\NotFoundException('Customer does not exist');
        }

        $this->assertCustomer($customer);

        $this->repository->update(
                                    $customer->getahli(),
                                    $customer->getkodcaw(),
                                    $customer->getnosiri(), 
                                    $customer->gettarikhdaftar(),
                                    $customer->getnopelanggan(), 
                                    $customer->getkplama(),
                                    $customer->getkpbaru(),
                                    $customer->getnama(), 
                                    $customer->gett_lahir(), 
                                    $customer->getjantina(), 
                                    $customer->getalamat1(), 
                                    $customer->getalamat2(), 
                                    $customer->getalamat3(), 
                                    $customer->getalamat4(), 
                                    $customer->getposkod(), 
                                    $customer->getkoddaerah(), 
                                    $customer->getkodnegeri(), 
                                    $customer->gettelefon(), 
                                    $customer->getjumpinjaman(), 
                                    $customer->gett_gadai(),
                                    $customer->getpinjamhari(),
                                    $customer->getbumiputra(), 
                                    $customer->getwarganegara(), 
                                    $customer->getbangsa(), 
                                    $customer->getkodkerja(), 
                                    $customer->getkodugama(), 
                                    $customer->getkodstatus(), 
                                    $customer->getkodbank(), 
                                    $customer->getnoakaun(), 
                                    $customer->getnota(), 
                                    $customer->getteller(), 
                                    $customer->getpelulus(), 
                                    $customer->gett_ubah(), 
                                    $customer->getm_ubah(), 
                                    $customer->getaktif(), 
                                    $customer->getyuranahli(), 
                                    $customer->getnopelangganlama(), 
                                    $customer->gettujuangadai(), 
                                    $customer->getkodkerjabaru(), 
                                    $customer->gettagperingatan(), 
                                    $customer->getnamateller(), 
                                    $customer->getkumpulan(), 
                                    $customer->gettelefon2(),
                                    $customer->gettagpelanggan()
            );

        $row = $this->repository->findById($kpbaru);
        $this->dispatchEvent('customer_updated', $row, $kpbaru);

        return $kpbaru;
    }

    public function delete(string $kpbaru): int
    {

        // echo $kpbaru;
        // exit();
        $row = $this->repository->findById($kpbaru);
        
        if (empty($row)) {
            throw new StatusCode\NotFoundException('Provided customer does not exist');
        }
        
        $this->repository->delete($kpbaru);
        $this->dispatchEvent('customer_deleted', $row, $kpbaru);
        
        return $kpbaru;
    }

    private function dispatchEvent(string $type, array $data, string $kpbaru)
    {
        $event = (new Builder())
            ->withId(Uuid::pseudoRandom())
            ->withSource('/customer/' . $kpbaru)
            ->withType($type)
            ->withDataContentType('application/json')
            ->withData($data)
            ->build();

        $this->dispatcher->dispatch($type, $event);
    }

    //validation for each column
    private function assertCustomer(Model\Customer $customer)
    {
        
        $kpbaru = $customer->getkpbaru();
        
        if ($kpbaru === null) {
            throw new StatusCode\BadRequestException('No kpbaru provided');
        }

        // $content = $customer->getContent();
        // if (empty($content)) {
        //     throw new StatusCode\BadRequestException('No content provided');
        // }
    }
}
