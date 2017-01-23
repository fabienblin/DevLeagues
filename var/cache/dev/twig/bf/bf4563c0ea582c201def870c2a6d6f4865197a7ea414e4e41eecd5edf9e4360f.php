<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_d8102e3f817d9c4f5c064c52a0b20a9b1cfdc45c8a0c627de5ac101f024383ad extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8416a42afd86563576e4cc0015fc7888a4b2590aefd8ec7219465bba99109d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8416a42afd86563576e4cc0015fc7888a4b2590aefd8ec7219465bba99109d43->enter($__internal_8416a42afd86563576e4cc0015fc7888a4b2590aefd8ec7219465bba99109d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $__internal_6ba00cbf055bb735da43bd3e3ca7cd7f870e89ed1b6e35f0acc42c763a635761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba00cbf055bb735da43bd3e3ca7cd7f870e89ed1b6e35f0acc42c763a635761->enter($__internal_6ba00cbf055bb735da43bd3e3ca7cd7f870e89ed1b6e35f0acc42c763a635761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8416a42afd86563576e4cc0015fc7888a4b2590aefd8ec7219465bba99109d43->leave($__internal_8416a42afd86563576e4cc0015fc7888a4b2590aefd8ec7219465bba99109d43_prof);

        
        $__internal_6ba00cbf055bb735da43bd3e3ca7cd7f870e89ed1b6e35f0acc42c763a635761->leave($__internal_6ba00cbf055bb735da43bd3e3ca7cd7f870e89ed1b6e35f0acc42c763a635761_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3359c30bff90fdf8bc9568cc130a6b08eec3bb2e189ef2393eab48ad10223275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3359c30bff90fdf8bc9568cc130a6b08eec3bb2e189ef2393eab48ad10223275->enter($__internal_3359c30bff90fdf8bc9568cc130a6b08eec3bb2e189ef2393eab48ad10223275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d45a36b5461625a1d56e5578092b3b63662d711800aedae1c1e70dc4addcf163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45a36b5461625a1d56e5578092b3b63662d711800aedae1c1e70dc4addcf163->enter($__internal_d45a36b5461625a1d56e5578092b3b63662d711800aedae1c1e70dc4addcf163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d45a36b5461625a1d56e5578092b3b63662d711800aedae1c1e70dc4addcf163->leave($__internal_d45a36b5461625a1d56e5578092b3b63662d711800aedae1c1e70dc4addcf163_prof);

        
        $__internal_3359c30bff90fdf8bc9568cc130a6b08eec3bb2e189ef2393eab48ad10223275->leave($__internal_3359c30bff90fdf8bc9568cc130a6b08eec3bb2e189ef2393eab48ad10223275_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
