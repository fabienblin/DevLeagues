<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4617a7c34311b10f4ecfb16ad52c50f61e88cc1e1c3ce210990199c6fcf4b41a extends Twig_Template
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
        $__internal_796e16ed73d1d867034b30187d9b21ef5ff07c9dd8a1fc44115657bd9c4adaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796e16ed73d1d867034b30187d9b21ef5ff07c9dd8a1fc44115657bd9c4adaaf->enter($__internal_796e16ed73d1d867034b30187d9b21ef5ff07c9dd8a1fc44115657bd9c4adaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_796e16ed73d1d867034b30187d9b21ef5ff07c9dd8a1fc44115657bd9c4adaaf->leave($__internal_796e16ed73d1d867034b30187d9b21ef5ff07c9dd8a1fc44115657bd9c4adaaf_prof);

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
        return array (  22 => 1,);
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
