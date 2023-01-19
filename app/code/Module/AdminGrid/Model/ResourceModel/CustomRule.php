<?php
/**
 * Module AdminGrid Resource Model
 * @package Module/AdminGrid
 */
declare(strict_types=1);

namespace Module\AdminGrid\Model\ResourceModel;

class CustomRule extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('customer_dob_manage', 'id');
	}
}
