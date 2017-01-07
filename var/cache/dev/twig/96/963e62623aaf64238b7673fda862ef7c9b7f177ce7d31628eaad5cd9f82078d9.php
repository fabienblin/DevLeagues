<?php

/* @SonataAdmin/CRUD/list__action_edit.html.twig */
class __TwigTemplate_65b3848e0b22931e2014875746919b6995e69faa70c5f994bd8c08329c5c3fef extends Twig_Template
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
        $__internal_3d6ae49e65f30101678870eaa80c8b69074107b5a687de7b7a0cd49bd1d24781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6ae49e65f30101678870eaa80c8b69074107b5a687de7b7a0cd49bd1d24781->enter($__internal_3d6ae49e65f30101678870eaa80c8b69074107b5a687de7b7a0cd49bd1d24781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_edit.html.twig"));

        $__internal_24d37e7de612d2934d947fb4203e0d68c1a7ceb7e10e0261a0f133789237093a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d37e7de612d2934d947fb4203e0d68c1a7ceb7e10e0261a0f133789237093a->enter($__internal_24d37e7de612d2934d947fb4203e0d68c1a7ceb7e10e0261a0f133789237093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_edit.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_3d6ae49e65f30101678870eaa80c8b69074107b5a687de7b7a0cd49bd1d24781->leave($__internal_3d6ae49e65f30101678870eaa80c8b69074107b5a687de7b7a0cd49bd1d24781_prof);

        
        $__internal_24d37e7de612d2934d947fb4203e0d68c1a7ceb7e10e0261a0f133789237093a->leave($__internal_24d37e7de612d2934d947fb4203e0d68c1a7ceb7e10e0261a0f133789237093a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_edit.html.twig";
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

{% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}
    <a href=\"{{ admin.generateObjectUrl('edit', object) }}\" class=\"btn btn-sm btn-default edit_link\" title=\"{{ 'action_edit'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_edit.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action_edit.html.twig");
    }
}
