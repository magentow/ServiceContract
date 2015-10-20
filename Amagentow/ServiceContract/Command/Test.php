<?php
namespace AmagentoW\ServiceContract\Command;

use AmagentoW\ServiceContract\Model\Entity;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class Test extends Command
{
	public function __construct(Entity $entity)
    {

        $this->entity      = $entity;
 
        return parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName("amw:servicecontract");
        $this->setDescription("display of magento dom service contract");
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
		$this->entity->setid(1);
		$this->entity->setattr1("1_attr1");
		$this->entity->setattr2("1_attr2");
        $output->writeln(
            "entity_id :".$this->entity->getid()			
        );  
	$output->writeln(
            "attribute1 :".$this->entity->getattr1()		
        );  
 $output->writeln(
            "attribute2 :".$this->entity->getattr2()		
        );  
    }	
	
}