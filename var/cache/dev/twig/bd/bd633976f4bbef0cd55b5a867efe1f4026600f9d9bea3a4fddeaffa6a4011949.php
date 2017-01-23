<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_912f8a23d3fc43677581a1b321467306e27a0788fb4fe8ed829b7ecc0718c82a extends Twig_Template
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
        $__internal_93c05462cb563289a81d24f96b8b84783010977ea3b3dc77582310031b9ed7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c05462cb563289a81d24f96b8b84783010977ea3b3dc77582310031b9ed7e0->enter($__internal_93c05462cb563289a81d24f96b8b84783010977ea3b3dc77582310031b9ed7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_df29c47acb545c33915950f554de2abf1866ed5b279f08e232d16f5a01d19800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df29c47acb545c33915950f554de2abf1866ed5b279f08e232d16f5a01d19800->enter($__internal_df29c47acb545c33915950f554de2abf1866ed5b279f08e232d16f5a01d19800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_93c05462cb563289a81d24f96b8b84783010977ea3b3dc77582310031b9ed7e0->leave($__internal_93c05462cb563289a81d24f96b8b84783010977ea3b3dc77582310031b9ed7e0_prof);

        
        $__internal_df29c47acb545c33915950f554de2abf1866ed5b279f08e232d16f5a01d19800->leave($__internal_df29c47acb545c33915950f554de2abf1866ed5b279f08e232d16f5a01d19800_prof);

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
