<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98978d8c19fd2187501df1449da080a854da9fa063986c5e5e772d6deac43ab4 extends Twig_Template
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
        $__internal_25dcd2f2ea5e8bd9480fc7dfa411f0c3512a3648bdebddc0c7c8ba08cf3fdb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dcd2f2ea5e8bd9480fc7dfa411f0c3512a3648bdebddc0c7c8ba08cf3fdb20->enter($__internal_25dcd2f2ea5e8bd9480fc7dfa411f0c3512a3648bdebddc0c7c8ba08cf3fdb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c1e007a7bafbc50168e6e298336fbb8094af149218f98e6c6c1e64b4e363edd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e007a7bafbc50168e6e298336fbb8094af149218f98e6c6c1e64b4e363edd2->enter($__internal_c1e007a7bafbc50168e6e298336fbb8094af149218f98e6c6c1e64b4e363edd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_25dcd2f2ea5e8bd9480fc7dfa411f0c3512a3648bdebddc0c7c8ba08cf3fdb20->leave($__internal_25dcd2f2ea5e8bd9480fc7dfa411f0c3512a3648bdebddc0c7c8ba08cf3fdb20_prof);

        
        $__internal_c1e007a7bafbc50168e6e298336fbb8094af149218f98e6c6c1e64b4e363edd2->leave($__internal_c1e007a7bafbc50168e6e298336fbb8094af149218f98e6c6c1e64b4e363edd2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b2870ddf4c59f5e75a9e6e085c0e05c402cadf0e13aaa96cfe97d3eb7221496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2870ddf4c59f5e75a9e6e085c0e05c402cadf0e13aaa96cfe97d3eb7221496->enter($__internal_8b2870ddf4c59f5e75a9e6e085c0e05c402cadf0e13aaa96cfe97d3eb7221496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b289cb12ed9b5886f6deb6e907c8af10ceee3842af8fe279e5ffe1583d4485a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b289cb12ed9b5886f6deb6e907c8af10ceee3842af8fe279e5ffe1583d4485a6->enter($__internal_b289cb12ed9b5886f6deb6e907c8af10ceee3842af8fe279e5ffe1583d4485a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b289cb12ed9b5886f6deb6e907c8af10ceee3842af8fe279e5ffe1583d4485a6->leave($__internal_b289cb12ed9b5886f6deb6e907c8af10ceee3842af8fe279e5ffe1583d4485a6_prof);

        
        $__internal_8b2870ddf4c59f5e75a9e6e085c0e05c402cadf0e13aaa96cfe97d3eb7221496->leave($__internal_8b2870ddf4c59f5e75a9e6e085c0e05c402cadf0e13aaa96cfe97d3eb7221496_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
