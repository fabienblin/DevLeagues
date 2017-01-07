<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7c12564ea56ba32907ee241a9acb379c31e5f024ad35ba87b8edcb00469341c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57fc212f59cf41926c45bdd6dac8156d2a04cab6a33eb1695315d002704a58c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fc212f59cf41926c45bdd6dac8156d2a04cab6a33eb1695315d002704a58c0->enter($__internal_57fc212f59cf41926c45bdd6dac8156d2a04cab6a33eb1695315d002704a58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a0e5517acb847cc5f4e88e4b69a17a0c28ff0962cbf7ee245d78c20d81fe8951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e5517acb847cc5f4e88e4b69a17a0c28ff0962cbf7ee245d78c20d81fe8951->enter($__internal_a0e5517acb847cc5f4e88e4b69a17a0c28ff0962cbf7ee245d78c20d81fe8951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_57fc212f59cf41926c45bdd6dac8156d2a04cab6a33eb1695315d002704a58c0->leave($__internal_57fc212f59cf41926c45bdd6dac8156d2a04cab6a33eb1695315d002704a58c0_prof);

        
        $__internal_a0e5517acb847cc5f4e88e4b69a17a0c28ff0962cbf7ee245d78c20d81fe8951->leave($__internal_a0e5517acb847cc5f4e88e4b69a17a0c28ff0962cbf7ee245d78c20d81fe8951_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea00dcbf00bbe9937f4565c526d9d2b616d7eacd63fc75f175c3800dfb299900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea00dcbf00bbe9937f4565c526d9d2b616d7eacd63fc75f175c3800dfb299900->enter($__internal_ea00dcbf00bbe9937f4565c526d9d2b616d7eacd63fc75f175c3800dfb299900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cb2bda8c6e1de3aa75d397d7455b30df3704d1829963a49987dd5235869ca89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb2bda8c6e1de3aa75d397d7455b30df3704d1829963a49987dd5235869ca89->enter($__internal_4cb2bda8c6e1de3aa75d397d7455b30df3704d1829963a49987dd5235869ca89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4cb2bda8c6e1de3aa75d397d7455b30df3704d1829963a49987dd5235869ca89->leave($__internal_4cb2bda8c6e1de3aa75d397d7455b30df3704d1829963a49987dd5235869ca89_prof);

        
        $__internal_ea00dcbf00bbe9937f4565c526d9d2b616d7eacd63fc75f175c3800dfb299900->leave($__internal_ea00dcbf00bbe9937f4565c526d9d2b616d7eacd63fc75f175c3800dfb299900_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
