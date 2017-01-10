<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_41779fcc9d0044fc55025a2cd98ed3eade13aa2e145ded30fd424a58de20dec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ba2cdd863c9b66ae11ef9d4cb5403f3904c125b6d50e1eb2350e20e57aebd6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba2cdd863c9b66ae11ef9d4cb5403f3904c125b6d50e1eb2350e20e57aebd6c->enter($__internal_9ba2cdd863c9b66ae11ef9d4cb5403f3904c125b6d50e1eb2350e20e57aebd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        $__internal_20f0d10ff351f6646fbfa5edfc05301468a1458fa3b717a8a632bf0d553fa5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f0d10ff351f6646fbfa5edfc05301468a1458fa3b717a8a632bf0d553fa5ec->enter($__internal_20f0d10ff351f6646fbfa5edfc05301468a1458fa3b717a8a632bf0d553fa5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_9ba2cdd863c9b66ae11ef9d4cb5403f3904c125b6d50e1eb2350e20e57aebd6c->leave($__internal_9ba2cdd863c9b66ae11ef9d4cb5403f3904c125b6d50e1eb2350e20e57aebd6c_prof);

        
        $__internal_20f0d10ff351f6646fbfa5edfc05301468a1458fa3b717a8a632bf0d553fa5ec->leave($__internal_20f0d10ff351f6646fbfa5edfc05301468a1458fa3b717a8a632bf0d553fa5ec_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_9af345a99c99ac730b04059426e88aac7df8c7d206f26090035e3328df161eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af345a99c99ac730b04059426e88aac7df8c7d206f26090035e3328df161eb0->enter($__internal_9af345a99c99ac730b04059426e88aac7df8c7d206f26090035e3328df161eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_70f584bd02110d1f941098709c4fec4d95fe2378c693da996ea544704740baa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f584bd02110d1f941098709c4fec4d95fe2378c693da996ea544704740baa2->enter($__internal_70f584bd02110d1f941098709c4fec4d95fe2378c693da996ea544704740baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_70f584bd02110d1f941098709c4fec4d95fe2378c693da996ea544704740baa2->leave($__internal_70f584bd02110d1f941098709c4fec4d95fe2378c693da996ea544704740baa2_prof);

        
        $__internal_9af345a99c99ac730b04059426e88aac7df8c7d206f26090035e3328df161eb0->leave($__internal_9af345a99c99ac730b04059426e88aac7df8c7d206f26090035e3328df161eb0_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd218173197ede1e56b293369932236a4440d0e9eea70c1255ed1ab212043b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd218173197ede1e56b293369932236a4440d0e9eea70c1255ed1ab212043b5e->enter($__internal_cd218173197ede1e56b293369932236a4440d0e9eea70c1255ed1ab212043b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_252bf2e8eae0985e1c6f076d4c9db1e4779d1c449576779d38666beba485bf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252bf2e8eae0985e1c6f076d4c9db1e4779d1c449576779d38666beba485bf84->enter($__internal_252bf2e8eae0985e1c6f076d4c9db1e4779d1c449576779d38666beba485bf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_252bf2e8eae0985e1c6f076d4c9db1e4779d1c449576779d38666beba485bf84->leave($__internal_252bf2e8eae0985e1c6f076d4c9db1e4779d1c449576779d38666beba485bf84_prof);

        
        $__internal_cd218173197ede1e56b293369932236a4440d0e9eea70c1255ed1ab212043b5e->leave($__internal_cd218173197ede1e56b293369932236a4440d0e9eea70c1255ed1ab212043b5e_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_46e234bb4dc5b28f2dc80a41f1a88d2afd5f117b857d1098e54001b13a1e2d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e234bb4dc5b28f2dc80a41f1a88d2afd5f117b857d1098e54001b13a1e2d62->enter($__internal_46e234bb4dc5b28f2dc80a41f1a88d2afd5f117b857d1098e54001b13a1e2d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_3fbea89ee4d7960c87743081fa584a7e4acd2cb865a1be4f153cc1ebbca290ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbea89ee4d7960c87743081fa584a7e4acd2cb865a1be4f153cc1ebbca290ee->enter($__internal_3fbea89ee4d7960c87743081fa584a7e4acd2cb865a1be4f153cc1ebbca290ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_3fbea89ee4d7960c87743081fa584a7e4acd2cb865a1be4f153cc1ebbca290ee->leave($__internal_3fbea89ee4d7960c87743081fa584a7e4acd2cb865a1be4f153cc1ebbca290ee_prof);

        
        $__internal_46e234bb4dc5b28f2dc80a41f1a88d2afd5f117b857d1098e54001b13a1e2d62->leave($__internal_46e234bb4dc5b28f2dc80a41f1a88d2afd5f117b857d1098e54001b13a1e2d62_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_c5bbe8f7d8d3f18a8133602345756a288e3f5519cbb3193a4aebc544c406cce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bbe8f7d8d3f18a8133602345756a288e3f5519cbb3193a4aebc544c406cce1->enter($__internal_c5bbe8f7d8d3f18a8133602345756a288e3f5519cbb3193a4aebc544c406cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_3cffcf1945731b644f0c947a429693f6a5e9fa9b9136011a95fb1f808824a6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cffcf1945731b644f0c947a429693f6a5e9fa9b9136011a95fb1f808824a6c1->enter($__internal_3cffcf1945731b644f0c947a429693f6a5e9fa9b9136011a95fb1f808824a6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3cffcf1945731b644f0c947a429693f6a5e9fa9b9136011a95fb1f808824a6c1->leave($__internal_3cffcf1945731b644f0c947a429693f6a5e9fa9b9136011a95fb1f808824a6c1_prof);

        
        $__internal_c5bbe8f7d8d3f18a8133602345756a288e3f5519cbb3193a4aebc544c406cce1->leave($__internal_c5bbe8f7d8d3f18a8133602345756a288e3f5519cbb3193a4aebc544c406cce1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
