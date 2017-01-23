<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_a0d9bca7bee9ba83de7c445da59d3c2b39c2ad8ac852961e6e8325d0243e307d extends Twig_Template
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
        $__internal_e70a988ce3801accbce8a892097f5d37e9e9d8f1c5bbdedfcae6e5b087cbc206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70a988ce3801accbce8a892097f5d37e9e9d8f1c5bbdedfcae6e5b087cbc206->enter($__internal_e70a988ce3801accbce8a892097f5d37e9e9d8f1c5bbdedfcae6e5b087cbc206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        $__internal_f6a5f2432b0c840c1531ff377ffa461e31f5c703e8e6883ea0bed49dc9b60a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a5f2432b0c840c1531ff377ffa461e31f5c703e8e6883ea0bed49dc9b60a90->enter($__internal_f6a5f2432b0c840c1531ff377ffa461e31f5c703e8e6883ea0bed49dc9b60a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

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
        
        $__internal_e70a988ce3801accbce8a892097f5d37e9e9d8f1c5bbdedfcae6e5b087cbc206->leave($__internal_e70a988ce3801accbce8a892097f5d37e9e9d8f1c5bbdedfcae6e5b087cbc206_prof);

        
        $__internal_f6a5f2432b0c840c1531ff377ffa461e31f5c703e8e6883ea0bed49dc9b60a90->leave($__internal_f6a5f2432b0c840c1531ff377ffa461e31f5c703e8e6883ea0bed49dc9b60a90_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_352b5a205da61e2ef84ae57465f95a1d0d9ed9836eee9305034a7e7e249f46d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352b5a205da61e2ef84ae57465f95a1d0d9ed9836eee9305034a7e7e249f46d2->enter($__internal_352b5a205da61e2ef84ae57465f95a1d0d9ed9836eee9305034a7e7e249f46d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_361b21558c1d957de7d72c4a4b43907ed80d8191c63a128ac293e79d8a3b4f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361b21558c1d957de7d72c4a4b43907ed80d8191c63a128ac293e79d8a3b4f66->enter($__internal_361b21558c1d957de7d72c4a4b43907ed80d8191c63a128ac293e79d8a3b4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_361b21558c1d957de7d72c4a4b43907ed80d8191c63a128ac293e79d8a3b4f66->leave($__internal_361b21558c1d957de7d72c4a4b43907ed80d8191c63a128ac293e79d8a3b4f66_prof);

        
        $__internal_352b5a205da61e2ef84ae57465f95a1d0d9ed9836eee9305034a7e7e249f46d2->leave($__internal_352b5a205da61e2ef84ae57465f95a1d0d9ed9836eee9305034a7e7e249f46d2_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_135b03dff8a37e41ea1fb7f098000a727d9bb55d978d469b8ba40952c2084a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135b03dff8a37e41ea1fb7f098000a727d9bb55d978d469b8ba40952c2084a25->enter($__internal_135b03dff8a37e41ea1fb7f098000a727d9bb55d978d469b8ba40952c2084a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a5c53b70a448454612643385950b8073bb5ec3b2f0e98f60cee6f8980c48077e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c53b70a448454612643385950b8073bb5ec3b2f0e98f60cee6f8980c48077e->enter($__internal_a5c53b70a448454612643385950b8073bb5ec3b2f0e98f60cee6f8980c48077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_a5c53b70a448454612643385950b8073bb5ec3b2f0e98f60cee6f8980c48077e->leave($__internal_a5c53b70a448454612643385950b8073bb5ec3b2f0e98f60cee6f8980c48077e_prof);

        
        $__internal_135b03dff8a37e41ea1fb7f098000a727d9bb55d978d469b8ba40952c2084a25->leave($__internal_135b03dff8a37e41ea1fb7f098000a727d9bb55d978d469b8ba40952c2084a25_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_ddd3128a6592da89892ffded8d007f937c0b8548ac44c3a4d8f22555b30be567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd3128a6592da89892ffded8d007f937c0b8548ac44c3a4d8f22555b30be567->enter($__internal_ddd3128a6592da89892ffded8d007f937c0b8548ac44c3a4d8f22555b30be567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_f0efe559a83b52073852c3ea6255171e46e38178c1c8466016c8c784d1708114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0efe559a83b52073852c3ea6255171e46e38178c1c8466016c8c784d1708114->enter($__internal_f0efe559a83b52073852c3ea6255171e46e38178c1c8466016c8c784d1708114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_f0efe559a83b52073852c3ea6255171e46e38178c1c8466016c8c784d1708114->leave($__internal_f0efe559a83b52073852c3ea6255171e46e38178c1c8466016c8c784d1708114_prof);

        
        $__internal_ddd3128a6592da89892ffded8d007f937c0b8548ac44c3a4d8f22555b30be567->leave($__internal_ddd3128a6592da89892ffded8d007f937c0b8548ac44c3a4d8f22555b30be567_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_6b3bf407ef41f409923e1684bfb2b48c66f18716277b3fa277935e434eeeaf22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3bf407ef41f409923e1684bfb2b48c66f18716277b3fa277935e434eeeaf22->enter($__internal_6b3bf407ef41f409923e1684bfb2b48c66f18716277b3fa277935e434eeeaf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_e703f5995a43b4b919ed76142cd852a092a871fc70e88a7180e035e1771af1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e703f5995a43b4b919ed76142cd852a092a871fc70e88a7180e035e1771af1fa->enter($__internal_e703f5995a43b4b919ed76142cd852a092a871fc70e88a7180e035e1771af1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e703f5995a43b4b919ed76142cd852a092a871fc70e88a7180e035e1771af1fa->leave($__internal_e703f5995a43b4b919ed76142cd852a092a871fc70e88a7180e035e1771af1fa_prof);

        
        $__internal_6b3bf407ef41f409923e1684bfb2b48c66f18716277b3fa277935e434eeeaf22->leave($__internal_6b3bf407ef41f409923e1684bfb2b48c66f18716277b3fa277935e434eeeaf22_prof);

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
