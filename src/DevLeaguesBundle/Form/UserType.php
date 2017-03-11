<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('firstName')
		->add('lastName')
		->add('userName')
		->add('email')
		->add('notoriety')
		->add('gold')
		->add('level')
		->add('avatar')
		->add('technologies', EntityType::class, array(
			'class'			=> 'DevLeaguesBundle\Entity\Technology\Technology',
			'choice_label'	=> 'name',
			'multiple'		=> true,
			'expanded'		=> true,
		))
		;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DevLeaguesBundle\Entity\User\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'devleaguesbundle_user';
    }


}
