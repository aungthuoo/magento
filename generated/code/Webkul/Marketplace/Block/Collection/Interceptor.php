<?php
namespace Webkul\Marketplace\Block\Collection;

/**
 * Interceptor class for @see \Webkul\Marketplace\Block\Collection
 */
class Interceptor extends \Webkul\Marketplace\Block\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Stdlib\StringUtils $stringUtils, \Webkul\Marketplace\Helper\Data $mpHelper, \Webkul\Marketplace\Model\ProductFactory $mpProductModel, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $urlHelper, $productCollectionFactory, $layerResolver, $categoryRepository, $stringUtils, $mpHelper, $mpProductModel, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = false, $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        return $pluginInfo ? $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo) : parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailsHtml(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailsHtml');
        return $pluginInfo ? $this->___callPlugins('getProductDetailsHtml', func_get_args(), $pluginInfo) : parent::getProductDetailsHtml($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
