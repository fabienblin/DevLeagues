<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_50587af18d4e2064065559daa95123b4ca5ed882bd8202e7ef75a080573e8ea8 extends Twig_Template
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
        $__internal_e732dfd1fe4f2f5685344c7c03c872a412b185410e8f06d2e100856beb39cca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e732dfd1fe4f2f5685344c7c03c872a412b185410e8f06d2e100856beb39cca6->enter($__internal_e732dfd1fe4f2f5685344c7c03c872a412b185410e8f06d2e100856beb39cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_35bf159eca95b23df27e2fed2e90a7b501e39fc54521dc306f512d4753bd6d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bf159eca95b23df27e2fed2e90a7b501e39fc54521dc306f512d4753bd6d72->enter($__internal_35bf159eca95b23df27e2fed2e90a7b501e39fc54521dc306f512d4753bd6d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e732dfd1fe4f2f5685344c7c03c872a412b185410e8f06d2e100856beb39cca6->leave($__internal_e732dfd1fe4f2f5685344c7c03c872a412b185410e8f06d2e100856beb39cca6_prof);

        
        $__internal_35bf159eca95b23df27e2fed2e90a7b501e39fc54521dc306f512d4753bd6d72->leave($__internal_35bf159eca95b23df27e2fed2e90a7b501e39fc54521dc306f512d4753bd6d72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
