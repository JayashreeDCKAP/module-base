<?php
/**
 * Created by PhpStorm.
 * User: dckap
 * Date: 26/2/19
 * Time: 5:40 PM
 */

namespace DCKAP\Base\Block\Adminhtml\System\Config;

/**
 * Class Partners
 * @package Mageplaza\Core\Block\Adminhtml\System\Config
 */
class Extensions extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * Render text
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = '';
        if ($element->getComment()) {
            $html .= '<div style="margin: auto; padding: 10px;">' . $element->getComment() . '</div>';
        }

        return $html;
    }

    /**
     * Return element html
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
