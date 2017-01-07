<?php

/* @SonataAdmin/Button/show_button.html.twig */
class __TwigTemplate_3d423ff004ed3f0aaa2f9fdeb4d1dbad57157e917d2e7a6a4cb019d5f0b8fa44 extends Twig_Template
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
        $__internal_ef7b437b76c52aca78d885335d007b15cfa31d91564e77cd6a98b9447f9cb2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7b437b76c52aca78d885335d007b15cfa31d91564e77cd6a98b9447f9cb2ed->enter($__internal_ef7b437b76c52aca78d885335d007b15cfa31d91564e77cd6a98b9447f9cb2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        $__internal_5e5846b6b417554a2cbb3e965cb1adee789703a59c23ad56d729183aba8eb0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5846b6b417554a2cbb3e965cb1adee789703a59c23ad56d729183aba8eb0df->enter($__internal_5e5846b6b417554a2cbb3e965cb1adee789703a59c23ad56d729183aba8eb0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array())) > 0)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_ef7b437b76c52aca78d885335d007b15cfa31d91564e77cd6a98b9447f9cb2ed->leave($__internal_ef7b437b76c52aca78d885335d007b15cfa31d91564e77cd6a98b9447f9cb2ed_prof);

        
        $__internal_5e5846b6b417554a2cbb3e965cb1adee789703a59c23ad56d729183aba8eb0df->leave($__internal_5e5846b6b417554a2cbb3e965cb1adee789703a59c23ad56d729183aba8eb0df_prof);

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
", "@SonataAdmin/Button/show_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/show_button.html.twig");
    }
}
