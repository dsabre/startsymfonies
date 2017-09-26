<?php

namespace AppBundle\Command;

use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SymfoniesStartAllCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfonies:start-all')
			->setDescription('Start all symfonies with an ip and a port')
		;
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$this->getContainer()->get(SymfoniesService::class)->startAll();
		
		$output->writeln('<info>All symfonies started</info>');
	}
}
