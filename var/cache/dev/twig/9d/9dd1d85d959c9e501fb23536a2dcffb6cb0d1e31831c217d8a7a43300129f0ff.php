<?php

/* @SonataAdmin/Button/edit_button.html.twig */
class __TwigTemplate_da4900b628c25f72b253c555d7218b895b930b9c6713b31fbfa6c6405ce6238c extends Twig_Template
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
        $__internal_93dd01c7341d8db832e73ba28afc71e49d6ed205001d7511a1a6546fd26d7227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93dd01c7341d8db832e73ba28afc71e49d6ed205001d7511a1a6546fd26d7227->enter($__internal_93dd01c7341d8db832e73ba28afc71e49d6ed205001d7511a1a6546fd26d7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/edit_button.html.twig"));

        $__internal_6b400f730773277bec97e0889752b3e942f47e46fd4be6522628da4a556d211d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b400f730773277bec97e0889752b3e942f47e46fd4be6522628da4a556d211d->enter($__internal_6b400f730773277bec97e0889752b3e942f47e46fd4be6522628da4a556d211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_93dd01c7341d8db832e73ba28afc71e49d6ed205001d7511a1a6546fd26d7227->leave($__internal_93dd01c7341d8db832e73ba28afc71e49d6ed205001d7511a1a6546fd26d7227_prof);

        
        $__internal_6b400f730773277bec97e0889752b3e942f47e46fd4be6522628da4a556d211d->leave($__internal_6b400f730773277bec97e0889752b3e942f47e46fd4be6522628da4a556d211d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/edit_button.html.twig";
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/edit_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
