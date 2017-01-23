<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_dc82ae30463cecce9be56929b53fb0903a7ab7de5e57456fa2d593c47544880c extends Twig_Template
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
        $__internal_e1b1f9787c28e3d11e5678a973e7172e8084f61b7c17ae0120bb80bf8e8b8ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b1f9787c28e3d11e5678a973e7172e8084f61b7c17ae0120bb80bf8e8b8ffb->enter($__internal_e1b1f9787c28e3d11e5678a973e7172e8084f61b7c17ae0120bb80bf8e8b8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_95378b90e1d3a0b8497bcd6c8ae147ec1296441e600ab4111139f6be80c7ca16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95378b90e1d3a0b8497bcd6c8ae147ec1296441e600ab4111139f6be80c7ca16->enter($__internal_95378b90e1d3a0b8497bcd6c8ae147ec1296441e600ab4111139f6be80c7ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e1b1f9787c28e3d11e5678a973e7172e8084f61b7c17ae0120bb80bf8e8b8ffb->leave($__internal_e1b1f9787c28e3d11e5678a973e7172e8084f61b7c17ae0120bb80bf8e8b8ffb_prof);

        
        $__internal_95378b90e1d3a0b8497bcd6c8ae147ec1296441e600ab4111139f6be80c7ca16->leave($__internal_95378b90e1d3a0b8497bcd6c8ae147ec1296441e600ab4111139f6be80c7ca16_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df5379877a051ed1767d32fe1ba316836408c34ed90018d3988e541517964ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5379877a051ed1767d32fe1ba316836408c34ed90018d3988e541517964ab6->enter($__internal_df5379877a051ed1767d32fe1ba316836408c34ed90018d3988e541517964ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2154dbda0e7edb5a2aa2b0272735e9dd4ff298913a7a1f82148576d86b722868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2154dbda0e7edb5a2aa2b0272735e9dd4ff298913a7a1f82148576d86b722868->enter($__internal_2154dbda0e7edb5a2aa2b0272735e9dd4ff298913a7a1f82148576d86b722868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2154dbda0e7edb5a2aa2b0272735e9dd4ff298913a7a1f82148576d86b722868->leave($__internal_2154dbda0e7edb5a2aa2b0272735e9dd4ff298913a7a1f82148576d86b722868_prof);

        
        $__internal_df5379877a051ed1767d32fe1ba316836408c34ed90018d3988e541517964ab6->leave($__internal_df5379877a051ed1767d32fe1ba316836408c34ed90018d3988e541517964ab6_prof);

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
