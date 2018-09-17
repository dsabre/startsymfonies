<?php

namespace AppBundle\Form;

use AppBundle\Utils\Services\SymfoniesService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewSymfonyType extends AbstractType{
	
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
			->add('path', TextType::class)
			->add('name', TextType::class)
			->add('version', TextType::class, [
				'required' => false,
				'data'     => SymfoniesService::VERSION_LATEST
			])
		;
		
		if(count($options['phpExecutables']) > 1){
			$builder->add('phpExecutable', ChoiceType::class, [
				'choices'      => $options['phpExecutables'],
				'choice_label' => function($choiceValue, $key, $value){
					return $choiceValue;
				},
			]);
		}
		else{
			$builder->add('phpExecutable', HiddenType::class, [
				'data' => reset($options['phpExecutables']),
			]);
		}
	}
	
	public function configureOptions(OptionsResolver $resolver){
		$resolver
			->setRequired('phpExecutables')
			->setAllowedTypes('phpExecutables', 'array')
		;
	}
	
	public function getBlockPrefix(){
		return 'app_bundle_new_symfony_type';
	}
}
