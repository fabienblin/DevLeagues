<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DevLeaguesBundle\Entity\Event;
use DevLeaguesBundle\Entity\Technology;
use DevLeaguesBundle\Entity\User;
use DevLeaguesBundle\Entity\Reward;

class NewEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('name')
			->add('endTimestamp')
			->add('technologies')
			->add('users')
			->add('rewards')
			->add('save', SubmitType::class);
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Event::class,
		));
	}
}
