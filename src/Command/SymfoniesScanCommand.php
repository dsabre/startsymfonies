<?php

namespace App\Command;

use App\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SymfoniesScanCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfonies:scan')
			->setDescription('Scan the directories and save all symfonies found on db');
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$this->getContainer()->get(SymfoniesService::class)->scan();
		
		$output->writeln('<info>Scan completed</info>');
	}
}
