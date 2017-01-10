<?php

/* @SonataAdmin/CRUD/list_html.html.twig */
class __TwigTemplate_a6194cce564624ca5b72e30048267ccfb0e6bcbd97b2dcdbd9269c9344cb97d1 extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6704ada5521c79c96858b01a5535257edc85b23ddcc38dd465fff6c18c6ded9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6704ada5521c79c96858b01a5535257edc85b23ddcc38dd465fff6c18c6ded9c->enter($__internal_6704ada5521c79c96858b01a5535257edc85b23ddcc38dd465fff6c18c6ded9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $__internal_e1febc4a59909e8ced2b1abee69ffc96d2c2524b5fdf3a5c8f6883bb9a35a9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1febc4a59909e8ced2b1abee69ffc96d2c2524b5fdf3a5c8f6883bb9a35a9ea->enter($__internal_e1febc4a59909e8ced2b1abee69ffc96d2c2524b5fdf3a5c8f6883bb9a35a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6704ada5521c79c96858b01a5535257edc85b23ddcc38dd465fff6c18c6ded9c->leave($__internal_6704ada5521c79c96858b01a5535257edc85b23ddcc38dd465fff6c18c6ded9c_prof);

        
        $__internal_e1febc4a59909e8ced2b1abee69ffc96d2c2524b5fdf3a5c8f6883bb9a35a9ea->leave($__internal_e1febc4a59909e8ced2b1abee69ffc96d2c2524b5fdf3a5c8f6883bb9a35a9ea_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_959afc7f394aff7aa5775d0d779d7dbc4f68fa061b19e3d2e46b2339dda86578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959afc7f394aff7aa5775d0d779d7dbc4f68fa061b19e3d2e46b2339dda86578->enter($__internal_959afc7f394aff7aa5775d0d779d7dbc4f68fa061b19e3d2e46b2339dda86578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_15f515a1cb2a65ed8a95f4370c9d313d8be15092f5722044562c2e54181e13b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f515a1cb2a65ed8a95f4370c9d313d8be15092f5722044562c2e54181e13b0->enter($__internal_15f515a1cb2a65ed8a95f4370c9d313d8be15092f5722044562c2e54181e13b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_15f515a1cb2a65ed8a95f4370c9d313d8be15092f5722044562c2e54181e13b0->leave($__internal_15f515a1cb2a65ed8a95f4370c9d313d8be15092f5722044562c2e54181e13b0_prof);

        
        $__internal_959afc7f394aff7aa5775d0d779d7dbc4f68fa061b19e3d2e46b2339dda86578->leave($__internal_959afc7f394aff7aa5775d0d779d7dbc4f68fa061b19e3d2e46b2339dda86578_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_html.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
