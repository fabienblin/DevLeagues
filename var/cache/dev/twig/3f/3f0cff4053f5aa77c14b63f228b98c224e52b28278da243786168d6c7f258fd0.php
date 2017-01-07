<?php

/* @SonataAdmin/CRUD/list__action_show.html.twig */
class __TwigTemplate_06e06d1196743501afc024496a170a8f45750125b0ec2207e781d4cfa9d52be9 extends Twig_Template
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
        $__internal_6114609cb53ce33e2ec5291edc3be8f7a8bcda7037e1b420c0f9d8196a4646c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6114609cb53ce33e2ec5291edc3be8f7a8bcda7037e1b420c0f9d8196a4646c5->enter($__internal_6114609cb53ce33e2ec5291edc3be8f7a8bcda7037e1b420c0f9d8196a4646c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_show.html.twig"));

        $__internal_719c233da095b17954447ea70cd9ef5e99d13fc33ee8a2010922661681285565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719c233da095b17954447ea70cd9ef5e99d13fc33ee8a2010922661681285565->enter($__internal_719c233da095b17954447ea70cd9ef5e99d13fc33ee8a2010922661681285565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_6114609cb53ce33e2ec5291edc3be8f7a8bcda7037e1b420c0f9d8196a4646c5->leave($__internal_6114609cb53ce33e2ec5291edc3be8f7a8bcda7037e1b420c0f9d8196a4646c5_prof);

        
        $__internal_719c233da095b17954447ea70cd9ef5e99d13fc33ee8a2010922661681285565->leave($__internal_719c233da095b17954447ea70cd9ef5e99d13fc33ee8a2010922661681285565_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.isGranted('VIEW', object) and admin.hasRoute('show') %}
    <a href=\"{{ admin.generateObjectUrl('show', object) }}\" class=\"btn btn-sm btn-default view_link\" title=\"{{ 'action_show'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i>
        {{ 'action_show'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_show.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action_show.html.twig");
    }
}
