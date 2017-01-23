<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_36e409297659bb3c6ecf83f423fc3b64b88ed23cf0d1b5d19b926d7d0b77dba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7e6b81001f560ed7a85175f61c7e75e031c66dab982b758cbbc3ec4643604ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e6b81001f560ed7a85175f61c7e75e031c66dab982b758cbbc3ec4643604ce->enter($__internal_c7e6b81001f560ed7a85175f61c7e75e031c66dab982b758cbbc3ec4643604ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $__internal_c47758bf3ae96624b4c087ba13ec03913b9a8185f3e5a9ec012aabcdf8c5a511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47758bf3ae96624b4c087ba13ec03913b9a8185f3e5a9ec012aabcdf8c5a511->enter($__internal_c47758bf3ae96624b4c087ba13ec03913b9a8185f3e5a9ec012aabcdf8c5a511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e6b81001f560ed7a85175f61c7e75e031c66dab982b758cbbc3ec4643604ce->leave($__internal_c7e6b81001f560ed7a85175f61c7e75e031c66dab982b758cbbc3ec4643604ce_prof);

        
        $__internal_c47758bf3ae96624b4c087ba13ec03913b9a8185f3e5a9ec012aabcdf8c5a511->leave($__internal_c47758bf3ae96624b4c087ba13ec03913b9a8185f3e5a9ec012aabcdf8c5a511_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7182dec2fec7ef8feb2bdc0c75ecf45c6774545aecab715b80178cc662c67df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7182dec2fec7ef8feb2bdc0c75ecf45c6774545aecab715b80178cc662c67df->enter($__internal_c7182dec2fec7ef8feb2bdc0c75ecf45c6774545aecab715b80178cc662c67df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a04dde81c1160176dac61d3b0f9f32fba19357bc4bbab71d2ea680f5367a8c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04dde81c1160176dac61d3b0f9f32fba19357bc4bbab71d2ea680f5367a8c67->enter($__internal_a04dde81c1160176dac61d3b0f9f32fba19357bc4bbab71d2ea680f5367a8c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_a04dde81c1160176dac61d3b0f9f32fba19357bc4bbab71d2ea680f5367a8c67->leave($__internal_a04dde81c1160176dac61d3b0f9f32fba19357bc4bbab71d2ea680f5367a8c67_prof);

        
        $__internal_c7182dec2fec7ef8feb2bdc0c75ecf45c6774545aecab715b80178cc662c67df->leave($__internal_c7182dec2fec7ef8feb2bdc0c75ecf45c6774545aecab715b80178cc662c67df_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
