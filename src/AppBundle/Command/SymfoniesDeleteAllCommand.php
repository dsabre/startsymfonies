<?php

namespace AppBundle\Command;

use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SymfoniesDeleteAllCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfonies:delete-all')
			->setDescription('Delete all symfonies from database')
		;
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$this->getContainer()->get(SymfoniesService::class)->deleteAll();
		
		$output->writeln('<info>All symfonies deleted</info>');
	}
}
