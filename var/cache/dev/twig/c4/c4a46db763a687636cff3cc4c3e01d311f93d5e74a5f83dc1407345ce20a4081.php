<?php

/* @SonataAdmin/CRUD/list__action_delete.html.twig */
class __TwigTemplate_834572ed5a05a5972300587a27f297fe2d1a7864a63d159e32698be5718b22ba extends Twig_Template
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
        $__internal_85b84b304aea767a865c2400792db18f73cb767acc50b9a85472604a5121e874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b84b304aea767a865c2400792db18f73cb767acc50b9a85472604a5121e874->enter($__internal_85b84b304aea767a865c2400792db18f73cb767acc50b9a85472604a5121e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_delete.html.twig"));

        $__internal_509b3a8d84747f70cab801908e527c1c071dcf99b00737ada16302dadd801693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509b3a8d84747f70cab801908e527c1c071dcf99b00737ada16302dadd801693->enter($__internal_509b3a8d84747f70cab801908e527c1c071dcf99b00737ada16302dadd801693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_85b84b304aea767a865c2400792db18f73cb767acc50b9a85472604a5121e874->leave($__internal_85b84b304aea767a865c2400792db18f73cb767acc50b9a85472604a5121e874_prof);

        
        $__internal_509b3a8d84747f70cab801908e527c1c071dcf99b00737ada16302dadd801693->leave($__internal_509b3a8d84747f70cab801908e527c1c071dcf99b00737ada16302dadd801693_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_delete.html.twig";
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

{% if admin.isGranted('DELETE', object) and admin.hasRoute('delete') %}
    <a href=\"{{ admin.generateObjectUrl('delete', object) }}\" class=\"btn btn-sm btn-default delete_link\" title=\"{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_delete.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action_delete.html.twig");
    }
}
