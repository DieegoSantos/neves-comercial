<?php

class Smartwave_Porto_Model_System_Config_Source_Setting_General_Notice
{
    public function toOptionArray()
    {
        return array(
            array('value' => '0', 'label' => Mage::helper('porto')->__('No')),
            array('value' => '1', 'label' => Mage::helper('porto')->__('Above of the Header')),
            array('value' => '2', 'label' => Mage::helper('porto')->__('Below of the Header'))
        );
    }
}