<?php

namespace AppBundle\Command;

use AppBundle\Entity\Symfony;
use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SymfonyStartCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfony:start')
			->setDescription('Start a symfony')
			->addArgument('symfony-id', InputArgument::REQUIRED, 'ID of the symfony to start (you can see the id through the command <comment>"php bin/console app:symfonies:list-all"</comment>)')
			->addArgument('ip', InputArgument::OPTIONAL, 'IP where start the symfony', '127.0.0.1')
			->addArgument('port', InputArgument::OPTIONAL, 'Port where start the symfony', '8000')
			->addArgument('entry-point', InputArgument::OPTIONAL, 'The first page to visit in the link', '')
		;
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$id = $input->getArgument('symfony-id');
		$ip = $input->getArgument('ip');
		$port = $input->getArgument('port');
		$entry = $input->getArgument('entry-point');
		
		$symfony = $this->getContainer()->get('doctrine')->getRepository(Symfony::class)->find($id);
		
		$this->getContainer()->get(SymfoniesService::class)->startAndSave($symfony, $ip, $port, $entry);
		
		$output->writeln('<info>Symfony started correctly</info>');
	}
}
