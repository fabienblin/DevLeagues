<?php

/* @SonataAdmin/Button/show_button.html.twig */
class __TwigTemplate_507ddc9477e471e57e4bae6a09b0fd8c5ab7604b11436aedc46cc992b67d4b18 extends Twig_Template
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
        $__internal_c2e1d402add95f2af2b0da25f96332d0dac0b6a306dbb1bc1233ceb7bbd51ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e1d402add95f2af2b0da25f96332d0dac0b6a306dbb1bc1233ceb7bbd51ec0->enter($__internal_c2e1d402add95f2af2b0da25f96332d0dac0b6a306dbb1bc1233ceb7bbd51ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        $__internal_fd43ca34250d3c4aae314d3c9186a3525410ebad9dbdc9dd77463ecc8d13e9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd43ca34250d3c4aae314d3c9186a3525410ebad9dbdc9dd77463ecc8d13e9c8->enter($__internal_fd43ca34250d3c4aae314d3c9186a3525410ebad9dbdc9dd77463ecc8d13e9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        // line 11
        if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array())) > 0)) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_c2e1d402add95f2af2b0da25f96332d0dac0b6a306dbb1bc1233ceb7bbd51ec0->leave($__internal_c2e1d402add95f2af2b0da25f96332d0dac0b6a306dbb1bc1233ceb7bbd51ec0_prof);

        
        $__internal_fd43ca34250d3c4aae314d3c9186a3525410ebad9dbdc9dd77463ecc8d13e9c8->leave($__internal_fd43ca34250d3c4aae314d3c9186a3525410ebad9dbdc9dd77463ecc8d13e9c8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/show_button.html.twig";
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
{% if admin.canAccessObject('show', object) and admin.show|length > 0 and admin.hasRoute('show') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('show', object) }}\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/show_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Button/show_button.html.twig");
    }
}
