<?php

/* @SonataAdmin/Button/list_button.html.twig */
class __TwigTemplate_6defc203323e75a493c69d16f9ef5a4db65a450b64ddf1d10276aff235f2dfff extends Twig_Template
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
        $__internal_a64b62dc6984a9202eb323b6e97914886a5ae7e6e0382bc3c24dceb7cecda7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64b62dc6984a9202eb323b6e97914886a5ae7e6e0382bc3c24dceb7cecda7a7->enter($__internal_a64b62dc6984a9202eb323b6e97914886a5ae7e6e0382bc3c24dceb7cecda7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        $__internal_e8e42003dc6bf332ef8f5d44a5c93011f01fed757b20b80b5444c8dc4b943f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e42003dc6bf332ef8f5d44a5c93011f01fed757b20b80b5444c8dc4b943f23->enter($__internal_e8e42003dc6bf332ef8f5d44a5c93011f01fed757b20b80b5444c8dc4b943f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_a64b62dc6984a9202eb323b6e97914886a5ae7e6e0382bc3c24dceb7cecda7a7->leave($__internal_a64b62dc6984a9202eb323b6e97914886a5ae7e6e0382bc3c24dceb7cecda7a7_prof);

        
        $__internal_e8e42003dc6bf332ef8f5d44a5c93011f01fed757b20b80b5444c8dc4b943f23->leave($__internal_e8e42003dc6bf332ef8f5d44a5c93011f01fed757b20b80b5444c8dc4b943f23_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/list_button.html.twig";
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/list_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
