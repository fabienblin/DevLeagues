<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_1bf1242b193b6ee418a0c0cfd2f77c892fa87366c6bafbbc88fab4538f645ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a7cdcae4547bf82dfff2c6115077882da27319f1713db5010afc7aaea67f8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7cdcae4547bf82dfff2c6115077882da27319f1713db5010afc7aaea67f8a3->enter($__internal_1a7cdcae4547bf82dfff2c6115077882da27319f1713db5010afc7aaea67f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $__internal_8374dfac8cf786b42d2c9d6649ce93fe052b8ef55a01e1066b2515fc2f812c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8374dfac8cf786b42d2c9d6649ce93fe052b8ef55a01e1066b2515fc2f812c11->enter($__internal_8374dfac8cf786b42d2c9d6649ce93fe052b8ef55a01e1066b2515fc2f812c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7cdcae4547bf82dfff2c6115077882da27319f1713db5010afc7aaea67f8a3->leave($__internal_1a7cdcae4547bf82dfff2c6115077882da27319f1713db5010afc7aaea67f8a3_prof);

        
        $__internal_8374dfac8cf786b42d2c9d6649ce93fe052b8ef55a01e1066b2515fc2f812c11->leave($__internal_8374dfac8cf786b42d2c9d6649ce93fe052b8ef55a01e1066b2515fc2f812c11_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
