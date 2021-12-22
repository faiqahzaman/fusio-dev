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
 * Action which creates a Customer. Similar to the page create action it only
 * invokes the Customer service to create a specific Customer
 */
class CreateCustomer extends ActionAbstract
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
            $id = $this->customerService->create(
                $request->getPayload(),
                $context
            );

            $message = new Message();
            $message->setSuccess(true);
            $message->setMessage('Customer successfully created');
            $message->setId($id);
        } catch (StatusCodeException $e) {
            throw $e;
        } catch (\Throwable $e) {
            throw new InternalServerErrorException($e->getMessage());
        }

        return $this->response->build(201, [], $message);
    }
}
