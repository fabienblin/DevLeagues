<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_ff143f3f67ccedecf5dcb0cad2694240a269ed8959f73d22e46966d7593c37db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f4a83234671453a2d4a93fdde2d4d744b584582e1ee28270986440db3c45c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4a83234671453a2d4a93fdde2d4d744b584582e1ee28270986440db3c45c96->enter($__internal_4f4a83234671453a2d4a93fdde2d4d744b584582e1ee28270986440db3c45c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $__internal_a98552a87304604a168dcfc6a959abbd36d35f14f45c336145da57a023eec9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98552a87304604a168dcfc6a959abbd36d35f14f45c336145da57a023eec9e6->enter($__internal_a98552a87304604a168dcfc6a959abbd36d35f14f45c336145da57a023eec9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4a83234671453a2d4a93fdde2d4d744b584582e1ee28270986440db3c45c96->leave($__internal_4f4a83234671453a2d4a93fdde2d4d744b584582e1ee28270986440db3c45c96_prof);

        
        $__internal_a98552a87304604a168dcfc6a959abbd36d35f14f45c336145da57a023eec9e6->leave($__internal_a98552a87304604a168dcfc6a959abbd36d35f14f45c336145da57a023eec9e6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "@SonataAdmin/CRUD/show_compare.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
