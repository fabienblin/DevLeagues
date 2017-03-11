<?php

namespace DevLeaguesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ChallengeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('name')
		->add('begin')
		->add('end')
		->add('description')
		->add('technologies', EntityType::class, array(
			'class'			=> 'DevLeaguesBundle\Entity\Technology\Technology',
			'choice_label'	=> 'name',
			'multiple'		=> true,
			'expanded'		=> true,
		))
		->add('rewards', EntityType::class, array(
			'class'			=> 'DevLeaguesBundle\Entity\Reward\Reward',
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
            'data_class' => 'DevLeaguesBundle\Entity\Challenge\Challenge'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'devleaguesbundle_challenge';
    }


}
