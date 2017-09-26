<?php

namespace AppBundle\Command;

use AppBundle\Entity\Symfony;
use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListSymfoniesCommand extends ContainerAwareCommand{
	
	/**
	 * {@inheritdoc}
	 */
	protected function configure(){
		$this
			->setName('app:symfonies:list-all')
			->setDescription('List all symfonies')
			->addOption('only-active', 'a', null, 'Get only active symfonies')
		;
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		$this->initStyles($output);
		
		$repo = $this->getContainer()->get('doctrine')->getRepository(Symfony::class);
		$symfonies = !$input->getOption('only-active') ? $repo->getAll() : $repo->getActives();
		
		// get max length for path column
		$pathMaxLength = 0;
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$len = strlen($symfony->getPath());
			
			if($len > $pathMaxLength){
				$pathMaxLength = $len;
			}
		}
		
		// print header row
		$string = sprintf('%4s | %-' . $pathMaxLength . 's | %-8s | %s',
			'ID',
			'PATH',
			'VERSION',
			'LINK'
		);
		
		$output->writeln($string);
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$link = '<stopped>Stopped</stopped>';
			if($symfony->getIp() && $symfony->getPort()){
				$link = sprintf('<info>http://%s:%s/%s</info>',
					$symfony->getIp(),
					$symfony->getPort(),
					$symfony->getEntryPoint()
				);
			}
			
			$string = sprintf('%4d | %-' . $pathMaxLength . 's | %-8s | %s',
				$symfony->getId(),
				$symfony->getPath(),
				$symfony->getVersion(),
				$link
			);
			
			$output->writeln($string);
		}
	}
	
	/**
	 * @param OutputInterface $output
	 */
	private function initStyles(OutputInterface $output){
		$style = new OutputFormatterStyle('red', 'default');
		$output->getFormatter()->setStyle('stopped', $style);
	}
}
