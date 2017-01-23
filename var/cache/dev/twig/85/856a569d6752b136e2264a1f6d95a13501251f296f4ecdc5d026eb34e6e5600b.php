<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7ecac290cec6d6aa7b41f39b7a04c6710ff731a719920a1ee6aacc67ae2a06bc extends Twig_Template
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
        $__internal_ce912aab7a5f3feff0230cf30f6cc642433d4ab804c321a499f77f781f22fb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce912aab7a5f3feff0230cf30f6cc642433d4ab804c321a499f77f781f22fb79->enter($__internal_ce912aab7a5f3feff0230cf30f6cc642433d4ab804c321a499f77f781f22fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a329476f8e0d1a889f41b3e705f1415958239d1b8ac4acaaa98f7c9a9b3917db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a329476f8e0d1a889f41b3e705f1415958239d1b8ac4acaaa98f7c9a9b3917db->enter($__internal_a329476f8e0d1a889f41b3e705f1415958239d1b8ac4acaaa98f7c9a9b3917db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ce912aab7a5f3feff0230cf30f6cc642433d4ab804c321a499f77f781f22fb79->leave($__internal_ce912aab7a5f3feff0230cf30f6cc642433d4ab804c321a499f77f781f22fb79_prof);

        
        $__internal_a329476f8e0d1a889f41b3e705f1415958239d1b8ac4acaaa98f7c9a9b3917db->leave($__internal_a329476f8e0d1a889f41b3e705f1415958239d1b8ac4acaaa98f7c9a9b3917db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
