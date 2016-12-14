<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		/*$builder->add('role', ChoiceType::class, array(
			'multiple' => false,
			'choices' => array(
				'ROLE_ADMIN' => 'Admin',
			)
		));*/
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'devleagues_user_registration';
    }

	public function getName()
	{
		return $this->getBlockPrefix();
	}
}
