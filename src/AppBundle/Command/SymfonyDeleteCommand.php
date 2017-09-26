<?php

namespace AppBundle\Command;

use AppBundle\Entity\Symfony;
use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SymfonyDeleteCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfony:delete')
			->setDescription('Delete a symfony')
			->addArgument('symfony-id', InputArgument::REQUIRED, 'ID of the symfony to stop (you can see the id through the command <comment>"php bin/console app:symfonies:list-all"</comment>)')
		;
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$id = $input->getArgument('symfony-id');
		
		$symfony = $this->getContainer()->get('doctrine')->getRepository(Symfony::class)->find($id);
		
		$this->getContainer()->get(SymfoniesService::class)->delete($symfony);
		
		$output->writeln('<info>Symfony deleted correctly</info>');
	}
}
