<?php

/* @SonataAdmin/Button/history_button.html.twig */
class __TwigTemplate_787b0d19cc15d764fc49518ca4a308a83e8c4fdc79196417115950743c975757 extends Twig_Template
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
        $__internal_b46881c119538bb2c7bd67090fc0b324513e1f9149d3c0b48f0e8146622bc2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46881c119538bb2c7bd67090fc0b324513e1f9149d3c0b48f0e8146622bc2a6->enter($__internal_b46881c119538bb2c7bd67090fc0b324513e1f9149d3c0b48f0e8146622bc2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        $__internal_8c03c3674079c421635ddd8b5221786998858f558e137f5467689a47577844b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c03c3674079c421635ddd8b5221786998858f558e137f5467689a47577844b3->enter($__internal_8c03c3674079c421635ddd8b5221786998858f558e137f5467689a47577844b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_b46881c119538bb2c7bd67090fc0b324513e1f9149d3c0b48f0e8146622bc2a6->leave($__internal_b46881c119538bb2c7bd67090fc0b324513e1f9149d3c0b48f0e8146622bc2a6_prof);

        
        $__internal_8c03c3674079c421635ddd8b5221786998858f558e137f5467689a47577844b3->leave($__internal_8c03c3674079c421635ddd8b5221786998858f558e137f5467689a47577844b3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/history_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
