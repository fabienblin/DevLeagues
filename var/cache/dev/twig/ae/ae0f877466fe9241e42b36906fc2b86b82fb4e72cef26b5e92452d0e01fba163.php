<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8f1c23a8d0c0dea8a8602bb3938d3854bff73fd44b7f69eb125d13762cc5ba7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34eb6a64b9593292b8fdf7ac1c0e4200907576bfe7ba9bb22a7780e126638f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34eb6a64b9593292b8fdf7ac1c0e4200907576bfe7ba9bb22a7780e126638f8a->enter($__internal_34eb6a64b9593292b8fdf7ac1c0e4200907576bfe7ba9bb22a7780e126638f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_24b6dc0413a2e27ddbe568f68e8739847478f7f3168bef1f95f2ea82786a1f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b6dc0413a2e27ddbe568f68e8739847478f7f3168bef1f95f2ea82786a1f89->enter($__internal_24b6dc0413a2e27ddbe568f68e8739847478f7f3168bef1f95f2ea82786a1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_34eb6a64b9593292b8fdf7ac1c0e4200907576bfe7ba9bb22a7780e126638f8a->leave($__internal_34eb6a64b9593292b8fdf7ac1c0e4200907576bfe7ba9bb22a7780e126638f8a_prof);

        
        $__internal_24b6dc0413a2e27ddbe568f68e8739847478f7f3168bef1f95f2ea82786a1f89->leave($__internal_24b6dc0413a2e27ddbe568f68e8739847478f7f3168bef1f95f2ea82786a1f89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
