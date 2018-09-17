<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
				'data'     => 'latest'
			])
			->add('phpExecutable', ChoiceType::class, [
				'choices'      => $options['phpExecutables'],
				'choice_label' => function($choiceValue, $key, $value){
					return $choiceValue;
				},
			])
		;
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
