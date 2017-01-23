<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_d8ce826d678f18660b7abdd99b27ab4243e7e20c0c699f28a14bbbc2a5ff222c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fcc883418cc2e53f250aadf88e0282bbf9f3c16b9125cfc7f45df11b5f69559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcc883418cc2e53f250aadf88e0282bbf9f3c16b9125cfc7f45df11b5f69559->enter($__internal_9fcc883418cc2e53f250aadf88e0282bbf9f3c16b9125cfc7f45df11b5f69559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $__internal_ad01ebe60bd238ab4528deae8bb859916e8fbb00362d7b1b758892692f2db186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad01ebe60bd238ab4528deae8bb859916e8fbb00362d7b1b758892692f2db186->enter($__internal_ad01ebe60bd238ab4528deae8bb859916e8fbb00362d7b1b758892692f2db186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fcc883418cc2e53f250aadf88e0282bbf9f3c16b9125cfc7f45df11b5f69559->leave($__internal_9fcc883418cc2e53f250aadf88e0282bbf9f3c16b9125cfc7f45df11b5f69559_prof);

        
        $__internal_ad01ebe60bd238ab4528deae8bb859916e8fbb00362d7b1b758892692f2db186->leave($__internal_ad01ebe60bd238ab4528deae8bb859916e8fbb00362d7b1b758892692f2db186_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "@SonataAdmin/CRUD/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
