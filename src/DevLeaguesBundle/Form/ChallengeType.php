<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DevLeaguesBundle\Entity\Challenge;

/**
*
*/
class ChallengeType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('name', TextType::class)
		->add('description', TextareaType::class)
		->add('end_timestamp', DateTimeType::class)
		//->add('Technologies', TechnologyType::class)
		//->add('Rewards', RewardType::class)
		->add('save', SubmitType::class)
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Challenge::class,
		));
	}
}
