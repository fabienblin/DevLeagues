<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DevLeaguesBundle\Entity\League;

class NewLeagueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('name')
			->add('users')
			->add('save', SubmitType::class);
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => League::class,
		));
	}
}
