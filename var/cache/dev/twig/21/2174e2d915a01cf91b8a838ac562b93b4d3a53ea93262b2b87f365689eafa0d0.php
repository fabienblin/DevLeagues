<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_646d281b3aa2624748405f72963ca4d075bd6a26723eedab207b669d3c94c871 extends Twig_Template
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
        $__internal_a313ddebd15ceba0a0b48459f26719fd40cae18e90b511f081a9c48ffef854a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a313ddebd15ceba0a0b48459f26719fd40cae18e90b511f081a9c48ffef854a2->enter($__internal_a313ddebd15ceba0a0b48459f26719fd40cae18e90b511f081a9c48ffef854a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f945f697aeeb97ad109ae71d4d718c1cdbfcda08999a5418bc21e18fc780bd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f945f697aeeb97ad109ae71d4d718c1cdbfcda08999a5418bc21e18fc780bd32->enter($__internal_f945f697aeeb97ad109ae71d4d718c1cdbfcda08999a5418bc21e18fc780bd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a313ddebd15ceba0a0b48459f26719fd40cae18e90b511f081a9c48ffef854a2->leave($__internal_a313ddebd15ceba0a0b48459f26719fd40cae18e90b511f081a9c48ffef854a2_prof);

        
        $__internal_f945f697aeeb97ad109ae71d4d718c1cdbfcda08999a5418bc21e18fc780bd32->leave($__internal_f945f697aeeb97ad109ae71d4d718c1cdbfcda08999a5418bc21e18fc780bd32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
