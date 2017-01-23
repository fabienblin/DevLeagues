<?php

/* @SonataAdmin/Button/acl_button.html.twig */
class __TwigTemplate_efef1557b0e4b78d94f3ba610108a4ea20510115b28a0a6c6c26451e3748fa8c extends Twig_Template
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
        $__internal_eb317df3744a7d3e3e300c93cc04f4c0223fbe918b147bd9d8b822c727ae8259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb317df3744a7d3e3e300c93cc04f4c0223fbe918b147bd9d8b822c727ae8259->enter($__internal_eb317df3744a7d3e3e300c93cc04f4c0223fbe918b147bd9d8b822c727ae8259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        $__internal_ff6be00e5ef08f29f647bf45e493311870c4795293247995759646f362d157b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6be00e5ef08f29f647bf45e493311870c4795293247995759646f362d157b7->enter($__internal_ff6be00e5ef08f29f647bf45e493311870c4795293247995759646f362d157b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_eb317df3744a7d3e3e300c93cc04f4c0223fbe918b147bd9d8b822c727ae8259->leave($__internal_eb317df3744a7d3e3e300c93cc04f4c0223fbe918b147bd9d8b822c727ae8259_prof);

        
        $__internal_ff6be00e5ef08f29f647bf45e493311870c4795293247995759646f362d157b7->leave($__internal_ff6be00e5ef08f29f647bf45e493311870c4795293247995759646f362d157b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  27 => 12,  25 => 11,);
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/acl_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
