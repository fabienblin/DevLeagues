<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_049c38402afd60a06e16e07fcc919cd2b867418a0b5f2ec8b5d57ff6a1f9e9a6 extends Twig_Template
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
        $__internal_94941a2512460f6bd63acc9b322e4490f7557a88de359fc26836f5b4a3755fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94941a2512460f6bd63acc9b322e4490f7557a88de359fc26836f5b4a3755fb6->enter($__internal_94941a2512460f6bd63acc9b322e4490f7557a88de359fc26836f5b4a3755fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5eecd3f4ada31c607cf6be6f0cdf1d95371d25af4a49888aaf4b8c357bb11c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eecd3f4ada31c607cf6be6f0cdf1d95371d25af4a49888aaf4b8c357bb11c07->enter($__internal_5eecd3f4ada31c607cf6be6f0cdf1d95371d25af4a49888aaf4b8c357bb11c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_94941a2512460f6bd63acc9b322e4490f7557a88de359fc26836f5b4a3755fb6->leave($__internal_94941a2512460f6bd63acc9b322e4490f7557a88de359fc26836f5b4a3755fb6_prof);

        
        $__internal_5eecd3f4ada31c607cf6be6f0cdf1d95371d25af4a49888aaf4b8c357bb11c07->leave($__internal_5eecd3f4ada31c607cf6be6f0cdf1d95371d25af4a49888aaf4b8c357bb11c07_prof);

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
