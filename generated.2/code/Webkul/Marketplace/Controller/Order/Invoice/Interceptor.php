<?php
namespace Webkul\Marketplace\Controller\Order\Invoice;

/**
 * Interceptor class for @see \Webkul\Marketplace\Controller\Order\Invoice
 */
class Interceptor extends \Webkul\Marketplace\Controller\Order\Invoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Sales\Model\Order\Email\Sender\InvoiceSender $invoiceSender, \Magento\Sales\Model\Order\Email\Sender\ShipmentSender $shipmentSender, \Magento\Sales\Model\Order\ShipmentFactory $shipmentFactory, \Magento\Sales\Model\Order\Shipment $shipment, \Magento\Sales\Model\Order\Email\Sender\CreditmemoSender $creditmemoSender, \Magento\Sales\Api\CreditmemoRepositoryInterface $creditmemoRepository, \Magento\Sales\Model\Order\CreditmemoFactory $creditmemoFactory, \Magento\Sales\Api\InvoiceRepositoryInterface $invoiceRepository, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Framework\Registry $coreRegistry, \Magento\Customer\Model\Session $customerSession, \Webkul\Marketplace\Helper\Orders $orderHelper, \Webkul\Marketplace\Helper\Notification $notificationHelper, \Webkul\Marketplace\Helper\Data $helper, \Magento\Sales\Api\CreditmemoManagementInterface $creditmemoManagement, \Webkul\Marketplace\Model\SaleslistFactory $saleslistFactory, \Magento\Customer\Model\Url $customerUrl, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Webkul\Marketplace\Model\Order\Pdf\Creditmemo $creditmemoPdf, \Webkul\Marketplace\Model\Order\Pdf\Invoice $invoicePdf, \Webkul\Marketplace\Model\OrdersFactory $mpOrdersModel, \Magento\Sales\Model\ResourceModel\Order\Invoice\Collection $invoiceCollection, \Magento\Sales\Api\InvoiceManagementInterface $invoiceManagement, \Magento\Catalog\Model\ProductFactory $productModel, \Webkul\Marketplace\Model\SellerFactory $mpSellerModel, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $invoiceSender, $shipmentSender, $shipmentFactory, $shipment, $creditmemoSender, $creditmemoRepository, $creditmemoFactory, $invoiceRepository, $stockConfiguration, $orderRepository, $orderManagement, $coreRegistry, $customerSession, $orderHelper, $notificationHelper, $helper, $creditmemoManagement, $saleslistFactory, $customerUrl, $date, $fileFactory, $creditmemoPdf, $invoicePdf, $mpOrdersModel, $invoiceCollection, $invoiceManagement, $productModel, $mpSellerModel, $logger);
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

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
