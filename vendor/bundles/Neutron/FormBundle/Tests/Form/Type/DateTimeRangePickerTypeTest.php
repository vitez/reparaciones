<?php
namespace Neutron\FormBundle\Tests\Form\Type;

use Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase;

use Neutron\FormBundle\Form\Type\DateTimePickerType;

use Neutron\FormBundle\Tests\Form\Extension\TypeExtensionTest;

use Neutron\FormBundle\Form\Type\DateTimeRangePickerType;

class DateTimeRangePickerTypeTest extends TypeTestCase
{


    public function testDefaultConfig()
    {
        $form = $this->factory->create('neutron_datetimerangepicker');

        $form->bind(array('first_datetime' => '2012-12-21 10:22', 'second_datetime' => '2012-12-22 12:15'));
        $form->createView();
        $data = $form->getData();
    
        $this->assertCount(2, $data);
        $this->assertInstanceOf('\DateTime', $data['first_datetime']);
        $this->assertInstanceOf('\DateTime', $data['second_datetime']);
        $this->assertTrue($data['second_datetime'] > $data['first_datetime']);
    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Tests\Component\Form\Extension\Core\Type.TypeTestCase::getExtensions()
     */
    protected function getExtensions()
    {
    	return array(
			new TypeExtensionTest(
				array(
				    new DateTimeRangePickerType(),
				    new DateTimePickerType()
				)
			)
    	);
    }

}