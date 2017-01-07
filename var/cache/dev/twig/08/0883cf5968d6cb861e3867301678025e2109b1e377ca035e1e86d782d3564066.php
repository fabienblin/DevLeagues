<?php

/* @SonataAdmin/Button/history_button.html.twig */
class __TwigTemplate_ea0ce1f1d340039679c0b681cf77eb515380f706b37f96788bb8c1ef95881880 extends Twig_Template
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
        $__internal_03e0c0ee988b791ed3c171d63394c859af6cd57e34fa50b8a76a64c34214472d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e0c0ee988b791ed3c171d63394c859af6cd57e34fa50b8a76a64c34214472d->enter($__internal_03e0c0ee988b791ed3c171d63394c859af6cd57e34fa50b8a76a64c34214472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        $__internal_064673d91fe3dd1fc17e5658bb5682528fb8ddc7e85a89448f5eaacf9b2e36bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064673d91fe3dd1fc17e5658bb5682528fb8ddc7e85a89448f5eaacf9b2e36bd->enter($__internal_064673d91fe3dd1fc17e5658bb5682528fb8ddc7e85a89448f5eaacf9b2e36bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_03e0c0ee988b791ed3c171d63394c859af6cd57e34fa50b8a76a64c34214472d->leave($__internal_03e0c0ee988b791ed3c171d63394c859af6cd57e34fa50b8a76a64c34214472d_prof);

        
        $__internal_064673d91fe3dd1fc17e5658bb5682528fb8ddc7e85a89448f5eaacf9b2e36bd->leave($__internal_064673d91fe3dd1fc17e5658bb5682528fb8ddc7e85a89448f5eaacf9b2e36bd_prof);

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
", "@SonataAdmin/Button/history_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/history_button.html.twig");
    }
}
