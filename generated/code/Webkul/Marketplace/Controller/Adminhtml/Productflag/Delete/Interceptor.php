<?php
namespace Webkul\Marketplace\Controller\Adminhtml\Productflag\Delete;

/**
 * Interceptor class for @see \Webkul\Marketplace\Controller\Adminhtml\Productflag\Delete
 */
class Interceptor extends \Webkul\Marketplace\Controller\Adminhtml\Productflag\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Webkul\Marketplace\Api\Data\ProductFlagReasonInterfaceFactory $productFlagFactory)
    {
        $this->___init();
        parent::__construct($context, $productFlagFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
