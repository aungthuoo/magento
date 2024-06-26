<?php
namespace Webkul\Marketplace\Controller\Adminhtml\Seller\MassApprove;

/**
 * Interceptor class for @see \Webkul\Marketplace\Controller\Adminhtml\Seller\MassApprove
 */
class Interceptor extends \Webkul\Marketplace\Controller\Adminhtml\Seller\MassApprove implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Webkul\Marketplace\Model\ResourceModel\Seller\CollectionFactory $collectionFactory, \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor, \Magento\Catalog\Model\Product\Action $productAction, \Webkul\Marketplace\Helper\Data $mpHelper, \Webkul\Marketplace\Helper\Email $mpEmailHelper, \Webkul\Marketplace\Model\ProductFactory $productModel, \Magento\Customer\Model\CustomerFactory $customerModel)
    {
        $this->___init();
        parent::__construct($context, $filter, $date, $dateTime, $storeManager, $productRepository, $collectionFactory, $productPriceIndexerProcessor, $productAction, $mpHelper, $mpEmailHelper, $productModel, $customerModel);
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
