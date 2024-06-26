<?php
namespace Webkul\Marketplace\Model\ResourceModel\Saleperpartner\Grid\Collection;

/**
 * Interceptor class for @see \Webkul\Marketplace\Model\ResourceModel\Saleperpartner\Grid\Collection
 */
class Interceptor extends \Webkul\Marketplace\Model\ResourceModel\Saleperpartner\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactoryInterface, \Psr\Log\LoggerInterface $loggerInterface, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategyInterface, \Magento\Framework\Event\ManagerInterface $eventManagerInterface, \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, $mainTable, $eventPrefix, $eventObject, $resourceModel, $model = 'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\Document', $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactoryInterface, $loggerInterface, $fetchStrategyInterface, $eventManagerInterface, $storeManagerInterface, $mainTable, $eventPrefix, $eventObject, $resourceModel, $model, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
