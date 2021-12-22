<?php

namespace App\Action\Customer;

use App\Model\Message;
use App\Service\Customer;
use Fusio\Engine\ActionAbstract;
use Fusio\Engine\ContextInterface;
use Fusio\Engine\ParametersInterface;
use Fusio\Engine\RequestInterface;
use PSX\Http\Exception\InternalServerErrorException;
use PSX\Http\Exception\StatusCodeException;

/**
 * Action which deletes a comment. Similar to the create action it only invokes the
 * comment service to delete a specific comment
 */
class DeleteCustomer extends ActionAbstract
{
    /**
     * @var Customer
     */
    private $customerService;

    public function __construct(Customer $customerService)
    {
        $this->customerService = $customerService;
    }

    public function handle(RequestInterface $request, ParametersInterface $configuration, ContextInterface $context)
    {
        try {
            $kpbaru = $this->customerService->delete(
                (string) $request->get('kpbaru')
            );

            $message = new Message();
            $message->setSuccess(true);
            $message->setMessage('Customer successful deleted');
            $message->setId($kpbaru);

        } catch (StatusCodeException $e) {
            throw $e;
        } catch (\Throwable $e) {
            throw new InternalServerErrorException($e->getMessage());
        }

        return $this->response->build(200, [], $message);
    }
}
