<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_56d37970210216b729b039dfb7a93032040843282c9f3e4be150a65dd2762b3d extends Twig_Template
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
        $__internal_39109e811d7589a913dc8dd7c27ebc68aa401cdcb1e0925e0a09c42b9f40a8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39109e811d7589a913dc8dd7c27ebc68aa401cdcb1e0925e0a09c42b9f40a8a0->enter($__internal_39109e811d7589a913dc8dd7c27ebc68aa401cdcb1e0925e0a09c42b9f40a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_456486cbdc652328a671915970a4592112fb86783258ce2c4758f2357a3bd8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456486cbdc652328a671915970a4592112fb86783258ce2c4758f2357a3bd8d7->enter($__internal_456486cbdc652328a671915970a4592112fb86783258ce2c4758f2357a3bd8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_39109e811d7589a913dc8dd7c27ebc68aa401cdcb1e0925e0a09c42b9f40a8a0->leave($__internal_39109e811d7589a913dc8dd7c27ebc68aa401cdcb1e0925e0a09c42b9f40a8a0_prof);

        
        $__internal_456486cbdc652328a671915970a4592112fb86783258ce2c4758f2357a3bd8d7->leave($__internal_456486cbdc652328a671915970a4592112fb86783258ce2c4758f2357a3bd8d7_prof);

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
", "@Framework/Form/money_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
