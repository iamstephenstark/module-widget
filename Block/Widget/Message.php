<?php

namespace IAmStephenStark\Widget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class Message
 * @package IAmStephenStark\Widget\Block\Widget
 */
class Message extends Template implements BlockInterface {

    /**
     * @var string
     */
    protected $_template = "widget/message.phtml";

    /**
     * Message constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
