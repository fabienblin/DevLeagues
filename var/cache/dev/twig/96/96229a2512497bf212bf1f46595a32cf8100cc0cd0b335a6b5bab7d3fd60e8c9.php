<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_51104f744037272c6bbda8d40792826ec6edeecdfc90f44ab592ba7e03d67d21 extends Twig_Template
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
        $__internal_c646686bf39303f47d803567f2e7c3baff682271cfccfb45ec1a50f77dc2da79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c646686bf39303f47d803567f2e7c3baff682271cfccfb45ec1a50f77dc2da79->enter($__internal_c646686bf39303f47d803567f2e7c3baff682271cfccfb45ec1a50f77dc2da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a3a52f534aa56173ef74e2792a6b3e7a134d042d2e9b8162ad7ecd56c5f3e8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a52f534aa56173ef74e2792a6b3e7a134d042d2e9b8162ad7ecd56c5f3e8c7->enter($__internal_a3a52f534aa56173ef74e2792a6b3e7a134d042d2e9b8162ad7ecd56c5f3e8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c646686bf39303f47d803567f2e7c3baff682271cfccfb45ec1a50f77dc2da79->leave($__internal_c646686bf39303f47d803567f2e7c3baff682271cfccfb45ec1a50f77dc2da79_prof);

        
        $__internal_a3a52f534aa56173ef74e2792a6b3e7a134d042d2e9b8162ad7ecd56c5f3e8c7->leave($__internal_a3a52f534aa56173ef74e2792a6b3e7a134d042d2e9b8162ad7ecd56c5f3e8c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
