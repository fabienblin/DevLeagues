<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_362a18fb74ce5dd291e0271071db7097a5052be441ee53b798a2ab05b48607b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1746302faf29a066753283ee1b6f59823d29c7ecee4b129fadc9764ab5e5835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1746302faf29a066753283ee1b6f59823d29c7ecee4b129fadc9764ab5e5835->enter($__internal_b1746302faf29a066753283ee1b6f59823d29c7ecee4b129fadc9764ab5e5835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $__internal_23c191826b109260a369f2b1257c78dde637c81860f3c2eecabb9cbb6864fab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c191826b109260a369f2b1257c78dde637c81860f3c2eecabb9cbb6864fab5->enter($__internal_23c191826b109260a369f2b1257c78dde637c81860f3c2eecabb9cbb6864fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1746302faf29a066753283ee1b6f59823d29c7ecee4b129fadc9764ab5e5835->leave($__internal_b1746302faf29a066753283ee1b6f59823d29c7ecee4b129fadc9764ab5e5835_prof);

        
        $__internal_23c191826b109260a369f2b1257c78dde637c81860f3c2eecabb9cbb6864fab5->leave($__internal_23c191826b109260a369f2b1257c78dde637c81860f3c2eecabb9cbb6864fab5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "@SonataAdmin/Pager/links.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
