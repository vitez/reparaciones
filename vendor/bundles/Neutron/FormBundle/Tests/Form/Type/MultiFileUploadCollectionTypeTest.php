<?php
namespace Neutron\FormBundle\Tests\Form\Type;

use Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase;

use Neutron\FormBundle\Form\Type\MultiFileUploadType;

use Neutron\FormBundle\Form\Type\MultiFileUploadCollectionType;

use Neutron\FormBundle\Tests\Form\Extension\TypeExtensionTest;

class MultiFleUploadCollectionTypeTest extends TypeTestCase
{
    public function testInvalidConfigs()
    {
        $this->setExpectedException('InvalidArgumentException');
    	$form = $this->factory->create('neutron_multi_file_upload_collection');
    }

    public function testDefaultConfigs()
    {
        $form = $this->factory->create('neutron_multi_file_upload_collection', null, array(
            'configs' => array('extensions' => 'pdf')
        ));
        $view = $form->createView();
        $configs = $view->get('configs');
        $this->assertNotEmpty($configs);
    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Tests\Component\Form\Extension\Core\Type.TypeTestCase::getExtensions()
     */
    protected function getExtensions()
    {
        $options = array(
            'runtimes' => 'html5',
            'max_upload_size' => '4M',
            'temporary_dir' => 'temp',
        );
        
    	return array(
			new TypeExtensionTest(
				array(
				    new MultiFileUploadCollectionType($this->createSessionMock(), $this->createRouterMock(),
				            $this->createMockFormEventSubscriber(), $options),
				    new MultiFileUploadType()
			    )
			)
    	);
    }

    protected function createSessionMock()
    {
        $session =
        $this->getMockBuilder('Symfony\Component\HttpFoundation\Session\Session')
            ->disableOriginalConstructor()
            ->getMock();
    
        return $session;
    }
    
    protected function createRouterMock()
    {
    
        $router =
        $this->getMockBuilder('Symfony\Bundle\FrameworkBundle\Routing\Router')
            ->disableOriginalConstructor()
            ->getMock();
    
        $router
            ->expects($this->any())
            ->method('generate')
            ->will($this->returnValue('http://neutron.local/'))
        ;
    
        return $router;
    }
    
    
    protected function createMockFormEventSubscriber()
    {
        $mock =
        $this->getMockBuilder('Symfony\Component\EventDispatcher\EventSubscriberInterface')
            ->disableOriginalConstructor()
            ->getMock()
        ;
    
        $mock::staticExpects($this->any())
            ->method('getSubscribedEvents')
            ->will($this->returnValue(array()))
        ;
    
        return $mock;
    }
}