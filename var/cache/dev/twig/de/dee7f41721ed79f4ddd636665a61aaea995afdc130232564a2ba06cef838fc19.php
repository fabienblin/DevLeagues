<?php

/* @SonataAdmin/Button/history_button.html.twig */
class __TwigTemplate_a64f43f89939521d4839c7d1d92c2429ffc2d0063cc3f1392c9c6dbe020c9f3f extends Twig_Template
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
        $__internal_09d5fd6698d6035fd8cd418fd56d27127264114fa09613a3f70cdb0784919d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d5fd6698d6035fd8cd418fd56d27127264114fa09613a3f70cdb0784919d1f->enter($__internal_09d5fd6698d6035fd8cd418fd56d27127264114fa09613a3f70cdb0784919d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        $__internal_9a4dfa6000432c7e738f7554e771c082d44c8089840f312636a85c77bfe6e7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4dfa6000432c7e738f7554e771c082d44c8089840f312636a85c77bfe6e7f9->enter($__internal_9a4dfa6000432c7e738f7554e771c082d44c8089840f312636a85c77bfe6e7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

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
        
        $__internal_09d5fd6698d6035fd8cd418fd56d27127264114fa09613a3f70cdb0784919d1f->leave($__internal_09d5fd6698d6035fd8cd418fd56d27127264114fa09613a3f70cdb0784919d1f_prof);

        
        $__internal_9a4dfa6000432c7e738f7554e771c082d44c8089840f312636a85c77bfe6e7f9->leave($__internal_9a4dfa6000432c7e738f7554e771c082d44c8089840f312636a85c77bfe6e7f9_prof);

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
